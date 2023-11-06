<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `starters` WHERE id = $id");
    header("location: starters_food_item_list.php");

?>