if ( (typeof jQuery === 'undefined') && !window.jQuery ) {
        document.write(unescape("%3Cscript type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'%3E%3C/script%3E"));
    } else {
        if((typeof jQuery === 'undefined') && window.jQuery) {
            jQuery = window.jQuery;
        } else if((typeof jQuery !== 'undefined') && !window.jQuery) {
            window.jQuery = jQuery;
        }
    }
