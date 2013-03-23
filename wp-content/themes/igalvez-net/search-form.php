<form id="search-form" method="GET" action="<?php bloginfo('wpurl'); ?>/search/">
    <p id="search-box">
        <label for="query">Query</label><span id="google-branding"><img id="google-logo" src="http://www.google.com/uds/css/small-logo.png"/>Custom Search</span>
        <input id="query" name="q" type="text" value="<?php echo $query; ?>"/>
    </p>
    <p>
        <input type="submit" id="submit" value="Search"/>
    </p>
</form>
