<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./style/style.css">
        <title>Доска объявлений</title>
    </head>
    <body>
        <?php require_once "./html/nav.html";?>
        <div class="add-menu">
            <?php 
                require_once "auth-user.php";
            ?>
        </div>
        <div class="container">
            <div class="board">
                <?php
                    include_once "./includes/db.inc.php";

                    foreach (getAllAdverts() as $row) {
                        echo '<div class="board-item">';
                        echo '<div class="item-info">';
                        echo '<h2>'.$row['advert_header'].'</h2>';
                        echo '<p>'.$row['desrip'].'</p>';
                        echo '</div>';
                        echo '<div class="item-extra-info">';
                        echo $row['creatorID'].', '.$row['create_date'];
                        echo '</div>';
                        echo '</div>';
                    }
                    
                    $i = 0;
                    while ($i <= 5){
                        echo '<div class="board-item">';
                        echo '<div class="item-info">';
                        echo '<h2>Item header</h2>';
                        echo '<p>Item description</p>';
                        echo '</div>';
                        echo '<div class="item-extra-info">';
                        echo 'autor name, post date';
                        echo '</div>';
                        echo '</div>';
                        $i+=1;
                    }
                ?>
            </div>
        </div>
    </body>
</html>