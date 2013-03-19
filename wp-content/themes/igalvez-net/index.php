<?php get_header(); ?>

<?php $count = 1; ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
   
    <?php $class = $count % 2 == 0 ? 'even' : 'odd'; ?> 
    <div <?php post_class($class); ?>>
    
        <div class="title">
            <a href="<?php the_permalink(); ?>">
                <?php
                $category = get_the_category($id);
                $category = $category[0]->cat_name;
                echo $category . ': ';
                the_title();
                ?>
            </a>
        </div>
        
        <div class="content">
            <?php the_content(); ?>
        </div>
        
        <div class="meta">
            <div>
                Post ID: <span><?php the_id(); ?></span> |
                Date: <span><?php the_time('Y-m-d') ?></span>
            </div>
            <div>
                Category: <?php the_category(', '); ?>
                <?php the_tags('| Tags: ', ', '); ?>
            </div>
            <div>
                Feedback: <a href="<?php the_permalink(); ?>#feedback"><?php comments_number(); ?></a>
            </div>
        </div>
    
    </div><!-- /post -->
    <?php $count++; ?>

<?php endwhile; else: ?>
<?php endif; ?>

<?php // Comments for a post or page
if(is_single()) {
    echo '<div id="feedback">';
    comments_template();
    echo '</div>';
}
?>

<?php // Links between pages of posts
$posts_nav = get_posts_nav_link();
if(!empty($posts_nav)) {
    echo '<div id="page-nav">';
    posts_nav_link(' | ', 'Newer Posts', 'Older Posts');
    echo '</div>';
}
?>

<?php get_footer(); ?>
