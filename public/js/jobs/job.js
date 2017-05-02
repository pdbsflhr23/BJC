$(document).ready(function(){
   $("#new_item_btn") .on('click',function(){
      $("#more_container").before($("#item_row")[0].outerHTML);
       return false;
   });
});