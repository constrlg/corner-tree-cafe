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

    <title>Corner Tree Cafe: Contact Us / Send Feedback</title>
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

    <section id="contact_us">
        <div class="container">
            <div class="contact_us_content">
                <div class="row">

                <div class="col-lg-1"></div>
                    <div class="col-lg-5 col-md-12">
                        <div class="contact_us_input_info">
                            <form method="POST" action="contact_us_submit.php">
                                <h1 class="contact_us_title">Contact Us</h1>
                                <p>Leave us a message if you have any queries or want to leave some feedback.</p>
                                <label>Name:</label><br>
                                <input type="text" name="name" required><br>
                                <label>Email:</label><br>
                                <input type="email" name="email" required><br>
                                <label>Contact Number:</label><br>
                                <input type="number" name="contact_number" required>
                                <!-- <small>Format: 09xxxxxxxx</small><br> -->
                                <label>Message:</label><br>
                                <textarea type="text" name="message" required></textarea><br>
                                <input type="submit" value="Submit" name="contact_us_submit_btn" class="submit_btn">
                            </form>
                        </div>                        
                    </div>

                    <div class="col-lg-5">
                        <div class="contact_us_via">
                            <div class="contact_us_via_content">
                                <h1>You can contact us via:</h2>
                                    <div class="contact_us_via_list">
                                        <div class="row">
                                        
                                        <div class="col-lg-12">
                                            <div class="contact_us_via_item">
                                                <div class="contact_us_social_list">
                                                    <h2>Social Media</h2>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="contact_us_social_item">
                                                                <a href="https://www.facebook.com/Corner-Tree-Cafe-103780474410/" target="blank_"><img src="assets/img/social_media/fb_icon.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="contact_us_social_item">
                                                                <a href="https://twitter.com/cornertreecafe" target="blank_"><img src="assets/img/social_media/twitter_icon.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="contact_us_social_item">
                                                                <a href="mailto:cornertreecafe@gmail.com" target="blank_"><img src="assets/img/social_media/gmail_icon.png" alt=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="contact_us_via_item">
                                                <div class="contact_us_numbers_list">
                                                    <h2>Dial Numbers</h2>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="contact_us_number_item">
                                                                <label>Telephone:</label>
                                                                <p>(02) 897-0295</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="contact_us_number_item">
                                                                <label>Text/Call:</label>
                                                                <p>0906 558-6177</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4">
                                                            <div class="contact_us_number_item">
                                                                <label>Text/Call:</label>
                                                                <p>0906 530 9721</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        </div>

                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>

                </div>
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


    <!-- <div id="social_media">
        <div class="social_media_list">
            <h1 class="follow_us_title">Follow Us!</h1>
            <li class="social_media_item"><a href="https://www.facebook.com/Corner-Tree-Cafe-103780474410/"><img src="assets/img/social_media/fb.png" alt="facebook_logo" class="fb" title="Follow Us On Facebook"></a></li>
            <li class="social_media_item"><a href="https://twitter.com/cornertreecafe"><img src="assets/img/social_media/twiiter.png" alt="twitter_logo" class="twitter" title="Follow Us On Twitter"></a></li>
            <li class="social_media_item"><a href="mailto:cornertreecafe@gmail.com"><img src="assets/img/social_media/gmail.png" alt="gmail.logo" class="gmail" title="Follow Us On Email"></a></li>
        </div>
    </div> -->

    <button id="scroll_to_top_arrow">
        <i class="fas fa-arrow-up"></i>
    </button>

 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="assets/js/scroll_effects.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="assets/js/review_swiper_effects.js"></script>
    <script src="assets/js/header_active.js"></script>
    <script src="assets/js/scroll_to_top_arrow_active.js"></script>
    <script src="assets/js/social_media_fade.js"></script>

  </body>
</html>