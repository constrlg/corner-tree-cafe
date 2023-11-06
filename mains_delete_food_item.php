<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `mains` WHERE id = $id");
    header("location: mains_food_item_list.php");

?>