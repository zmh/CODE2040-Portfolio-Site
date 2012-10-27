$(document).ready(function() {
    //introTransition()
    
    setTimeout(showChrome,3000);
    setTimeout(showChromeText,3000);

});

function hideAll() {
    $('.hideme').each( function(i){
        $(this).animate({'opacity':'0'},500);
    });
}

function showChrome() {
    $(".chrome").animate({'opacity': '1'}, 500);
}

function showChromeText() {
    $(".chrome-text").animate({'opacity': '1'}, 100);
    $('.chrome-text').typewrite({
        'callback': function(){
            //$('.finder-text').css('background-color','red');
        },
        'delay': 400
    });
}

function introTransition() {
    $(".button-tumblr").animate({'opacity': '0'}, 1000);
    $(".intro").animate({'opacity': '0'}, 1000);
    $(".logo-main").animate({'opacity': '0'}, 1000);
}

        

