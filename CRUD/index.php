<?php 
    require('vendor/connect.php');
    if(isset($_POST['comment'])){
        // если пришёл коментарий, то сохраняем его в БД
        // для защиты используеться PDO и strip_tags 

        $save_comment = $pdo->prepare('INSERT INTO `comments` (`comment`) VALUES ( :comment ) ; ');
        $save_comment->execute([':comment' => strip_tags($_POST['comment']) ]);
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 3</title>
</head>
<body>

    <form action="#" method="post">
        <textarea name="comment" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Сохранить">
    </form>
    <div>
        <?php 
            // выодим коментарии
            $select_comments = $pdo->query('SELECT * FROM `comments` ');

            while( $comment = $select_comments->fetch() ){
                echo('<br><pre>'.$comment['comment'].'</pre>');
            }
        ?>
    </div>
</body>
</html>