<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `sandwiches` WHERE id = $id");
    header("location: sandwiches_food_item_list.php");

?>