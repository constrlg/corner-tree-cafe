<?php 
    include("conn.php");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM `drinks` WHERE id = $id");
    header("location: drinks_item_list.php");

?>