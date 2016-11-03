(function() {

  this.sendAjax = function(url, action, data) {
    var result;
    if (typeof data === 'string') {
      data += "&action=" + action;
    } else {
      data.action = action;
    }
    result = null;
    $.ajaxSetup({
      async: false
    });
    $.ajax({
      "url": url,
      "dataType": 'json',
      "type": 'POST',
      "data": data,
      "success": function(dataResult) {
        return result = dataResult;
      },
      "error": function(result) {
        return console.log(result, 'error');
      }
    });
    return result;
  };

  this.animate = function(ele, x) {
    $(ele).removeClass(x + ' animated').addClass(x + ' animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
      $(this).removeClass(x + ' animated');
    });
  };

  this.message = function(message, time) {
    $("#errorMensaje").fadeIn(1000);
    $("#errorMensaje p").text(message);
    if (time !== void 0 && time !== null && time > 0) {
      return setTimeout(function() {
        return $("#errorMensaje").fadeOut(1000, function() {
          return $("#errorMensaje p").text("");
        });
      }, time);
    }
  };

  this.hideMessage = function() {
    return $("#errorMensaje").fadeOut(1000, function() {
      return $("#errorMensaje p").text("");
    });
  };

  this.setCookie = function(cname, cvalue, exhours) {
    var d, expires;
    d = new Date;
    d.setTime(d.getTime() + exhours * 60 * 60 * 1000);
    expires = 'expires=' + d.toUTCString();
    return document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
  };

  this.getCookie = function(cname) {
    var c, ca, i, name;
    name = cname + '=';
    ca = document.cookie.split(';');
    i = 0;
    while (i < ca.length) {
      c = ca[i];
      while (c.charAt(0) === ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) === 0) {
        return c.substring(name.length, c.length);
      }
      i++;
    }
  };

  this.deleteCookie = function(name) {
    document.cookie = name + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  };

  this.validYears = function(type) {
    if ((getCookie("i34rs#af") != undefined && getCookie("i34rs#af") == "1a8fc") || (localStorage.getItem("i34rs#af") != undefined && localStorage.getItem("i34rs#af") == "1a8fls")) {
      return true;
    }else{
      console.log(type,"entro");
      if (type != undefined && type == true) {
        window.location.href = "./";
      }
      return false;
    }
  };

}).call(this);
