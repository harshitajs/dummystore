<?php
get_header();
while(have_posts()){
    the_post();
?>

  <main>
    <h2 class="page-heading"><?php the_title() ?></h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <div class="card-meta-blogpost">
          Posted By <?php the_author(); ?> on <?php the_time('F j, Y'); ?>
          <?php
          if(get_post_type() == "post"){
            ?>
            in <a href="#"><?php echo get_the_category_list(', '); ?></a>
          <?php 
          }
          ?>
          </div>
          <div class="card-image">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
          </div>
          <div class="card-description">
          <?php the_content() ?>
          </div>
        </div>

        <div id="comments-section">
        <?php
        $commenter     = wp_get_current_commenter();
        $req   = get_option( 'require_name_email' );
        $html5 = 'html5';
        $required_attribute = ( $html5 ? ' required' : ' required="required"' );
          $fields = array(
            'author' => '<input id="author" name="author" type="text" value="%s" size="30" maxlength="245" placeholder="Name" autocomplete="name"%s />',
                    esc_attr( $commenter['comment_author'] ),
                    ( $req ? $required_attribute : '' ),  
            'email'  => '<input placeholder="Email ID" id="email" name="email" %s value="%s" size="30" maxlength="100" aria-describedby="email-notes" autocomplete="email"%s />',
                    ( $html5 ? 'type="email"' : 'type="text"' ),
                    esc_attr( $commenter['comment_author_email'] ),
                    ( $req ? $required_attribute : '' )      
        );
        $args = array(
        'title_reply' => 'Share Your Thoughts',
        'fields' => $fields,
        'comment_field' => '<textarea placeholder="Your Comments" id="comment" name="comment" cols="45" rows="8" maxlength="65525"></textarea>',
        'comment_notes_before' => '<p class="comment-notes">Your email address will not</p>'
        );
        
        comment_form($args);

          $comments_no = get_comments_number();
          if($comments_no != 0){
            ?>
            <div class="comments">
                <h3>What others Say</h3>
                <ol class="all-comments">                    
                        <?php 
                            $comments = get_comments(array(
                                'post_id' => $post->ID,
                                'status' => 'approve'
                            ));
                            wp_list_comments(array(
                                'per_page' => 15
                            ), $comments)
                        ?>                   
                </ol>
            </div>
            <?php
          }
          ?>
        </div>
      </section>

        <?php } ?>
      <aside id="sidebar">
        <!-- <h3>Sidebar Heading</h3>
        <p>Sidebar 1</p> -->
        <?php
         if (is_active_sidebar('main_sidebar')) {
          dynamic_sidebar('main_sidebar');
         }
        ?>
      </aside>
    </div>

    <?php
    get_footer();
    ?>