<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <div <?php post_class(); ?>>
    
        <div class="title">
            <a href="<?php the_permalink(); ?>">
                <?php
                $category = get_the_category($id);
                $category = $category[0]->cat_name;
                echo $category;
                ?>: <?php the_title(); ?>
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
        </div>
    
    </div><!-- /post -->

<?php endwhile; else: ?>

<?php endif; ?>

<?php if(!is_single()) { ?>
<div id="page-nav">
    <?php posts_nav_link(' | ', 'Newer Posts', 'Older Posts'); ?>
</div>
<?php } ?>

<?php get_footer(); ?>
