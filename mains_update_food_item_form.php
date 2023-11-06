<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/admin_style.css">
    <link rel="icon" href="assets/img/corner_tree_cafe_logo.jpg">
    <title>Corner Tree Cafe: Admin - Mains Update</title>
  </head>
  <body>
    
  <?php include_once("admin_sidebar.php"); ?>

  

  
  <?php 
        include("conn.php");
        $ID = $_GET['id'];
        $Record = mysqli_query($conn, "SELECT * FROM `mains` WHERE id = $ID");
        $data = mysqli_fetch_array($Record);
    ?>


                        <section id="food_update_item_form">
                            <div class="container">
                                <div class="back_btn">
                                    <a href="mains_food_item_list.php">
                                        <i class="fas fa-arrow-circle-left"></i>
                                    </a>
                                </div>
                                <div class="food_update_item_form_content">
                                    <form method="POST" action="mains_update_food_item.php" enctype="multipart/form-data">
                                        <h1 class="update_food_item_title">Update Item</h1>
                                        <div class="food_update_item_info_list">
                                            <label>Upload Image:</label><br>
                                            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                            <input type="file" name="food_item_img" class="food_item_img" value="<?php echo $data['food_item_img'] ?>" required><br><br>
                                            <img src="<?php echo $data['food_item_img']?>"><br><br>
                                            <label>Food Name:</label><br>
                                            <input type="text" name="food_item_name" class="food_item_name" value="<?php echo $data['food_item_name'] ?>" required><br>
                                            <label>Food Description:</label><br>
                                            <input type="text" name="food_item_description" class="food_item_description" value="<?php echo $data['food_item_description'] ?>" required><br>
                                            <label>Food Price</label><br>
                                            <input type="text" name="food_item_price" class="food_item_price" value="<?php echo $data['food_item_price'] ?>" required><br>
                                            <input type="submit" name="update_food_item" value="Update Food Item" class="update_food_item_btn">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>     

    <button id="scroll_to_top_arrow">
        <i class="fas fa-arrow-up"></i>
    </button>
    
    <?php include_once("admin_footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/scroll_to_top_arrow_active.js"></script>
</body>
</html>