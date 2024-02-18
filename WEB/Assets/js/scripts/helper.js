function getCookieConfig(cname) {
   var name = cname + "=";
   var obj = {};
   var decodedCookie = decodeURIComponent(document.cookie);

   var ca = decodedCookie.split(';');
   for (var i = 0; i < ca.length; i++) {
       var c = ca[i];
       while (c.charAt(0) == ' ') {
           c = c.substring(1);
       }
       if (c.indexOf(name) == 0) {
           var attrs = c.substring(name.length, c.length)
           var values = attrs.split("&");

           for (var i = 0; i < values.length; i++) {
               var keyValue = values[i].split("=");
               obj[keyValue[0]] = keyValue[1];
           }
       }
   }

   var jsonObj = obj;
   var strBuilder = [];
   for (key in jsonObj) {
       if (jsonObj.hasOwnProperty(key)) {
           strBuilder.push(jsonObj[key]);
       }
   }
   return obj;
}

function ShowLoading(target, effect = 'bounce', message = '', callback = null) {
   $(target).waitMe({
       effect: effect,
       text: message !== undefined || message !== null ? message : '',
       bg: 'rgba(255,255,255,0.7)',
       color: '#000',
       maxSize: '',
       waitTime: -1,
       textPos: 'vertical',
       fontSize: '',
       source: '',
       onClose: callback !== undefined && callback !== null ? callback : function () {
       }
   });
}

function ShowNotif(message, type, time) {
   var n = noty({
       text: message,
       layout: 'topRight',
       type: type,
       timeout: time == undefined ? 2000 : time
   });
}