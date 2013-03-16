<?php
header("Content-type: text/css; charset: UTF-8");
include 'palettes.php';
?>

/* Google Web Fonts: Source Sans Pro */
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic);

/* Google Web Fonts: Source Code Pro */
@import url(http://fonts.googleapis.com/css?family=Source+Code+Pro:400,700);

body {
    font-family: "Source Sans Pro", sans-serif;
    font-size: 15px;
    background-color: <?=$tango_aluminium6?>;
    color: <?=$igalvez_black?>;
    margin: 0;
    padding: 0;
}

div {
    display: block;
}

div, p, a, img, pre, code {
    padding: 0;
    margin: 0;
}

#wrapper {
    background-color: <?=$tango_aluminium1?>;
    padding: 10px;
    border-radius: 4px;
    margin: 20px auto;
    width: 800px;
}

#header {
    margin-bottom: 10px;
}

#title {
    color: <?=$tango_aluminium6?>;
    font-size: 25px;
    font-weight: bold;
}

#tagline {
    color: <?=$tango_aluminium5?>;
    font-size: 13px;
}

#menu {
    margin-bottom: 10px;
    border-bottom: 1px dotted <?=$tango_aluminium3?>;
    padding-bottom: 10px;
}

#menu a {
    font-weight: bold;
    color: <?=$tango_scarletred3?>;
}

#footer {
    font-size: 13px;
    color: <?=$tango_aluminium4?>;
}

.post {
    margin-bottom: 10px;
    border-bottom: 1px dotted <?=$tango_aluminium3?>;
    padding-bottom: 10px;
}

.post .title {
    font-size: 21px;
    font-weight: bold;
    margin-bottom: 10px;
}

.post .content p {
    margin-bottom: 20px;
}

.post .content a {
    color: <?=$tango_scarletred3?>;
}

.post .content img {
    display: block;
    margin-bottom: 20px;
}

.post .meta {
    font-size: 13px;
    color: <?=$tango_plum2?>;
}

.post .meta a {
    color: <?=$tango_plum2?>;
    font-weight: bold;
}

pre {
    font-family: "Source Code Pro", monospace;
    font-size: 13px;
    padding: 10px;
    background-color: <?=$solarized_base03?>;
    color: <?=$solarized_base0?>;
    border-radius: 4px;
    margin-bottom: 20px;
}

code {
    font-family: "Source Code Pro", monospace;
    font-size: 13px;
    padding: 2px 4px;
    color: <?=$solarized_base03?>;
    border-radius: 4px;
    background-color: <?=$tango_aluminium2?>;
    white-space: pre-wrap;
}