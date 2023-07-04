<?php

    $servername = "localhost";
    $username = "root";
    $password = "Burrito.2021#";
    $dbname = "booking.customer";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Taking all 5 values from the form data(input)
    $name =  $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone =$_REQUEST['phone'];
    //$guests =  $_REQUEST['guests'];
    // $date = $_REQUEST['date'];
    // $time = $_REQUEST['time'];
    $message = $_REQUEST['message'];

    $sqlquery = "INSERT INTO table VALUES
        ('0','$name', '$email', '$phone', '0', '$message', '0')";

    if ($conn->query($sql) === TRUE) {
        echo "record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    mysqli_close($conn);

?>