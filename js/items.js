var a = 1; 
$(document).ready(function(){
    $('.item__controls-add').click(function(){
        // let data = {'name': 'james'}
        $.ajax({
            url : "./php/item_handler.php",
            type: "POST",
            data : "items_get_from_db",
            success: function(data, textStatus, jqXHR)
            {
                var data_json = JSON.parse(data);
                console.log(data_json);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
            }
        });
    })
})