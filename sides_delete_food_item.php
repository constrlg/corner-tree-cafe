<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `sides` WHERE id = $id");
    header("location: sides_food_item_list.php");

?>