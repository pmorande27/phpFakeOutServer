var req = new XMLHttpRequest();
var url = "dggsg.com"
req.overrideMimeType(url);
req.open('GET', "https://34.89.30.97/phpFakeOutServer/check_if_blackList.php"+"?url="+url, true);
req.onload  = function() {
   var jsonResponse = JSON.parse(req.responseText);
   alert(jsonResponse);
   // do something with jsonResponse
};
req.send(null);