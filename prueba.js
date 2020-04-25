var req = new XMLHttpRequest();
var url = "dggsg.com";
var number;
req.overrideMimeType(url);
req.open('GET', "https://34.89.30.97/phpFakeOutServer/add_blacklist.php"+"?url="+url, true);
req.onload  = function() {
   var jsonResponse = JSON.parse(req.responseText);
   number = jsonResponse.success;
   console.log(number);
};
req.send(null);

