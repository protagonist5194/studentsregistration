<?php
include "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $student_id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $course = $_POST["course"];


    // Update data in the "students" table
    $sql = "UPDATE students SET name = '$name', email = '$email', phone = '$phone', course = '$course' WHERE id = $student_id";
    if (mysqli_query($con, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
