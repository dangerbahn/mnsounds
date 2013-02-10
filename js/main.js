$(document).ready(function(){

    
    function buildMeh() {
        var hash = window.location.href.split('#');
        var home = window.location.href.split('meh');
        var url = window.location.href;
        $('#meh').append('<img src=\'' + home[0] + '/images/' + hash[1] + '\' />');
        $('#showlink').val(url);
        
        $('#twt').append('<a href=\'https://twitter.com/share\' class=\'twitter-share-button\' data-url=\'' + url + '\' data-via=\'yeametoo_meh\' data-count=\'none\' data-hashtags=\'yeametoo\'>Tweet</a>');
    };
    buildMeh();
    
    
    

});

