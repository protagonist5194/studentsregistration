<?php
include "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $course = $_POST["course"];

    // Insert data into the "students" table
    $sql = "INSERT INTO students (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";
    if (mysqli_query($con, $sql)) {
        // Redirect to the thank you page
        header("Location: thankyou.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Send confirmation email
    require 'send_email.php';

    mysqli_close($con);
}
?>
