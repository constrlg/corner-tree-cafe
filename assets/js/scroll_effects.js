var slideLeft = {
    duration: 2000,
    distance: '150px',
    origin: 'left'
    };

var slideRight = {
    duration: 2000,
    distance: '150px',
    origin: 'right'
    };

var slideUp = {
    duration: 2000,
    distance: '150px',
    origin: 'bottom'
    }; 

var fadeIn = {
    duration: 2000,
    }; 

    // LANDING PAGE
    ScrollReveal().reveal(".landing_page_content .hero_logo", slideUp);

    // WELCOME INTRO
    ScrollReveal().reveal(".welcome_intro_content .welcome_intro_text", slideUp);
    ScrollReveal().reveal(".welcome_intro_content .welcome_intro_img", fadeIn);
    // ABOUT
    ScrollReveal().reveal(".about_content .about_title", slideLeft);
    ScrollReveal().reveal("#about .owner_img", fadeIn);
    ScrollReveal().reveal("#about .owner_story", slideUp);

    // REVIEWS
    ScrollReveal().reveal(".reviews_content .reviews_title", slideLeft);
    ScrollReveal().reveal("#reviews .reviews_title_desc", slideUp);
    ScrollReveal().reveal("#reviews .some_reviews", slideUp);
    ScrollReveal().reveal("#reviews h2", slideLeft);

    // FEATURED ON
    ScrollReveal().reveal(".featured_on_content .featured_on_title", slideLeft);
    ScrollReveal().reveal(".featured_on_content .featured_on_item", slideUp);

    // MAP AND OPENING HOURS
    ScrollReveal().reveal(".map_and_opening_hours_content .map_and_opening_hours_title", slideLeft);
    ScrollReveal().reveal(".map_and_opening_hours_content .ctc_info", slideLeft);
    ScrollReveal().reveal(".map_and_opening_hours_content .ctc_map_title", slideLeft);

    // MENU LIST
    ScrollReveal().reveal(".menu_content .menu_item", slideUp);
    
    // CONTACT US 
    ScrollReveal().reveal(".contact_us_content .contact_us_input_info", slideUp);

    //SOCIAL MEDIA
    ScrollReveal().reveal("#social_media", slideLeft);
