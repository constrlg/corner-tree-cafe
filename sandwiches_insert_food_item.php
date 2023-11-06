<?php 
    include("conn.php");
    
    if(isset($_POST['insert_food_item'])) {
        $food_item_img = $_FILES['food_item_img'];
        print_r($_FILES['food_item_img']);
        $img_loc = $_FILES['food_item_img']['tmp_name'];
        $img_name = $_FILES['food_item_img']['name'];
        $img_des = "sandwiches/".$img_name;
        move_uploaded_file($img_loc, 'sandwiches/'.$img_name);

        $food_item_name = $_POST['food_item_name'];
        $food_item_description = $_POST['food_item_description'];
        $food_item_price = $_POST['food_item_price'];

        mysqli_query($conn, "INSERT INTO `sandwiches`(`food_item_img`, `food_item_name`, `food_item_description`, `food_item_price`) VALUES ('$img_des','$food_item_name','$food_item_description','$food_item_price')");
        header("location: sandwiches_food_item_list.php");
    } 
?>