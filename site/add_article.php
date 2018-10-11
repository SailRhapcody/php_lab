<?php
session_start();
if ($_SESSION['rights']=='a')
{?>
   <html>
    <head>
        <title>Default Page</title>
        <meta charset = "utf-8">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        <link href="css/add_article.css" rel="stylesheet" type="text/css">
        <link href="css/reg_log_form.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        </head>
    <body>
        <?php require_once("header.php"); ?>
        <?php require_once("db_connect.php"); ?>
        <?php
            //Сценарий отправки файла на сервер
            //Проверяем, была ли выполнена отправка файла. Далее реализуем сценарий.
            $file_path = "/site/content/img/img".$_FILES["file_upload"]["name"];
            if (isset($_POST["MAX_FILE_SIZE"]))
            {
                $tmp_file_name = $_FILES["file_upload"]["tmp_name"];
                $dest_file_name = $_SERVER['DOCUMENT_ROOT'] . "" . $file_path;
                move_uploaded_file($tmp_file_name, $dest_file_name);
            }
            
                $singer = $_POST['singer'];
                $album = $_POST['album'];
            if($singer != "" && $album != ""){
                $query = "INSERT INTO music_content(id, singer, album, image_link) VALUES (NULL, '$singer', '$album', '$file_path')";
                $res = mysqli_query($link, $query);
            }
            
        ?>
        <div id="main_content">
            <!-- Форма для отправки файла на сервер -->
        <form name = "file_upload" action="" enctype="multipart/form-data" method="post">
            SINGER<input type="text" name="singer">
           ALBUM<input type ="text" name="album">
           ALBUM_IMAGE<br>
            <input type="file" name="file_upload" />
            <input type="hidden" name="MAX_FILE_SIZE" value="65536" /><br>
            <input type="submit" name="submit" value="ADD" id="but_sub"/>
        </form>
        <?php
        //Получаем полный путь к папке, где хранятся графические файлы
        $image_dir_path = $_SERVER['DOCUMENT_ROOT'] . "/photo";
        //Запускаем просмотр папки. Функция opendir() возвращает идентификатор
        //папки
        $image_dir_id = opendir($image_dir_path);
        //$array_files - массив, в который будут помещаться все найденные файлы
        $array_files = null;
        //Служебная переменная, используемая для вычисления индекса следующего
        //элемента массива $array_files
        $i = 0;
        //Запускаем цикл просмотра
        while(($path_to_file = readdir($image_dir_id)) !== false)
        //Функция readdir() возвращает полный путь к очередному файлу,хранящемуся //в папке, идентификатор которой был возвращен функциейopendir() и передан //в качестве параметра.
        //$path_to_file получает полный путь к файлу для дальнейшей обработки.
        //Если в папке нет непросмотренных файлов - возвращается логическое значение false
        {
            if(($path_to_file !=".") && ($path_to_file !=".."))
            //Точки обозначают вложенные файлы: одна точка - текущая папка, две точки // - папка, в которую вложена текущая папка.
                {
                $array_files[$i] = basename($path_to_file);
                $i++;
                //Помещаем имя найденного файла в массив $array_files. Функция basename()
                //позволяет получить имя файла из полного пути к нему.
                }
        }
        closedir($image_dir_id);
        //closedir() удаляет из памяти переданный ей идентификатор папки, таким
        //образом завершая просмотр.
        ?>
        <a href="default.php">На главную страницу</a>
        </div>
    </body>
</html> 

<?php
}
else
{
    echo "Извините, у Вас нет доступа";
    echo "<a href = \"default.php\">На главную</a>";
}
?>