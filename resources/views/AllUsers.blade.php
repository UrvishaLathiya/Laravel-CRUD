<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <style>
        nav .w-5{
            display: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">All Users List</h1>
        <a href="new" class="btn btn-success btn-sm mb-2">+ Add New</a><br>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>View</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->age}}</td>
                        <td>{{$user->city_name}}</td>
                        <td><a href="{{route('view.user', $user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                        <td><a href="{{route('delete.user', $user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td><a href="{{route('update.page', $user->id) }}" class="btn btn-warning btn-sm">Update</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="mt-5"> --}}
            {{-- {{ $users->links("pagination::bootstrap-5") }} --}}
            {{-- {{ $users->links() }}
        </div> --}}
        {{-- <div> 
            Total Users: {{$users->total()}}<br>
            Current Page: {{$users->currentPage()}}<br>

        </div> --}}
    </div>
</body>
</html>