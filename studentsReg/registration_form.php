<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card text-white bg-success mb-3" style="max-width: 36rem;">

        <div class="card-header">
            <h1 class="mt-5">Student Registration Form</h1>
        </div>
        <form method="post" action="process.php">
            <div class="card-body">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" name="phone" id="phone" required>
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <input type="text" class="form-control" name="course" id="course" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
           </div>
        </form>
        <a href="index.php" class="btn btn-primary mt-3">Back</a>
    </div>
</body>
</html>
