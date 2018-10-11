$(document).ready(function() {
$( "#log_in" ).click(function() {
  $( "#reg_form" ).slideToggle( "slow", function() {
  }).focus();
 
});
$('#register').click(function(){
                var login = $('#login').val();
                var password = $('#password').val();
                $.ajax({
                    url: "login.php", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                        "login":    login,
                        "password":   password,
                    }
                    // после получения ответа сервера
                    success: function(data){
                        $('.messages').html(data.result); // выводим ответ сервера
                    }
                });
                alert("hello");
                window.location.reload();
            });

$('#log_out').click(function(){
  alert("hello");
                $.ajax({
                    url: "logout.php", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    // после получения ответа сервера
                    success: function(data){
                        $('.messages').html(data.result); // выводим ответ сервера
                    }
                });
                window.location.reload();
            });            

});