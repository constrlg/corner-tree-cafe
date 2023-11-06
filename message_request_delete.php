<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `message_request` WHERE id = $id");
    header("location: message_request.php");

?>