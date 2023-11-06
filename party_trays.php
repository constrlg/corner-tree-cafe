<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/index_style.css">
    <link rel="icon" href="assets/img/corner_tree_cafe_logo.jpg">
    <title>Corner Tree Cafe: Party Trays</title>
  </head>
  <body>


<div class="wrapper">
        
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/img/corner_tree_cafe_logo.jpg" alt="corner_tree_cafe_logo"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                  </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#reviews">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="map_and_opening_hours.html">Map & Opening Hours</a>
                            </li>
                            <button class="menu_categories_list_modal_btn" data-bs-toggle="modal" data-bs-target="#menu_categories_list_modal">Menu Categories</button>
                        </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="modal fade" id="menu_categories_list_modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content menu_categories_list_modal_content">
                <button type="button" class="close menu_categories_list_close_modal_btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <h1 class="menu_categories_title">Menu Categories</h1>
                <div class="menu_categories_item_list">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="starters.php"><button class="menu_categories_item_btn">Starters</button></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="party_trays.php"><button class="menu_categories_item_btn">Party Trays</button></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="soups.php"><button class="menu_categories_item_btn">Soups</button></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="salads.php"><button class="menu_categories_item_btn">Salads</button></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="sandwiches.php"><button class="menu_categories_item_btn">Sandwiches</button></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="mains.php"><button class="menu_categories_item_btn">Mains</button></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="desserts.php"><button class="menu_categories_item_btn">Desserts</button></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="pinoy_dishes.php"><button class="menu_categories_item_btn">Pinoy Dishes</button></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="sides.php"><button class="menu_categories_item_btn">Sides</button></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="drinks.php"><button class="menu_categories_item_btn">Drinks</button></a>
                        </div>
                        <div class="col-lg-4">
                            <a href="other_items.php"><button class="menu_categories_item_btn">Other Items</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="menu_wrapper">
        <div class="container">
            <div class="menu_content">
                <h1 class="menu_title">Menu - Party Trays</h1>
                    <div class="menu_item_list">
                        <div class="row">
                            <?php
                                include("conn.php"); 
                                $pic = mysqli_query($conn, "SELECT * FROM `party_trays`");
                                while($row = mysqli_fetch_array($pic)) {
                                    ?>
                                        <div class="col-lg-12">
                                           <div class="menu_item">
                                               <div class="row">
                                                <div class="col-lg-2 col-md-2">
                                                        <div class="menu_item_img">
                                                            <?php echo "<img src='$row[food_item_img]'>" ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10">
                                                        <div class="menu_item_info">
                                                            <h2><?php echo "$row[food_item_name]" ?></h2>
                                                            <p><?php echo "$row[food_item_description]" ?></p>
                                                            <span><strong><?php echo "$row[food_item_price]" ?></strong></span>
                                                        </div>
                                                    </div>
                                               </div>
                                           </div>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <p id="ps">Some items (not in our regular menu) need a 2-day notice</p>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="footer_content">
                <p>Copyright © 2021 Corner Tree Café. All Rights Reserved.<br> Photos by Ninfa Bito, Andre Mendoza and Neal Oshima. Logo by B+C Design.</p>
            </div>
        </div>
    </footer>

</div> 

    <div id="social_media">
        <div class="social_media_list">
            <h1 class="follow_us_title">Follow Us!</h1>
            <li class="social_media_item"><a href="https://www.facebook.com/Corner-Tree-Cafe-103780474410/"><img src="assets/img/social_media/fb.png" alt="facebook_logo" class="fb" title="Follow Us On Facebook"></a></li>
            <li class="social_media_item"><a href="https://twitter.com/cornertreecafe"><img src="assets/img/social_media/twiiter.png" alt="twitter_logo" class="twitter" title="Follow Us On Twitter"></a></li>
            <li class="social_media_item"><a href="mailto:cornertreecafe@gmail.com"><img src="assets/img/social_media/gmail.png" alt="gmail.logo" class="gmail" title="Follow Us On Email"></a></li>
        </div>
    </div>

    <button id="scroll_to_top_arrow">
        <i class="fas fa-arrow-up"></i>
    </button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="assets/js/scroll_effects.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="assets/js/review_swiper_effects.js"></script>
    <script src="assets/js/splash_screen.js"></script>
    <script src="assets/js/header_active.js"></script>
    <script src="assets/js/scroll_to_top_arrow_active.js"></script>
    <script src="assets/js/social_media_fade.js"></script>

  </body>
</html>