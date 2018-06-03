$(function(){
    $("#accordion").accordion({
    heightStyle: "content"
    });
});

$(function(){
    var state = true;
    $("#button").on("click", function() {
    if (state) {
        $("#effect").animate({
        backgroundColor: "#aa0000",
        color: "#fff",
        width: 500
        }, 1000);
    } else {
        $("#effect").animate({
        backgroundColor: "#fff",
        color: "#000",
        width: 240
        }, 1000);
    }
    state = !state;
    });
});

$(function(){
    $("#sortable").sortable({
        placeholder: "ui-state-highlight"
    });
    $("#sortable").disableSelection();
});

$(function(){
    $("input").checkboxradio();
});