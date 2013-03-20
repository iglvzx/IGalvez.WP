<?php if(have_comments()) : ?>
<div id="feedback">
    
    <ol id="comment-list">
        <?php wp_list_comments($args); ?>
    </ol>

</div><!-- #feedback -->
<?php endif; // have_comments() ?>

<?php comment_form(); ?>
