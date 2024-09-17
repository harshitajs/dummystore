<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Fashion Store</title>
    <?php wp_head(); ?>
</head>
<body class="body-content">
<div class="main-container">
    <section class="announcement-section">
        <div class="announcement-bar wrapper">
            <p class="announcement-msg">Sign up and get 20% off to your first order. <span>Sign Up Now</span></p>
            <i class="fa fa-times fa-lg announcement-close" aria-hidden="true"></i>
        </div>
    </section>

    <section class="header">
        <nav class="mobile-nav">
            <i class="fa fa-times fa-lg mobile-nav-close-btn" aria-hidden="true"></i>
            <div class="mobile-nav-content">
                <ul>     
                    <li>
                        <a href="#">Shop</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                    </li>                   
                    <li>
                        <a href="#">On Sale</a>
                    </li>
                    <li>
                        <a href="#">New Arrivals</a>
                    </li>
                    <li>
                        <a href="#">Brands</a>
                    </li>
                </ul>
            </div>
        </nav>       
        <div class="wrapper">
            <div class="desktop-header-container">
                <div class="mobile-menu">
                    <img src="<?php echo get_template_directory_uri();?>/images/mobile-menu.png" alt="" />                    
                </div>                
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri();?>/images/dummylogo1.png" alt="" />
                </div>    
                <nav class="desktop-nav">
                    <ul>
                        <li>
                            <a href="#">Shop</a><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </li>
                        <li>
                            <a href="#">On Sale</a>
                        </li>
                        <li>
                            <a href="#">New Arrivals</a>
                        </li>
                        <li>
                            <a href="#">Brands</a>
                        </li>
                    </ul>
                </nav>                
    
                <div class="search-bar">
                    <form action="#">
                        <label for="search-icon"><img src="<?php echo get_template_directory_uri();?>/images/search.png" alt=""></label>
                        <input type="text" name="search" id="" placeholder="Search for products... " />
                    </form>
                </div>
    
                <div class="left-header-icons">
                    <img src="<?php echo get_template_directory_uri();?>/images/search-icon.png" alt="" />
                    <img src="<?php echo get_template_directory_uri();?>/images/cart.png" alt="" />
                    <img src="<?php echo get_template_directory_uri();?>/images/login.png" alt="" />
                </div>
           </div>    
        </div> 
    </section>