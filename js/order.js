var a = 1; 
$(document).ready(function(){
    $('.item__controls-add').click(function(){
        // let data = {'name': 'james'}
        $.ajax({
            url : "./php/order_handler.php",
            type: "POST",
            // data : data,
            success: function(data, textStatus, jqXHR)
            {
                console.log(data);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log();
            }
        });
    })
})