<?php
//adding external links and CSS/Js files
function gt_setup(){
    wp_enqueue_style('google-fonts','//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawsome','//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style',get_stylesheet_uri(), NULL,microtime(),'all');
    wp_enqueue_script('main',get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts','gt_setup');


//Adding featured image to the Post, Title and allowing html5 attributes to certain forms in the admin

function gt_init(){
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support("html5", ["comment-list","comment-form","search-form"]);
}

add_action("after_setup_theme","gt_init");

// registering a post type

function gt_custom_post_type(){
    register_post_type('project', array(
                        "rewrite" => array("slug"=>"projects"),
                            "labels" => array(
                                "name" => "Projects",
                                "singular_name" => "Project",
                                "add_new" => "Add New Project",
                                "add_new_item" => "Add New Project",
                                'new_item' => 'New project',
                                "edit_item" => "Edit Project"
                            ),
                        "menu_icon" => "dashicons-text-page",
                        "public" => true,
                        "has_archive" => true,
                        "supports" => array("title","editor","thumbnail","excerpt","comments")
    )
);
}
add_action('init','gt_custom_post_type');

//Adding Sidebar

function gt_widgets(){
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',           
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )
    );
}
add_action('widgets_init','gt_widgets');


//Filter search area

function search_area($query){
    if($query->is_search()){
        $query->set('post_type',['post','project']);
    }
}

add_filter('pre_get_posts','search_area');

?> 