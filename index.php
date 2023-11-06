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

    <title>Corner Tree Cafe: Homepage</title>
  </head>
  <body>


  <div class="splash_screen">
      <div class="container">
          <div class="splash_screen_content">
            <img src="assets/img/corner_tree_cafe_logo.jpg" alt="corner_tree_cafe_logo">
            <h1 class="splash_screen_title">Welcome to the home of comfort vegetarian food in Manila. </h1>
          </div>
      </div>
  </div>
  
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
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#reviews">Reviews</a>
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

    <section id="landing_page">
        <div class="landing_page_content">       
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="hero_img">
                            <img src="assets/img/corner_tree_cafe_img.jpg" alt="corner_tree_cafe_img">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="hero_logo">
                            <img src="assets/img/corner_tree_cafe_logo.jpg" alt="corner_tree_cafe_logo">
                                <p>We are open daily from 11 am to 10 pm, Kitchen at Jupiter St. closes at 9:30 pm.</p>
                                    <!-- <a href="contact_us.php">
                                        <div class="contact_us">
                                            <div class="contact_icon"><i class="fas fa-phone-alt"></i></div>
                                            <span>Contact Us</span>
                                        </div>
                                    </a> -->
                                    <div class="contact_us">
                                        <a href="contact_us.php"><button class="contact_us_btn">Contact Us</button></a>
                                    </div>
                                <div class="explore_more_btn">
                                    <span>Explore More</span><br>
                                        <a href="#welcome_intro"><i class="fas fa-utensils"></i></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section id="welcome_intro">
         <div class="container">
            <div class="welcome_intro_content">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="welcome_intro_text">
                            <p><span id="w_letter">W</span>e serve food from Asia to <span id="sfc">Africa</span>, <span id="sfc">Europe</span>, the <span id="sfc">Middle East</span>, and the <span id="sfc">Americas</span> in a cozy intimate setting. We also offer good wines, local beers, and some house cocktails. You don't have to be a vegetarian to enjoy our delicious food. In fact, most of our customers are omnivores, but vegetarians will feel right at home here (we also serve some vegan and gluten-free dishes). To add to our regular menu, we have weekly specials sometimes inspired by current events or international days. Booking is advisable. Children welcome.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="welcome_intro_img">
                            <img src="assets/img/home_img.jpg" alt="home_img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="white_wave">
                <img src="assets/img/white_wave1.png" alt="white_wave1">
            </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="about_content">
                <h1 class="about_title">About</h1>
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="owner_img">
                                <img src="assets/img/chiqui_mabanta_img.jpg" alt="chiqui_mabanta_img">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="owner_story">
                                <p>
                                    I've wanted to open a vegetarian café for a long time. While visiting my sister Giovanna Mabanta in London in 1996, I saw how easy it was to eat healthily.  I was also exposed to the idea of vegetarian food being mainstream. <br><br>
                                    I then got excited with the idea of setting up a cosy place that would serve tasty, hearty meals with both vegetarian and vegan (no eggs, no dairy) dishes, and to present the food as great comfort food but with no meat. This was something new for Manila. <br><br>
                                    To test the market, my friend Michelle & I sold vegetarian food at organic markets and bazaars for a year, after which I felt ready to launch the café, supported by good friends and family.  I had a clear idea of the sort of  neighbourhood cafe I wanted, which would create a little community-like feel attracting like-minded people.   After meeting with several malls, this  tiny spot next to a large narra tree on a corner of Jupiter Street, Makati became available. The location provided our name and we opened the Corner Tree Café on 25 May 2009. <br><br>
                                    The cafe has since attracted a wide range of customers — from office workers, expats,  teenagers, elderly people, children (believe it or not), backpackers, yogis, weight-watchers to plain healthy eaters. In fact, our customers are people who simply like good food (meat or no meat) and many  are actually carnivores! It is a place that serves simple, down-to-earth, good food and also offers great desserts, coffee & tea, smoothies, wine, beer & spirits. The soft music is cool too. <br><br>
                                    It is a friendly welcoming place for groups, romantic dates, families; even for the lone customer just wanting to have a meal while reading a book (we have books on the shelves if you don't have any) or catching up on work. Our customers often end up chatting with the people next to them and sometimes form lasting friendships with them. <br><br>
                                    Because of our growing consciousness, we are able to make better choices for our health, the animals' and our planet's well-being. We feel it is the right  time and place to contribute to this positive growth.
                                </p>
                                <address id="owner">- Chiqui Mabanta/Owner</address>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <section id="reviews">
            <div class="white_wave">
                <img src="assets/img/white_wave1.1.png" alt="white_wave1.1">
            </div>
            <div class="container">
                <div class="reviews_content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="reviews_title_desc">
                                <h1 class="reviews_title">Reviews</h1>
                                <p>Since opening, the Corner Tree Café has been featured in many major newspapers, magazines, TV and radio programs. It has been included in the Miele Guide of Asia's Best Restaurants and is listed in the Tatler book of the Philippine's Best Restaurants, both for the past two years. It has also been voted by PETA (People for Ethical Treatment of Animals) one of the 10 best vegetarian restaurants in the Philippines.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="some_reviews">
                                <h2>Some reviews:</h2>    
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            “A NEW haven for vegetarians in a quiet corner of Jupiter Street in Bel-Air, Makati, is now the buzz. Corner Tree Café draws not only vegans but also resolute healthy eaters.” Read more…
                                            <cite><a href="style/lifestyle/view/20090819-221083/Vegetables--as-superstar-main-course" target="_blank">Philippine Daily Inquirer, August 19, 2009</a></cite>   
                                        </div>
                                        <div class="swiper-slide">
                                            “Corner Tree Cafe had me at hello. Despite being tucked away behind a large tree, the tiny restaurant stands out among the larger establishments that line busy Jupiter Street in Makati.” Read more…
                                            <cite><a href="https://www.gmanetwork.com/news/lifestyle/food/229560/converting-carnivores-at-corner-tree-cafe/story/" target="_blank">GMA News August 2011</a></cite>   
                                        </div>
                                        <div class="swiper-slide">
                                            “Chiqui Mabanta has spent years quietly disproving these misconceptions with the exquisite dishes served in her vegetarian restaurant on Jupiter Street, The Corner Tree Cafe.” see video…
                                            <cite><a href="http://www.abs-cbnnews.com/video/lifestyle/07/04/12/resto-along-jupiter-haven-vegetarians" target="_blank">ABS-CBN News July 2012</a></cite>   
                                        </div>
                                        <div class="swiper-slide">
                                            “The vibe: You'd expect a restaurant voted as one of Asia's finest restaurants (they were included in the 2010-2011 Miele Guide) to be a little snobbish—but the Corner Tree Café is far from that. This tiny low-key café's white walls and wooden accents give the space a very homey and cozy vibe. Feel free to walk into the café in slippers.” Read more…
                                            <cite><a href="https://www.spot.ph/eatdrink/the-latest-eat-drink/47705/10-weekend-brunch-spots-in-manila-#pid=13136" target="_blank">Spot.ph Review</a></cite>   
                                        </div>
                                        <div class="swiper-slide">
                                            “Corner Tree Cafe is probably the best vegetarian restaurant in Makati.” Read more…
                                            <cite><a href="https://awesome.blog/2009/06/corner-tree-cafe.html" target="_blank">Our Awesome Planet</a></cite>   
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>

                    <div class="featured_on">
                        <div class="container">
                            <div class="featured_on_content">
                                <h1 class="featured_on_title">We've been featured on:</h1>
                                    <div class="featured_on_list">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1"></div>
                                            <div class="col-lg-10 col-md-10">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="featured_on_item">
                                                            <img src="assets/img/featured_on/gma_logo.JPG" alt="gma_logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="featured_on_item">
                                                            <img src="assets/img/featured_on/abs_cbn_logo.JPG" alt="abs_cbn_logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="featured_on_item">
                                                            <img src="assets/img/featured_on/philstar_logo.jpg" alt="philstar_logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="featured_on_item">
                                                            <img src="assets/img/featured_on/inquirer_logo.jpg" alt="inquirer_logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="featured_on_item">
                                                            <img src="assets/img/featured_on/ph_tatler_logo.jpg" alt="ph_tatler_logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="featured_on_item">
                                                            <img src="assets/img/featured_on/lonely_planet_logo.jpg" alt="lonely_planet_logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="featured_on_item">
                                                            <img src="assets/img/featured_on/wiki_pilipinas_logo.JPG" alt="wiki_pilipinas_logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="featured_on_item">
                                                            <img src="assets/img/featured_on/spot_logo.jpg" alt="spot_logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="featured_on_item">
                                                            <img src="assets/img/featured_on/rogue_logo.jpg" alt="rogue_logo">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <div class="featured_on_item">
                                                            <img src="assets/img/featured_on/miele_logo.jpg" alt="miele_logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-1"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
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