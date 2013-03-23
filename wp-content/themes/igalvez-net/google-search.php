<?php
/*
Template Name: Google Search
*/
?>

<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
   
    <div <?php post_class('post'); ?>>

<?php
$query = isset($_GET['q']) ? $_GET['q'] : '';
?>

<?php include 'search-form.php'; ?>       

<div id="google-search">        
<script>
  (function() {
    var cx = '017475648751400943840:q2bnf4ge8xm';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>
</div><!-- /#google-search -->

<script type="text/javascript">
$(window).load(function() {
    var height = $("#google-search").height();

    if(height > 0) {
        $("#search-form").css("margin-bottom", "20px");
    }
});
</script>

    </div><!-- /post -->

<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
