<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">User Information Form</h1>
        <form action="{{route('addUser')}}" method="POST">
            @csrf
            <!-- Name Field -->
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="username">
            </div>
            <!-- Email Field -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="useremail">
            </div>
            <!-- Age Field -->
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="text" class="form-control" name="userage">
            </div>
            <!-- City Field -->
            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" class="form-control" name="usercity">
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Include Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
