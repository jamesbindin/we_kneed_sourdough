$(document).ready(function(){
    $('.js--add').click(function(){
        // get id number from html id attribute.
        var id = $(this).attr('id').replace(/[^0-9]/gi, '')

        // increase qty by 1 and add display.
        var qty_element = $('#js--qty_'+id)
        var qty_num = parseInt(qty_element.text())
        var new_qty = qty_num +1; 
        var s = new_qty.toString();
        qty_element.text(s)

        // prevent default
        return false;

        // $.ajax({
        //     url : "./php/order_handler.php",
        //     type: "POST",
        //     // data : data,
        //     success: function(data, textStatus, jqXHR)
        //     {
        //         // var res = JSON.parse(data);
        //         console.log(data);
        //     },
        //     error: function (jqXHR, textStatus, errorThrown)
        //     {
        //     }
        // });
    })

    $('.js--remove').click(function(){
        // get id number from html id attribute.
        var id = $(this).attr('id').replace(/[^0-9]/gi, '')

        // decrease qty by 1 and add display.
        var qty_element = $('#js--qty_'+id)
        var qty_num = parseInt(qty_element.text())
        var new_qty = qty_num -1; 
        var s = new_qty.toString();
        qty_element.text(s)

        // prevent default
        return false;
    })
})