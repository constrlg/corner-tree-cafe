<?php 
    include("conn.php");
    
    if(isset($_POST['update_food_item'])) {
        $ID = $_POST['id'];
        $food_item_img = $_FILES['food_item_img'];
        print_r($_FILES['food_item_img']);
        $img_loc = $_FILES['food_item_img']['tmp_name'];
        $img_name = $_FILES['food_item_img']['name'];
        $img_des = "salads/".$img_name;
        move_uploaded_file($img_loc, 'salads/'.$img_name);

        $food_item_name = $_POST['food_item_name'];
        $food_item_description = $_POST['food_item_description'];
        $food_item_price = $_POST['food_item_price'];

        mysqli_query($conn, "UPDATE `salads` SET `food_item_img`='$img_des',`food_item_name`='$food_item_name',`food_item_description`='$food_item_description',`food_item_price`='$food_item_price' WHERE id = $ID");
        header("location: salads_food_item_list.php");
    }

?>