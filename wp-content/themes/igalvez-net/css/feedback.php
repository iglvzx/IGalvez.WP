#feedback {
    padding-top: 10px;
    margin-top: 10px;
    border-top: 1px dotted <?=$tango_aluminium4?>;
}

#comment-list {
    margin: 0;
    padding: 0;
    list-style: none;
}

.comment {
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 0;
    border-radius: 4px;
    margin-bottom: 10px;
}

.comment a {
    color: <?=$tango_skyblue3?>;
}

.comment a:hover {
    border-bottom: 1px dotted <?=$tango_skyblue3?>;
}

.comment p {
    padding-bottom: 20px;
}

.comment.even {
    background-color: <?=$igalvez_gray?>;
}

.children {
    padding-left: 20px;
    padding-top: 0;
    padding-right: 0;
    paddign-bottom: 0;
    list-style: none;
}

.comment-author .says {
    display: none;
}

.comment cite {
    font-style: normal;
    font-weight: bold;
}

.bypostauthor cite {
    background-color: <?=$tango_aluminium6?>;
    padding: 2px 4px;
    border-radius: 4px;
    margin-bottom: 2px;
    display: inline-block;
    color: <?=$igalvez_white?>;
    font-size: 13px;
}

.comment-meta {
    margin-bottom: 10px;
    font-size: 13px;
}

#respond {
    margin-top: 10px;
    padding: 10px;
    border-top: 1px dotted <?=$tango_aluminium4?>;
}

#respond h3 {
    padding: 0;
    margin-top: 0;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 10px;
    font-size: 17px;
}

.comment-notes {
    margin-bottom: 10px;
}

#respond .required {
    color: <?=$tango_scarletred2?>;
}

#respond label {
    display: block;
    padding-bottom: 5px;
    color: <?=$tango_aluminium5?>;
}

#respond input, textarea {
    display: block;
    width: auto;
}

.comment-form-author,
.comment-form-email,
.comment-form-url,
.comment-form-comment {
    display: block;
    background-color: #ffffff;
    width: auto;
    padding: 10px;
    border: 1px solid <?=$tango_aluminium3?>;
    border-radius: 4px;
    margin-bottom: 10px;
}

#respond input[type="text"],
#respond textarea {
    padding: 0;
    border: 0;
    margin: 0;
    display: block;
    width: 100%;
    height: auto;
    background-color: #ffffff;
    font-family: "Source Code Pro", monospace;
    font-size: 13px;
    color: <?=$tango_skyblue3?>;
    -webkit-appearance: none;
}

#respond textarea {
    resize: none;
}

.form-allowed-tags {
    margin-bottom: 10px;
}

.form-allowed-tags code {
    font-family: "Source Code Pro", monospace;
    font-size: 13px;
}

input#submit {
    -webkit-appearance: none;
    cursor: pointer;
    margin: 0;
    border: 0;
    padding: 10px;
    background-color: <?=$tango_skyblue3?>;
    border-radius: 4px;
    font-size: 13px;
    font-weight: bold;
    font-family: "Source Sans Pro", sans-serif;
    color: <?=$igalvez_white?>;
}

input#submit:active, input#submit:hover {
    background-color: <?=$tango_aluminium6?>;
}

#respond .logged-in-as {
    margin-bottom: 10px;
}

#respond .logged-in-as a {
    color: <?=$tango_skyblue3?>;
}

#respond .logged-in-as a:hover {
    border-bottom: 1px dotted <?=$tango_skyblue3?>;
}