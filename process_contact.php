<?php
// Database configuration
$servername = "localhost"; // Replace with your server name (e.g., "127.0.0.1" or "localhost")
$username = "root";        // Replace with your database username
$password = "";            // Replace with your database password
$dbname = "contact_form";  // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data and prevent SQL injection
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO contacts (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    // Execute the query and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "Your query has been submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
