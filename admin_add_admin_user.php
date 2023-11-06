<?php 
    include("conn.php");
    
    if(isset($_POST['add_admin_btn'])) {
        $admin_user = $_POST['admin_user'];
        $admin_password = $_POST['admin_password'];

        mysqli_query($conn, "INSERT INTO `admin_user_list` (`admin_user`, `admin_password`) VALUES ('$admin_user','$admin_password')");
        header("location: admin_user_list.php");
    } 
?>