<?php
include "db_config.php";

if (isset($_GET["id"])) {
    $student_id = $_GET["id"];

    // Delete the student's record from the database
    $sql = "DELETE FROM students WHERE id = $student_id";
    if (mysqli_query($con, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}

mysqli_close($con);
?>
