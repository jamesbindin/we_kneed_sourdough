$(document).ready(function(){
    $('.item__controls-add').click(function(){
          $.ajax({
            type: "get", //request type,
            url:"./php/order.php", //the page containing php script
            success: function(res){
                console.log(res);
            }
         })
    })
})