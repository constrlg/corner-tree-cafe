<?php
    include("conn.php");
    
    session_start();
    unset($_SESSION['admin_login_name']);
    header("location: admin_login_form.php");
?>