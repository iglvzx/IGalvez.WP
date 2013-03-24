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
                Author: <span><?php the_author(); ?></span>
            </div>
            <div>
                Published: <span><?php the_time('Y-m-d, H:i') ?></span> |
                Last Updated: <span><?php the_modified_time('Y-m-d, H:i') ?></span>
            </div>
            <div>
                Category: <?php the_category(', '); ?>
                <?php the_tags('| Tags: ', ', '); ?>
            </div>
            <div>
                <?php
                $comments = get_comments_number($id);
                if($comments == 0) { // no comments
                    $comments_url = get_permalink($id) . '#respond';
                } else {
                    $comments_url = get_permalink($id) . '#feedback';
                }
                ?>
                Feedback: <a href="<?php echo $comments_url; ?>"><?php comments_number(); ?></a>
            </div>
        </div>
    
    </div><!-- /post -->
    <?php $count++; ?>

<?php endwhile; else: ?>
<?php endif; ?>

<?php // Comments for a post or page
if(is_single()) {
    comments_template();
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
