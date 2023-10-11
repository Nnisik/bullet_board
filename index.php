<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      button {
        cursor: pointer;
      }
    </style>
    <title>Доска объявлений</title>
  </head> 
  <body>
    <?php
        require_once "./html/nav.html";
    ?>
    <div class="search-container">
        <form class="search-form" action="./includes/search.inc.php">
            <input class="search-field" type="text" placeholder="Я ищу ...">
            <button class="search-btn">Найти</button>
        </form>
        <style>
            .search-container {
                margin: 20px auto 10px;
                width: fit-content;
                height: 50px;
            }
            .search-form {
                border: 1px solid grey;
                height: 100%;
            }
            .search-field {
                height: 100%;
                width: 460px;
                border: none;
                border-right: 1px solid grey;
                outline: none;
                padding: 0 20px;
                font-size: 18px;
                font-weight: 200;
            }
            .search-field::placeholder {
                color: rgb(150, 150, 150);
                letter-spacing: 2px;
                font-size: 18px;
            }
            .search-btn {
                height: 100%;
                width: 100px;
                border: none;
                background: transparent;
                font-size: 18px;
                transition-duration: 0.3s;
            }
            .search-btn:hover {
                color: white;
                background: rgb(31, 77, 88);
            }
        </style>
    </div>
    <div class="add-menu">
        <?php
            require_once "auth-user.php";
        ?>
    </div>
    <style>
        .add-menu {
            width: fit-content;
            margin: 10px auto;
            text-align: center;
        }
    </style>
    <div class="container">
        <div class="board">
            <?php
                $i = 0;
                while ($i < 5){
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
        <style>
            .container {
                width: 100%;
                height: fit-content;
            }
            .board {
                width: 600px;
                margin: 0 auto;
            }
            .board-item {
                height: 100px;
                padding: 20px 25px;
                display: flex;
                flex-direction:column;
                justify-content: space-between;
                border: 1px solid grey;
                margin: 0 0 10px;
            }
            .item-info > p {
                padding-left: 10px;
            }
            .item-extra-info {
                display: flex;
                justify-content: end;
            }
        </style>
    </div>
  </body>
</html>