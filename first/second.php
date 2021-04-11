<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
<h3>Форма для ввода данных</h3>
<form method="POST">
    <p>Имя: <input type="text" name="name" /></p>
    <p>Возраст: <input type="number" name="age" /></p>
    <input type="submit" value="Отправить">
</form>
<h2><?php
    $name = strip_tags($_POST['name'] ?? ' ');
    $age = htmlentities($_POST['age'] ?? ' ');
    echo $name . ' ' . $age;
?></h2>
</body>
</html>