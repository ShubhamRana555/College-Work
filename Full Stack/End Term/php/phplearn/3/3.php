<?php
    $conn = new mysqli("localhost", "root", "", "graphic");

    if ($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    }

    $username = $_POST["name"];
    $password = $_POST["pass"];

    $sql = "SELECT * FROM student WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login Successful";
    } else {
        echo "Incorrect Username and Password";
    }

    $conn->close();
?>
