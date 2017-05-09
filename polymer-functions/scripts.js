(function ZohoConvertJson(url) {
  var mydata = [];

  $.ajax({
    url: url,
    async: false,
    dataType: 'json',
    success: function (json) {
      var arr_return = [];
      var items = json.response.result.CustomModule1.row;

      $.each(items, function(key, val) {
        var item_ojb = [];
        var items_val = val.FL;

        $.each(items_val, function(key, val) {
          var item_val = val.val.replace(" ", "_");
          var item_content = val.content;

          item_ojb[item_val] = val.content;
        });

        arr_return.push(item_ojb);
      });
      mydata = arr_return;
    }
  });

  //console.log(mydata);
  return mydata;
})();