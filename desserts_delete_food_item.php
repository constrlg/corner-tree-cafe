<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `desserts` WHERE id = $id");
    header("location: desserts_food_item_list.php");

?>