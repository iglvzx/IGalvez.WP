            <?php
            if(is_page('Search') || is_page('Privacy Policy')) {
                // do not show footer ad
            } else {
                include 'adsense-footer.php';
            }
            ?>
            <div id="footer">
                &copy; 2011-<?php echo date('Y'); ?>
                <a href="<?php bloginfo('wpurl'); ?>/contact/">Israel Galvez</a>.
                All rights reserved. |
                <a class="important" href="<?php bloginfo('wpurl');?>/privacy-policy/">Privacy Policy</a> |
                Powered by:
                <a href="http://secure.hostgator.com/%7Eaffiliat/cgi-bin/affiliates/clickthru.cgi?id=iglvzx">HostGator</a>,
                <a href="http://www.enom.com/">eNom</a>,
                <a href="http://wordpress.org/">WordPress</a>,
                <a href="http://qbnz.com/highlighter/">GeSHi</a>,
                <a href="http://google.com/cse/">Google CSE</a>.
            </div>
        </div><!-- #wrapper -->
        <!-- WordPress footer -->
            <?php wp_footer(); ?>
        <!-- /WordPress footer -->
        <?php include 'analytics.php'; ?>
    </body>
</html>
