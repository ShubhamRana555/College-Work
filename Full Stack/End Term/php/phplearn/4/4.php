<?php 
    $conn = new mysqli("localhost", "root", "", "college");
    if($conn->connect_error)
    {
        die("Connection Failed:" . $conn->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST["name"];
        $percentage=$_POST["percentage"];

        if($percentage>70)
        {
            $sql="INSERT INTO student(name,percentage) VALUES('$name','$percentage')";

            if($conn->query($sql)){
                echo "New record created successfully";
            }
            else
            {
                echo "Error: ". $sql. "<br>". $conn->error;
            }
            
        }
        else
        {
            echo "sorry less marks";
        }
    }
    $conn->close();
?>