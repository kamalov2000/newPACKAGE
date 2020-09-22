
<?php
require_once 'config.php'; // подключаем конфиг

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
$query ="ALTER TABLE ".$nametable." ADD `content` VARCHAR(255) NOT NULL AFTER `meta_keyword`";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    echo "Выполнение запроса прошло успешно";
}

// закрываем подключение
mysqli_close($link);
?>
