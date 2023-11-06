<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `party_trays` WHERE id = $id");
    header("location: party_trays_food_item_list.php");

?>