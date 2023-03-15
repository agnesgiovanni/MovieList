$(document).ready(function(){
    $('#save-picture').on('click',function(){
        var query= $('#image-url').val();
        $.ajax({
            url:"/modal",
            type:"GET",
            data:{'url': query},
            success:function(){
              location.reload();
            }
        });
    });
});