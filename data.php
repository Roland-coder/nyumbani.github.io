<?php 

    session_start();
    $conn = mysqli_connect("localhost", "root", "", "messages");
    mysqli_query($conn, "INSERT INTO responses (fname, lname, email, subject, message) VALUES ('$fname', '$lname', '$email','$subject','$message')");
    $insert_id = mysqli_insert_id($conn);
    if(!empty($insert_id)) {
    $message = "Your contact information is saved successfully";
              
?>