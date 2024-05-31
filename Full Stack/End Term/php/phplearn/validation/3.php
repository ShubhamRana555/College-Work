<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pass"];

    // Create connection
    $conn = new mysqli("localhost", "root", "", "Graphic");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM student WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);

    // Execute the prepared statement
    $stmt->execute();

    // Get the result
    $res = $stmt->get_result();

    if($res && $res->num_rows > 0)
    {
        echo "Login successful";
    }
    else 
    {
        echo "Login failed";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "No form data received";
}
?>
