function autoload(){
    $.ajax({
    url:'user/message/refreshmessage.php',
    success: function(data){
        $('.msg').html(data);
    }
    })
}
$(document).ready(function(){
    autoload()
    setInterval(autoload,3000)
})




function sendMessage(){
    $.post('user/message/insertchat.php',{
        pseudo: $('#pseudo').val(),
        message: $('#message').val(),

    },
    function(){
        document.querySelector("#pseudo").value='',
        document.querySelector("#message").value=''
        autoload()
      })

}