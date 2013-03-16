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

#footer {
    font-size: 13px;
    color: <?=$tango_aluminium4?>;
}

.post {
}

.post .title {
    font-size: 21px;
    font-weight: bold;
    margin-bottom: 10px;
}

.post .title a {
    color: <?=$tango_skyblue3?>;
}

.post .content p {
    margin-bottom: 20px;
}

.post .content a {
    color: <?=$tango_skyblue3?>;
}

.post .content img {
    display: block;
    margin-bottom: 20px;
}

.post .content ol {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.post .content li {
    padding: 0;
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

.post .meta span {
    font-weight: bold;
}

#page-nav {
    color: <?=$tango_aliminium5?>;
}

#page-nav a {
    color: <?=$tango_skyblue3?>;
    font-weight: bold;
}

#menu, .post, #page-nav {
    padding-bottom: 10px;
    border-bottom: 1px dashed <?=$tango_aluminium3?>;
    margin-bottom: 10px;
}

/* Code Formatting -----------------------------------------------------------*/

.geshi {
    font-family: "Source Code Pro", monospace;
    font-size: 13px;
    padding: 10px;
    background-color: <?=$solarized_base03?>;
    color: <?=$solarized_base1?>;
    border-radius: 4px;
    margin-bottom: 20px;
}

.geshi .de1 a {
    color: <?=$solarized_base1?>;
    text-decoration: none;
}

.post code {
    font-family: "Source Code Pro", monospace;
    font-size: 13px;
    padding: 0 4px;
    font-weight: bold;
}

.geshi .co1, /* comments */
.geshi .coMULTI {
    color: <?=$solarized_base01?>;
}

.geshi li.ln-xtra {
    background-color: <?=$solarized_base02?>;
    padding: 2px 4px;
}

/* PHP -----------------------------------------------------------------------*/
.php .re0, /* variables */
.php .es4 {
    color: <?=$solarized_blue?>;
}

.php .kw3 { /* built-in functions */
    color: <?=$solarized_cyan?>;
    font-weight: bold;
}
.php .me1 { /* methods */
    color: <?=$solarized_blue?>;
}

.php .kw1 { /* main keywords */
    color: <?=$solarized_green?>;
    font-weight: bold;
}

.php .kw2, /* other keywords */
.php .sy1 {
    font-weight: bold;
}

.php .st0, /* strings and numbers */
.php .st_h,
.php .nu0 {
    color: <?=$solarized_yellow?>;
}

/* HTML ----------------------------------------------------------------------*/
.html .sc0 { /* doctype */
    font-weight: bold;
}

.html .kw2 { /* tags */
    color: <?=$solarized_green?>;
    font-weight: bold; 
}

.html .sc2 {
    color: <?=$solarized_green?>;
}

.html .sc1 { /* escaped chars, entities */
    color: <?=$solarized_orange?>;
}

.html .kw3 { /* attributes */
    color: <?=$solarized_cyan?>;
}

.html .st0 { /* strings */
    color: <?=$solarized_yellow?>;
}

/* Apache --------------------------------------------------------------------*/
.apache .kw3 { /* tags */
    color: <?=$solarized_green?>;
    font-weight: bold; 
}

.apache .kw1 { /* properties */
    color: <?=$solarized_blue?>;
}

.apache .st0, /* strings and numbers */
.apache .nu0 {
    color: <?=$solarized_yellow?>;
}

/* INI -----------------------------------------------------------------------*/
.ini .re0 { /* sections */
    color: <?=$solarized_green?>;
    font-weight: bold;  
}

.ini .re1 { /* properties */
    color: <?=$solarized_blue?>;
}