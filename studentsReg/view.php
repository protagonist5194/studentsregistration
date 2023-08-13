<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       <div class="jumbotron">
  <h1 class="display-4">Student Details</h1>
  <p class="lead">
      <?php
        include "db_config.php";

        if (isset($_GET["id"])) {
            $student_id = $_GET["id"];

            $sql = "SELECT * FROM students WHERE id = $student_id";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<p><strong>Name:</strong> " . $row["name"] . "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>Phone:</strong> " . $row["phone"] . "</p>";
                echo "<p><strong>Course:</strong> " . $row["course"] . "</p>";

                // Display other student details as needed
            } else {
                echo "Student not found.";
            }
        } else {
            echo "Invalid request.";
        }

        $con->close();
        ?>
  </p>
  <hr class="my-4">
  <p></p>
  <p class="lead">
     <a href="index.php" class="btn btn-primary">Back</a>
  </p>
</div>
    </div>
</body>
</html>

