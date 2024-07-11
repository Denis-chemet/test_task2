
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 1</title>
</head>
<body>
<?php
    // Вход
    $data = [
        ['Иванов', 'Математика', 5],
        ['Иванов', 'Математика', 4],
        ['Иванов', 'Математика', 5],
        ['Петров', 'Математика', 5],
        ['Сидоров', 'Физика', 4],
        ['Иванов', 'Физика', 4],
        ['Петров', 'ОБЖ', 4],
    ];

    // программа
    // Получилось 2 массива и 1 цикл 
    // в массиве $disciplines сохраняются названия придметов 
    // в массиве $table сохраняются данные из массива $data в формате [ 'Фамилия' => [ ['Предмет'] => 'Количество балов' ] ]

    $table = [];
    $disciplines = [];
    foreach ($data as $tr) {
        if (isset($table[$tr[0]])) {
            // если в массиве есть ученик то проверяем есть ли этот предмет у него
            if ( isset($table[$tr[0]][$tr[1]]) ) {
                // если этот предмет у него есть то добавляем балы к значению
                $disciplines[$tr[1]] = $tr[1];
                $table[$tr[0]][$tr[1]] += $tr[2];
            } else {
                // если этого предмета у него нет то добовляем его ученику 
                $disciplines[$tr[1]] = $tr[1];
                $table[$tr[0]][$tr[1]] = $tr[2];
            }
        } else {
            // если в массиве нету ученика добавить учинека и предмет
            $disciplines[$tr[1]] = $tr[1];
            $table[$tr[0]] = [$tr[1] => $tr[2]];
        }
    }

    // выход
    // А для вывода получилось 3 цикл 
?>
    <table border="1">
    <?php 
        echo('<tr><th> </th>');
        foreach ($disciplines as $discipline) {
            echo('<th> '.$discipline.' </th>');
        }
        echo('</tr>');
        foreach ($table as $key => $tr) {
            echo('<tr>');
            echo('<td> '.$key.' </td>');
            foreach ($disciplines as $discipline) {
                if(isset($tr[$discipline])){
                    echo('<th>'.$tr[$discipline].'</th>');
                } else {
                    echo('<th> </th>');
                }
            }
            echo('</tr>');
        }
    ?>
    </table>
</body>
</html>

    