require('./bootstrap');

console.log('ok');
console.log($);

$(document).ready(function () {

    // If the record deleted message was displayed. Reload page.
    if($('.row').hasClass('deleted')) {

        let urlLocation = window.location.href;
        
        setTimeout(function () {

            window.location.replace(urlLocation);

        }, 2000);
    }

});