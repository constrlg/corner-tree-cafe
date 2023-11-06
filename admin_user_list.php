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
    <title>Corner Tree Cafe: Admin</title>
  </head>
  <body>

    <?php include_once("admin_sidebar.php") ?>

    <section id="admin_user_list">
        <div class="container">
            <div class="admin_user_list_content">        
                <button data-bs-toggle="modal" data-bs-target="#add_admin_form_modal" class="add_admin_btn">Add Admin</button>
                <table class="table">
                    <thead>
                        <th>Admin User List</th>
                    </thead>
                    <?php 
                                include("conn.php");
                                $admin_user_list = mysqli_query($conn, "SELECT * FROM `admin_user_list`");
                                while($row = mysqli_fetch_array($admin_user_list)) {
                                    echo "
                                        <tr>
                                            <td>$row[admin_user]</td>
                                        </tr>
                                    ";
                                }
                            ?>
                </table>
            </div>
        </div>
    </section>

    <div class="modal fade" id="add_admin_form_modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="add_admin_form_modal_content">
            <button type="button" class="close close_modal_btn" data-bs-dismiss="modal" aria-label="Close">
              <i class="fas fa-times"></i>
            </button>
            <h1 class="add_admin_title">Add Admin</h1>
              <form method="POST" action="admin_add_admin_user.php">
                <label>Admin User:</label><br>
                <input type="text" name="admin_user" required><br>
                <label>Admin Password:</label><br>
                <input type="password" name="admin_password" required><br>
                <input type="submit" value="Add Admin" name="add_admin_btn" class="add_admin_btn">    
              </form>
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