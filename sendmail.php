<?php
    if(isset($_POST['mailsend'])){
        /*
        считываем переменные, переданные из формы ввода данных в
        массив $_POST (масссив POST &mdash; содержит данные 
        формы, передаваемые в теле страницы методом post), 
        удаляем лишние пробелы и
        комментируем специальные символы html 
        */ 
         $subject = htmlspecialchars(trim($_POST['subject']));
         $message = htmlspecialchars(trim($_POST['message']));
        /* Так как поле from в аргументах функции явно 
        не присутствует его мы передадим в заголовке headers */
         $headers = "From:".$from;
         $to = "server";
        if(!(strlen($subject) < 4 or strlen($message) < 5 )){
            if(mail($to, $subject, $message, $headers)){ 
               echo "Письмо отправлено.<br/>";
               ?> <a href="default.php">На главную страницу</a> <?php
            }
            else{
               echo"Что то пошло не так и письмо не может быть отправлено";
            }
        }
        else{
            echo "Тема или сообщение письма слишком короткие!<br/>";
             ?> <a href = "email.php">Попробовать снова<br/></a>
             <a href="default.php">На главную страницу</a> <?php
        }
    }

?>