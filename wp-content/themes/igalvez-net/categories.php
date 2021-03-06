<?php
/*
Template Name: Categories
*/
?>

<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
   
    <div <?php post_class('post'); ?>>

        <div class="title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </div>
        
        <div class="content">

            <?php
            $args = array(
                'number' => 0, // show all
                'smallest' => '15', 'largest' => '15', 'unit' => 'px', // font size
                'format' => 'list', // format
                'orderby' => 'count', 'order' => 'DESC', // sort
                'topic_count_text_callback' => 'igalvez_tooltip_count',
                'taxonomy' => 'category' // show categories
            );
            
            wp_tag_cloud($args);
            ?>
            
        </div>
        
        <div class="meta">
            <div>
                Page ID: <span><?php the_id(); ?></span> |
                Last Updated: <span>Automatically</span>
            </div>
        </div>
        
    </div><!-- /post -->

<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>