<?php 
  session_start();
  if($_SESSION['status']){}
  else 
  {
    header("location: admin_login_form.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="assets/img/corner_tree_cafe_logo.jpg">
    <link rel="stylesheet" href="assets/css/admin_style.css">
    <title>Corner Tree Cafe: Admin</title>
  </head>
  <body>


    <?php include_once("admin_sidebar.php"); ?>

    <section id="landing_admin_panel">
        <div class="landing_admin_panel_content">
            <div class="container">
                <div class="hero_logo">
                    <img src="assets/img/corner_tree_cafe_logo.jpg" alt="">
                </div>
                <div class="admin_title">
                    <h1>Administration Panel</h1>
                </div>
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