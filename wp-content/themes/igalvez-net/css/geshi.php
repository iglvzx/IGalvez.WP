/* GeSHi ---------------------------------------------------------------------*/

.geshi {
    font-family: "Source Code Pro", monospace;
    font-size: 13px;
    padding: 10px;
    background-color: <?=$solarized_base03?>;
    border-radius: 4px;
    margin-bottom: 20px;
}

.geshi ol {
    list-style: decimal outside none;
    margin-top: 0;
    margin-bottom: 0;
    padding-left: 35px;
}

.geshi li {
    color: <?=$solarized_base01?>;
    padding: 0 10px;
}

.geshi .de1 {
    color: <?=$solarized_base1?>;
    white-space: pre-wrap;
    word-wrap: break-word;
}

.geshi .de1 a {
    color: <?=$solarized_base1?>;
    text-decoration: none;
}

.geshi .co1, /* comments */
.geshi .coMULTI {
    color: <?=$solarized_base01?>;
}

.geshi li.ln-xtra {
    background-color: <?=$solarized_base02?>;
}

/* PHP -----------------------------------------------------------------------*/
.php .re0, /* variables */
.php .es4 {
    color: <?=$solarized_cyan?>;
}

.php .kw3 { /* built-in functions */
    color: <?=$solarized_blue?>;
    font-weight: bold;
}
.php .me1 { /* methods */
    color: <?=$solarized_cyan?>;
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
    color: <?=$solarized_blue?>;
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
    color: <?=$solarized_cyan?>;
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
    color: <?=$solarized_cyan?>;
}
