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
    <title>Corner Tree Cafe: Admin - Sides</title>
  </head>
  <body>
    
  <?php include_once("admin_sidebar.php"); ?>

    <section id="insert_food_item">
        <div class="container">
            <div class="insert_food_item_content">
                <div class="back_btn">
                    <a href="categories.php">
                        <i class="fas fa-arrow-circle-left"></i>
                    </a>
                </div>
                <h1 class="food_category_title">Sides</h1>
                <button type="button" class="food_insert_item_form_modal_btn" data-bs-toggle="modal" data-bs-target="#food_insert_item_form">Insert Item</button>
                <div class="inserted_food_item_list">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Food Image</th>
                            <th>Food Name</th>
                            <th>Food Description</th>
                            <th>Food Prices</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </thead>

                        <tbody>
                            <?php 
                                include("conn.php");
                                $pic = mysqli_query($conn, "SELECT * FROM `sides`");
                                while($row = mysqli_fetch_array($pic)) {
                                    echo "
                                        <tr>
                                            <td>$row[id]</td>
                                            <td><img src='$row[food_item_img]' class='food_item_img'></td>
                                            <td>$row[food_item_name]</td>
                                            <td>$row[food_item_description]</td>
                                            <td>$row[food_item_price]</td>
                                            <td><a href='sides_delete_food_item.php? id=$row[id]' class='delete_food_item_btn'>Delete</a></td>
                                            <td><a href='sides_update_food_item_form.php? id=$row[id]' class='update_food_item_btn'>Update</a></td>
                                            </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    
  <div class="modal fade" id="food_insert_item_form">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="food_insert_item_form">
                <div class="container">
                    <div class="food_insert_item_form_content">
                        <div class="modal-header">
                            <h1 class="insert_food_item_title">Insert Item</h1>
                                <button type="button" class="close close_modal_btn" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                        </div>
                        <form method="POST" action="sides_insert_food_item.php" enctype="multipart/form-data">
                                <div class="food_insert_item_info_list">
                                    <label>Upload Image:</label><br>
                                    <input type="file" name="food_item_img" class="food_item_img" required><br>
                                    <label>Food Name:</label><br>
                                    <input type="text" name="food_item_name" class="food_item_name" required><br>
                                    <label>Food Description:</label><br>
                                    <input type="text" name="food_item_description" class="food_item_description" required><br>
                                    <label>Food Price</label><br>
                                    <input type="text" name="food_item_price" class="food_item_price" required><br>
                                    <input type="submit" name="insert_food_item" value="Insert Food Item" class="insert_food_item_btn">
                                </div>
                        </form>
                    </div> 
                </div>
            </div>  
          </div>
      </div>
  </div>

    <button id="scroll_to_top_arrow">
        <i class="fas fa-arrow-up"></i>
    </button>

    <?php include_once("admin_footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/scroll_to_top_arrow_active.js"></script>
</body>
</html>