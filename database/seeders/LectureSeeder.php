<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\lecture;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(path:"database/json/lectures.json");
        $lecture = collect(json_decode($json));

        $lecture->each(function ($lecture) {
            lecture::create([
                'name'=>$lecture->name,
                'email'=>$lecture->email,
                'age'=>$lecture->age,
                'city'=>$lecture->city,
            ]);
        });
    }
}
