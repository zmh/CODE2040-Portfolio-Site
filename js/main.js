
function hideAll() {
    $('.hideme').each( function(i){
        $(this).animate({'opacity':'0'},500);
    });
}

function showChrome() {
    $(".chrome").animate({'opacity': '1'}, 500);
}


function introTransition() {
    $(".button-tumblr").animate({'opacity': '0'}, 1000);
    $(".intro").animate({'opacity': '0'}, 1000);
    $(".logo-main").animate({'opacity': '0'}, 1000);
}