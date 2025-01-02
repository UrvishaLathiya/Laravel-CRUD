<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
    @if ($data)
        <h2>Name: {{ $data->name }}</h2>
        <h5>Email: {{ $data->email }}</h5>
        <h5>Age: {{ $data->age }}</h5>
        <h5>City: {{ $data->city }}</h5>
    @else
        <h1>User not found</h1>
    @endif
</body>
</html>
