function submitRegister(){
    $.post({
        url:"assets/php/register.php",
        data: {
            username: $("#username").val(),
            password: $("#password").val()
        },
        success: function(res){
            if(res==true){
                location.replace("index.html");
            }
            else{
                $(".alert").show();
            }
        }  
    })
}