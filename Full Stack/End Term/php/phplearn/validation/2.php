<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pass"];

    // Create connection
    $conn = new mysqli("localhost", "root", "", "graphic");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO student (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password);

    // Execute the prepared statement
    $stmt->execute();

    echo "New record created successfully";

    $stmt->close();
    $conn->close();
} else {
    echo "No form data received";
}
?>

