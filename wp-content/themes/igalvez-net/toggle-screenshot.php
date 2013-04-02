<script type="text/javascript">
$("a").each(function() {
    var children = $(this).children();
    if($(this).hasClass("normal")) {
        // do nothing
    } else {
        if(children.is("img")) {
            $(this).wrap('<div class="screenshot" />');
        }
    }
});

$(".screenshot").each(function() {
    $(this).prepend('<span class="toggle-screenshot">+ Show Screenshot</span><br/>');
});

$(".toggle-screenshot").on("click", function(e) {
    var image = $(this).next().next().children();
    if(image.is(":hidden")) {
        image.show(250);
        $(this).text("- Hide Screenshot");
    } else {
        image.hide(250);
        $(this).text("+ Show Screenshot");
    }
});
</script>
