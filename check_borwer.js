function check_borwer(){
    var isIE      = navigator.userAgent.search("MSIE") > -1;
    var isIE7     = navigator.userAgent.search("MSIE 7") > -1;
    var isFirefox = navigator.userAgent.search("Firefox") > -1;
    var isOpera   = navigator.userAgent.search("Opera") > -1;
    //Google && safari 是同一個
    var isSafari  = navigator.userAgent.search("Safari") > -1;
    if (isIE7) {
        browser = 'IE7';
    }
    if (isIE) {
        browser = 'IE';
    }
    if (isFirefox) {
        browser = 'Firefox';
    }
    if (isOpera) {
        browser = 'Opera';
    }
    if (isSafari) {
        browser = 'Safari/Chrome';
    }
    return browser;
}

var borwer = check_borwer();
alert(borwer);
