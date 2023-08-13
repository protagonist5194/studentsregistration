<!DOCTYPE html>
<html>
<head>
    <title>Edit Student Details</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card text-white bg-warning mb-3" style="max-width: 36rem;">
        <div class="card-header">
            <h1 class="mt-6">Edit Student Details</h1>
        </div>
        <?php
        include "db_config.php";

        if (isset($_GET["id"])) {
            $student_id = $_GET["id"];

            // Fetch student details from the database
            $sql = "SELECT * FROM students WHERE id = $student_id";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
                <form method="post" action="update.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="course">Course:</label>
                        <input type="text" class="form-control" name="course" value="<?php echo $row['course']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                   </div>
                </form>
        <?php
            } else {
                echo "Student not found.";
            }
        } else {
            echo "Invalid request.";
        }

        $con->close();
        ?>
        <a href="index.php" class="btn btn-primary mt-3">Back</a>
    </div>
</body>
</html>
