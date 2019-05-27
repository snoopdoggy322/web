function setPageTime() {
var currentDateObj = document.getElementById('current-date');
if (currentDateObj) {
    var monthList = new Array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 
        'августа', 'сентября', 'октября', 'ноября', 'декабря');
    var currDate = new Date();
    var m = monthList[currDate.getMonth()];
    var s = (currDate.getDate()) + ' ' + m + ' ' + Math.round(currDate.getFullYear()) + ' ' +
        (currDate.getHours()) + ':' + (currDate.getMinutes()) + ':' + 
        (currDate.getSeconds());
    currentDateObj.innerHTML = s;
}
setTimeout('setPageTime(1000)');}


function addhist(page){
if(localStorage.getItem(page)==null)
	localStorage.setItem(page,1)

	localValue = localStorage.getItem(page);
localStorage.setItem(page,(+localValue+1));


if(getCookie(page)==null){
  document.cookie= page+"="+55;
}
var v = +getCookie(page)+1;
document.cookie = page+"="+v.toString();


}


function setCookie (name, value, expires, path, domain, secure) {
      document.cookie = name + "=" + escape(value) +
        ((expires) ? "; expires=" + expires : "") +
        ((path) ? "; path=" + path : "") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
}


function getCookie(name) {
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0;
    var end = 0;
    if (cookie.length > 0) {
        offset = cookie.indexOf(search);
        if (offset != -1) {
            offset += search.length;
            end = cookie.indexOf(";", offset)
            if (end == -1) {
                end = cookie.length;
            }
            setStr = unescape(cookie.substring(offset, end));
        }
    }
    return(setStr);
}


function addhistC(page){

}