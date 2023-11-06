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
    <title>Corner Tree Cafe: Admin Log In</title>
  </head>
  <body>

   <section id="admin_login">
       <div class="container">
           <div class="admin_login_content">
               <form method="POST" action="admin_login_validation.php" class="admin_login_form">
                    <div class="admin_header">
                        <h1 class="admin_login_title">Admin Log In</h1>
                    </div>
                    <div class="admin_login_input_info">
                        <label>Admin User:</label><br>
                        <input type="text" name="admin_user"><br>
                        <label>Admin Password:</label><br>
                        <input type="password" name="admin_password"><br>
                        <input type="submit" name="admin_login_btn" class="admin_login_btn">
                        <?php if(isset($_GET['error'])) { ?>
                          <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                    </div>
               </form>
           </div>
       </div>
   </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>