<?php 
    include("conn.php");

    if(isset($_POST['contact_us_submit_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $message = $_POST['message'];

    mysqli_query($conn, "INSERT INTO `message_request`(`name`, `email`, `contact_number`, `message`) VALUES ('$name','$email','$contact_number','$message')");
        header("location: contact_us.php");
    }
?>