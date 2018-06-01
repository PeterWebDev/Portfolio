// Reset all header background color when back to top is clicked
$("#backtotop p a").click(function() {
    $(".headings").removeClass("highlight3");
    $(".headings2").removeClass("highlight3");
});

// Highlight RHS bookmarks links
$("#bookmarks a").click(function() {
    $(".headings").removeClass("highlight3");
    $(".headings2").removeClass("highlight3");
    $(this).addClass("highlight").siblings("a").removeClass("highlight");
});

// Changing header based on select RHS bookmarks
$("#bookmarks a.link01").click(function() {
    $(".headings.c1955").addClass("highlight3");
});
$("#bookmarks a.link02").click(function() {
    $(".headings.c1975").addClass("highlight3");
});
$("#bookmarks a.link03").click(function() {
    $(".headings.c1978").addClass("highlight3");
});
$("#bookmarks a.link04").click(function() {
    $(".headings.c1983").addClass("highlight3");
});
$("#bookmarks a.link05").click(function() {
    $(".headings.c1994").addClass("highlight3");
});
$("#bookmarks a.link06").click(function() {
    $(".headings.c1994").addClass("highlight3");
});
$("#bookmarks a.link07").click(function() {
    $(".headings.c1995").addClass("highlight3");
});
$("#bookmarks a.link08").click(function() {
    $(".headings.c1999").addClass("highlight3");
});
$("#bookmarks a.link09").click(function() {
    $(".headings.c2000").addClass("highlight3");
});
$("#bookmarks a.link10").click(function() {
    $(".headings.c2005").addClass("highlight3");
});

$("#bookmarks a.foundation").click(function() {
    $(".headings2.foundation").addClass("highlight3");
});