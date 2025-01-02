<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table("users")
                    ->join('cities', 'users.city','=','cities.id')
                    ->select('users.*', 'cities.city_name')
                    // ->count();
                    
                    // // ->whereBetween('id', [2, 5])                
                    // // ->where("name",'like', 's%')
                    // ->orderBy("id")
                    // ->cursorPaginate(5)
                    ->get();
        // return $users;
        // dump($users);

        // foreach($users as $user){
        //     echo $user->name . " </br> ";
        // }

        return view("AllUsers", ["users"=> $users]);
    }

    public function unionData(){
        $lecture = DB::table('lectures');
        $user = DB::table('users')
                    ->union($lecture)
                    ->get();
        return $user;
    }

    public function whenData(){
        $user = DB::table('users')
                    ->when(true, function($query){
                        $query->where('age', '>', 16);
                    }, function($query){
                        $query->where('age','<', 16);
                    })
                    ->get();
        return $user;
    }

    public function chunkData(){
        $user = DB::table('users')
                    ->orderBy('id')
                    ->chunkById(3, function($user){
                        foreach ($user as $u) {
                            echo $u->name . '<br>';
                        }
                    }); 
    }


    public function singleUser(string $id){
        $user = DB::table("users")->where("id", $id)->first();
        return view("SingleUserData", ["data"=>$user]);
    }


    public function addUser(Request $request){
        
        $user = DB::table('users')
                    ->insert([
                        'name'=>$request->username,
                        'email'=> $request->useremail,
                        'age'=>$request->userage,
                        'city'=>$request->usercity,
                    ]);
                   
        if($user){
            return redirect()->route('home');
        }
        else{
            echo 'Not ';
        }
        
    }

    public function updateUser(int $id, Request $request){
        $user = DB::table('users')
                    ->where('id', $id)
                    ->update([
                        'name' => $request->username,
                        'email' => $request->useremail,
                        'age' => $request->userage,
                        'city' => $request->usercity,
                    ]
                );
        if($user){
            return redirect()->route('home');
        }
        else{
            echo 'not updated';
        }
    }

    public function updatePage(int $id){
        $user = DB::table('users')
                    ->find( $id );
        return view('updateUser', ['user'=> $user]);
                    // ->update([

                    // ]);
    }

    public function deleteUser(int $id){
        $user = DB::table('users')
                    ->where('id', $id)
                    ->delete();
        if($user){
            return redirect()->route('home');
        }
    }

    public function showData(){
        // $user = DB::select('select * from users');
        $user = DB::table('users')
                    ->selectRaw('count(*) as total, age')
                    ->groupBy('age')
                    ->get();
        return $user;
    }
}