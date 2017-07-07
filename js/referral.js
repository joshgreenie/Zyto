var $j = jQuery.noConflict();

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}


function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


function checkCookie(cname) {

    var geo = '';

    if (cname == "referral") {
        var referral = getCookie("referral");
        if (referral != "") {
            if (referral === null) {
                console.log('Cookie is Null Yo!');
            }
            else {
                console.log('Cookie value is ' + referral);
                var _href = $j("a.referral-link").attr("href");
                $j("a.referral-link").attr("href", _href + '?ref=' + referral);
            }
        } else {
            console.log('no referral cookie');
        }
    }


    if (cname == "geot_country") {

        if (document.cookie.indexOf('geot_country') > -1) {

            geo = getCookie("geot_country");

            console.log('Cookie value is ' + geo);

            return geo;

        } else {

            if (document.cookie.indexOf('geot_rocket_country') > -1) {
                geo = getCookie("geot_rocket_country");
                console.log('Cookie value is ' + geo);
                return geo;
            }

            return geo;
        }
    }

}


function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

(function ($) {
    $(document).ready(function () {

        $j(function () {

            var datRef = getParameterByName('ref');
            console.log(datRef);

            if (datRef !== null) {
                var cookie = setCookie("referral", datRef, 7);
                console.log(cookie);
            }

            checkCookie("referral");
        });



        $j(function () {

            console.log("Start of new function");

            var newCookie = checkCookie("geot_country");
            if (newCookie != "") {
                setCookie("geot_country", "", -1);
                setCookie("geot_country", newCookie, 7);
                console.log("cookie set " + newCookie);
            } else {
                console.log("No geot_country Cookie");
            }
            console.log("End of new function");
        });


    });

})(jQuery);