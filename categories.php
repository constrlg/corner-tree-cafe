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
    <title>Corner Tree Cafe: Admin - Categories</title>
  </head>
  <body>


    <?php include_once("admin_sidebar.php"); ?>

    <section id="food_categories">
      <div class="container">
        <div class="food_categories_content">
          <h1 class="food_categories_title">Food Categories</h1>
            <div class="food_categories_menu_list">
              <div class="row">
            
                <div class="col-lg-3">
                  <a href="starters_food_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Starters  
                    </button>
                  </a>
                </div>

                <div class="col-lg-3">
                  <a href="party_trays_food_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Party Trays 
                    </button>
                  </a>
                </div>

                <div class="col-lg-3">
                  <a href="soups_food_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Soups
                    </button>
                  </a>
                </div>

                <div class="col-lg-3">
                  <a href="salads_food_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Salads
                    </button>
                  </a>
                </div>

                <div class="col-lg-3">
                  <a href="sandwiches_food_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Sandwiches
                    </button>
                  </a>
                </div>

                <div class="col-lg-3">
                  <a href="mains_food_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Mains
                    </button>
                  </a>
                </div>

                <div class="col-lg-3">
                  <a href="desserts_food_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Desserts
                    </button>
                  </a>
                </div>

                <div class="col-lg-3">
                  <a href="pinoy_dishes_food_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Pinoy Dishes
                    </button>
                  </a>
                </div>

                <div class="col-lg-3">
                  <a href="sides_food_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Sides
                    </button>
                  </a>
                </div>

                <div class="col-lg-3">
                  <a href="drinks_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Drinks
                    </button>
                  </a>
                </div>

                <div class="col-lg-3">
                  <a href="other_items_food_item_list.php">
                    <button class="food_categories_menu_item_btn">
                      Other Items
                    </button>
                  </a>
                </div>


              </div>
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