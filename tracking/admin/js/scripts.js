$(document).ready(function(){
    // add/edit user
    $(document).on("submit","addform",function(event){
        event.preventDefault();
        $.ajax({
            url:"/tracer/admin/ajax.php",
            type:"POST",
            dataType:"json",
            data: new formdata(this),
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("wait....");
            },
            success:function(response){
                console.log(response);
            },
            error:function(){
                console.log("Oops! Something Went Wrong!!");
            },     
        });    
    });
});