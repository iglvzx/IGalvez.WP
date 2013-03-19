<div id="feedback">
<?php if(have_comments()) : ?>
    
    <ol id="comment-list">
        <?php wp_list_comments($args); ?>
    </ol>

<?php endif; // have_comments() ?>
</div><!-- #feedback -->
