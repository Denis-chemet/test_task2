<?php 
    require('vendor/connect.php');

    // Я понимаю что это не лутчий способ, 
    // но единственный который я предумал не пользуясь интернетом как в задании написано
    // извините

    // Получаем availabilities и сохраняем id товаров и складов

    $select_availabilities = $pdo->query('SELECT * FROM `availabilities`');

    $products_id = [];
    $stocks_id = [];

    while($availabilities = $select_availabilities->fetch()){

        $products_id[] = '^'.($availabilities['product_id']).'$';
        $stocks_id[] .= '^'.($availabilities['stock_id']).'$';

    }

    // Удаляем товары которых нет в availabilities 

    $delete_products = $pdo->prepare('DELETE FROM `products` WHERE NOT `id` REGEXP :products_id ;');
    $delete_products->execute([ ':products_id' => implode('|', $products_id) ]);

    // Удаляем склады которых нет в availabilities 
    $delete_stocks = $pdo->prepare('DELETE FROM `stocks` WHERE NOT `id` REGEXP :stocks_id ;');
    $delete_stocks->execute([ ':stocks_id' => implode('|', $stocks_id) ]);

    // Теперь мы можем удалить категории которые неиспользуются т.к. удалили товары которых нет
    // Получаем products и сохраняем id категорий
    $select_products = $pdo->query('SELECT * FROM `products` ;');

    $categories_id = [];

    while($product = $select_products->fetch()){

        $categories_id[] = '^'.($product['category_id']).'$';

    }

    // Удаляем категории которых нет в products 
    $delete_stocks = $pdo->prepare('DELETE FROM `categories` WHERE NOT `id` REGEXP :categories_id ;');
    $delete_stocks->execute([ ':categories_id' => implode('|', $categories_id) ]);
    
?>
