function sethistory() {
	var urls = ["index.html","about.html","interes.html","study.html","photo.html","contact.html","test.html"];
var myTableDiv = document.body;
var table = document.createElement('TABLE');
table.style="border:3px dashed  silver; ";
 var tableBody = document.createElement('TBODY');
table.appendChild(document.createTextNode("Local storage"))
table.appendChild(tableBody);
 for (var i = 1; i < localStorage.length; i++) {
var tr = document.createElement('TR');
var cellText = document.createTextNode(urls[i]+"-  "+localStorage.getItem(urls[i]));
 tr.appendChild(cellText);
     tableBody.appendChild(tr);}
myTableDiv.appendChild(table);


var myTableDiv1 = document.body;
var table1 = document.createElement('TABLE');
table1.style="border:3px dashed  silver; ";
 var tableBody1 = document.createElement('TBODY');
table1.appendChild(document.createTextNode("cookies"))
table1.appendChild(tableBody1);
 for (var i = 0; i < 7; i++) {
var tr = document.createElement('TR');
var cellText = document.createTextNode(urls[i]+"-  "+getCookie(urls[i]));
 tr.appendChild(cellText);
     tableBody1.appendChild(tr);}
myTableDiv1.appendChild(table1);

  tableBody1.appendChild(tr);
myTableDiv1.appendChild(table1);
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