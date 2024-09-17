<?php

// Adding font, style and Js files

function myfashion_themefiles(){
    wp_enqueue_style('google-fonts','//api.fontshare.com/v2/css?f[]=satoshi@400&display=swap'); //done
    wp_enqueue_style('fontawsome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css'); //done
    
    wp_enqueue_style('themestyle-slick-min','//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css'); //done
    wp_enqueue_style('themestyle-slickstyle-min','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');//done

    wp_enqueue_style('themestyle-desktop',get_stylesheet_uri(), NULL, microtime(), 'all'); //done
    wp_enqueue_style('themestyle-mobile',get_stylesheet_uri().'/../media-queries/mobile.css', NULL, microtime(), 'screen and (min-width:320px) and (max-width:765px)'); //done
    wp_enqueue_style('themestyle-tablet',get_stylesheet_uri().'/../media-queries/tablet.css', NULL, microtime(), 'screen and (min-width:768px) and (max-width:1024px)'); //done
    
    
    wp_enqueue_script('themejs-main',get_theme_file_uri('js/main.js'), NULL, microtime(), true); //done    
    wp_enqueue_script('themejs-jquery','//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', NULL, microtime(), true); //done
    wp_enqueue_script('themejs-jquery-migrate','//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.5.2/jquery-migrate.min.js', NULL, microtime(), true);
    wp_enqueue_script('themejs-slick','//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', NULL, microtime(), true);
    wp_enqueue_script('themejs-testimonial',get_theme_file_uri('js/testimonial.js'), NULL, microtime(), true); //done

}
add_action('wp_enqueue_scripts','myfashion_themefiles');
?>