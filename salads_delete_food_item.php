<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `salads` WHERE id = $id");
    header("location: salads_food_item_list.php");

?>