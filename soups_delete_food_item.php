<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `soups` WHERE id = $id");
    header("location: soups_food_item_list.php");

?>