<?php get_header(); ?><?php if(have_posts()) : while(have_posts()) : the_post(); ?>       <div <?php post_class('post'); ?>>            <div class="title">            <a href="<?php the_permalink(); ?>">                <?php the_title(); ?>            </a>        </div>                <div class="content">            <?php the_content(); ?>        </div>                <div class="meta">            <div>                Page ID: <span><?php the_id(); ?></span> |                Last Updated: <span><?php the_modified_time('Y-m-d') ?></span>            </div>        </div>        </div><!-- /post --><?php endwhile; else: ?><?php endif; ?><?php get_footer(); ?>