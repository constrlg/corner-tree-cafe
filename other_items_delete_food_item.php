<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `other_items` WHERE id = $id");
    header("location: other_items_food_item_list.php");

?>