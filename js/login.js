function submitLogin(){
    $.post({
        url:"assets/php/login.php",
        type: 'post',
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