<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    

    // Save the form data to the database (assuming you have a MySQL database set up)
    // Replace 'localhost', 'username', 'password', and 'database_name' with your actual database credentials
    $conn = new mysqli('localhost', 'username', 'password', 'database_name');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO contact (fullname,email,message) VALUES ('$fullname', '$email', '$message')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        // Redirect to a thank you page
        header("Location: thank_you.blade.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>
