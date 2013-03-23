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

<form id="search-form" method="GET" action="<?php bloginfo('wpurl'); ?>/search/">
    <p id="search-box">
        <label for="query">Query</label><span id="google-branding"><img id="google-logo" src="http://www.google.com/uds/css/small-logo.png"/>Custom Search</span>
        <input id="query" name="q" type="text" value="<?php echo $query; ?>"/>
    </p>
    <p>
        <input type="submit" id="submit" value="Search"/>
    </p>
</form>        

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
