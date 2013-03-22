<?php
header("Content-type: text/css; charset: UTF-8");
include 'palettes.php';
?>

html {
    overflow-y: scroll;
}

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
    background-color: <?=$igalvez_white?>;
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
    color: <?=$tango_aluminium5?>;
}

#menu a {
    font-weight: bold;
    color: <?=$tango_skyblue3?>;
}

#menu a:hover {
    border-bottom: 1px dotted <?=$tango_skyblue3?>;
}

#footer {
    font-size: 13px;
    color: <?=$tango_aluminium4?>;
}

.post {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
}

.post.odd {
}

.post.even {
    background-color: <?=$igalvez_gray?>;
}

.post .title {
    font-size: 21px;
    font-weight: bold;
    margin-bottom: 10px;
}

.post .title a {
    color: <?=$tango_skyblue3?>;
}

.post .title a:hover {
    border-bottom: 1px dotted <?=$tango_skyblue3?>;
}

.post .content p {
    padding-bottom: 20px;
    word-wrap: break-word;
}

.post .content a {
    color: <?=$tango_skyblue3?>;
}

.post .content a:hover {
    border-bottom: 1px dotted <?=$tango_skyblue3?>;
}

.post .content img {
    display: block;
    max-width: 100%;
    height: auto;
}

.post .content h3, .post .content h4 {
    margin-top: 0;
    margin-bottom: 10px;
    margin-left: 0;
    margin-right: 0;
    font-size: 17px;
}

.post .content ul {
    margin-top: 0;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 20px;
}

.post .content ul ul {
    margin: 0;
}

.post .meta {
    font-size: 13px;
    color: <?=$tango_plum2?>;
}

.post .meta a {
    color: <?=$tango_plum2?>;
    font-weight: bold;
}

.post .meta a:hover {
    border-bottom: 1px dotted <?=$tango_plum2?>;
}

.post .meta span {
    font-weight: bold;
}

#page-nav {
    color: <?=$tango_aluminium5?>;
    border-top: 1px dotted <?=$tango_aluminium4?>;
    padding-top: 10px;
}

#page-nav a {
    color: <?=$tango_skyblue3?>;
    font-weight: bold;
}

#page-nav a:hover {
    border-bottom: 1px dotted <?=$tango_skyblue3?>;
}

#menu {
    padding-bottom: 10px;
    border-bottom: 1px dotted <?=$tango_aluminium4?>;
    margin-bottom: 10px;
}

#footer {
    padding-top: 10px;
    border-top: 1px dotted <?=$tango_aluminium4?>;
    margin-top: 10px;
}

.post code, .comment code {
    font-family: "Source Code Pro", monospace;
    font-size: 13px;
    font-weight: bold;
    padding: 0 2px;
}

.post a code {
    padding: 0;
}

<?php include 'feedback.php'; ?>

/* Collapse to Width=100% for small screens */
@media screen and (max-width: 860px), screen and (max-device-width: 480px) {
    #wrapper {
        border-radius: 0;
        margin: 0;
        padding: 0;
        width: 100%;
    }
    
    #header {
        padding-top: 10px;
        padding-left: 10px;
        padding-right: 10px;
    }
    
    #menu, #page-nav {
        padding-left: 10px;
        padding-right: 10px;
    }
    
    #footer {
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 10px;
    }
    
    .post, .comment {
        border-radius: 0;
    }
}

<?php include 'geshi.php'; ?>
