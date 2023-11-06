<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `admin_user_list` WHERE id = $id");
    header("location: admin_user_list.php");

?>