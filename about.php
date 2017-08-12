<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Basic</title>
    </head>

    <body>
        <div style="margin-left: 10px">
            <h1>Страница пользователя</h1>
                <?php
                $name='Богдан';
                $age=21;
                $mail='b-sazonov@list.ru';
                $city='Москва';
                $info='Начинающий веб-разработчик. Тянусь к знаниям, обожаю мир высоких технологий';
                ?>
            <p><? echo $name .''. PHP_EOL; ?></p>
            <p><? echo $age .''. PHP_EOL; ?></p>
            <p><? echo $mail .''. PHP_EOL; ?></p>
            <p><? echo $city .''. PHP_EOL; ?></p>
            <p><? echo $info .''. PHP_EOL; ?></p>
        </div>
    </body>
</html>

