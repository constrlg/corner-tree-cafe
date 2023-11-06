<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `pinoy_dishes` WHERE id = $id");
    header("location: pinoy_dishes_food_item_list.php");

?>