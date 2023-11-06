<?php
    include("conn.php");

    if(isset($_POST['admin_login_btn'])) {

        $query = "SELECT * FROM `admin_user_list` WHERE admin_user = '$_POST[admin_user]' AND admin_password = '$_POST[admin_password]'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['status'] = $_POST['admin_user'];
            header("location: admin_panel.php");
        }
        else {
            header("location: admin_login_form.php?error=Incorrect Admin User Or Admin Password!");
            exit();
        }
    }
?>