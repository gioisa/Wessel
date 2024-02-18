const httpMethod = {
   get: 'GET',
   post: 'POST',
   put: 'PUT',
   patch: 'PATCH',
   delete: 'DELETE'
};

var cookie_name = "";
var url_web_service = "http://localhost/Wessel/Api/Controller/V1/SetPageController.php?action=getSetPage";
var token = "";

function RequestData(type, url, container, field, params, callback, isJson = true) {
   var data_cookie = getCookieConfig(cookie_name);
   url_web_service = data_cookie.web_api;
   token = data_cookie.token;

   var config = {
      async: true,
      type: type,
      url: url_web_service + url,
      data: params,
      headers: {
         "Authorization": token,
         "Content-Type": 'application/json'
      },
      beforeSend: function (xhr) {
         if (container != undefined && container != null && container != "")
             ShowLoading(container);
      },
      error: function (err) {
         if (container != undefined && container != null && container != "")
             $(container).waitMe('hide');
         if (err.responseJSON != undefined && err.responseJSON != null) {
             if (callback != undefined && callback != null && callback != "")
                 return callback(err.responseJSON);
             else
                 ShowNotif(err.responseJSON.message, "error");
         }
         else
             ShowNotif("Something went wrong!", "error");
      },
      success: function (data) {
         if (field != undefined && field != null && field != "")
             $(field).html('');
     
         if (container != undefined && container != null && container != "")
             $(container).waitMe('hide');
     
         if (callback != undefined && callback != null && callback != "")
             return callback(data);
      }
   };

   if (isJson)
    config.dataType = 'json';

   $.ajax(config);
}