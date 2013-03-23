<?php get_header(); ?>
   
    <div class="post">
    
        <div class="title error">Error 404: File Not Found</div>
        
        <div class="content">
            <p>Oops! I could not find the page or file located at <code><?php echo $_SERVER['REQUEST_URI']; ?></code>. Please check the URL for spelling errors or use the search box below to find what you are looking for.</p>
        </div>
        
        <?php include 'search-form.php'; ?>
    
    </div><!-- /post -->

<?php get_footer(); ?>
