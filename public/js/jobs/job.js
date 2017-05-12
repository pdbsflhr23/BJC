$(document).ready(function(){

    /////////////////////// New & Void ////////////////////////////
    $('#items_void').hide();
    $('#radio_new').click(function() {
        if($('#radio_new').is(':checked')) {
            $('#items_void').hide();
            $('#items_new').show();
        }
    });
    $('#radio_void').click(function() {
        if($('#radio_void').is(':checked')) {
            $('#items_new').hide();
            $('#items_void').show();
        }
    });

    /////////////////////// Price in Item Price ////////////////////////////
    var max_fields      = 100;
    var wrapper         = $("#tb_4"); //Fields wrapper
    var add_button      = $("#add_field_button"); //Add button ID

    var x = 4; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $('<tr id="tb_' + x + '">' +
                '<td><input type="text" name="item_price[]" id="item_price_'+ x +'" class="form-control input-vsm"></td>' +
                '<td><input type="text" name="item_price[]" id="item_price_'+ x +'" class="form-control input-vsm"></td>' +
                '<td><input type="text" name="taxable[]" id="taxable_'+ x +'" class="form-control input-vsm"></td>' +
                '<td><input type="text" name="qty[]" id="qty_'+ x +'" class="form-control input-vsm"></td>' +
                '<td><input type="text" name="nat_price[]" id="nat_price_'+ x +'" class="form-control input-vsm"></td>' +
                '<td><input type="text" name="sale_price[]" id="sale_price_'+ x +'" class="form-control input-vsm"></td>' +
                '<td><input type="text" name="discount[]" id="discount_'+ x +'" class="form-control input-vsm"></td>' +
                '<td><input type="text" name="tax_amount[]" id="tax_amount_'+ x +'" class="form-control input-vsm"></td>' +
                '<td><input type="text" name="reoccurrence[]" id="reoccurrence_'+ x +'" class="form-control input-vsm"></td>' +
                '<td><input type="text" name="rperiod[]" id="rperiod_'+ x +'" class="form-control input-vsm"></td>' +
                '<td><input type="text" name="next_reoccurrence[]" id="next_reoccurrence_'+ x +'" class="form-control input-vsm"></td>' +
                '</tr>'
            ).insertAfter(wrapper); //add input box
        }
    });


    /////////////////////// Price in Item Price ////////////////////////////
    $('#item_code_1').on('change', function () {
       getPrice($(this).val());
    });

    /////////////////////// Get ////////////////////////////
    $('.drops').on('change', function () {
       alert($(this).attr('id'));
    });

    /////////////////////// Calculations ////////////////////////////
    $('#item_price_1, #qty_1').on('blur', function () {
        $('#net_price_1').val('');
        $('#net_price_1').val($(this).val() * $('#item_price_1').val());
    });
    $('#sale_price_1').on('blur', function () {
        var total = (1 - ($('#sale_price_1').val()) / $('#net_price_1').val()) * 100;
        $('#discount_1').val(parseFloat(total).toFixed(2));
    });
    $('#discount_1').on('blur', function () {
        var total = ($('#taxable_1').val() * $('#sale_price_1').val()) / 100;
        $('#tax_amount_1').val(total);
    });

    /////////////////////// Clone Billing ////////////////////////////
   // $("#new_item_btn") .on('click',function(){
   //    $("#more_container").before($("#item_row")[0].outerHTML);
   //     return false;
   // });
   $("#new_item_btn_2") .on('click',function(){
      $("#more_containers").before($("#item_rows")[0].outerHTML);
       return false;
   });

});

    ////////////////////////// Get Price of Selected Item /////////////////////////
    // function getPrice(id) {
    //     $.ajax({
    //         headers: {'X-CSRF-Token': $('input[name="_token"]').val()},
    //         type: "POST",
    //         url: base_path+"job/json/item/price/"+id,
    //         contentType: "application/json; charset=utf-8",
    //         dataType: "json",
    //         success: function(data){
    //             console.log(data);
    //             $('#item_price_1').val(data.price);
    //         }
    //     });
    // }