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
        <label for="query">Query</label>
        <input id="query" name="q" type="text" value="<?php echo $query; ?>"/>
    </p>
    <p>
        <input type="submit" id="submit" value="Search" name="submit"/>
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

    </div><!-- /post -->

<?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer(); ?>
