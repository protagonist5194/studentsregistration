<?php
include "db_config.php";
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">STUDENT'S REGISTRATION FORM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    

    <!-- Inside the existing <div class="container"> ... </div> -->
<div class="mt-5">
    <h2>Student List</h2>
    <table class="table table-bordered table-hoover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>course</th>
                <th></th>


            </tr>
        </thead>
       <tbody>
                <?php
                $sql = "SELECT id, name, email,phone,course FROM students ORDER BY id DESC";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                   $serialNumber = 1;// Initialize the serial number

                    while ($row = $result->fetch_assoc()) {
                    
                        echo "<tr>";
                        echo "<td>" .$serialNumber. "</td>";   
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["course"] . "</td>";

                        echo "<td>";

                        echo "<a href='edit.php?id=" . $row["id"] . "' class='btn btn-warning btn-sm'>Edit</a> ";
                        echo "<a href='view.php?id=" . $row["id"] . "' class='btn btn-info btn-sm'>View</a> ";
                        echo "<a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";

                        $serialNumber++;// Increment the serial number for the next row
                    }
                } else {
                    echo "<tr><td colspan='3'>No records found</td></tr>";
                }

                $con->close();
                ?>
            </tbody>
        
    </table>
    <!-- Add Student Button -->
        <a href="registration_form.php" class="btn btn-primary">Add Student</a>
</div>

</body>
</html>
