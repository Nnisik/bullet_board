<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="./style/style.css">
      <title>Доска объявлений</title>
  </head> 
  <body>
    <?php
        require_once "./html/nav.html";
    ?>
    <div class="auth-form-container" id="login-form-container">
      <h2>Войти</h2>
      <form action="./includes/login.inc.php" method="post">
        <input type="text" name="login" placeholder="Логин...">
        <input type="password" name="pwd" placeholder="Пароль...">
        <button type="submit">Продолжить</button>
      </form>
      <button class="change-display-btn" id="open-sign-up-btn">Зарегистрироваться</button>
    </div>
    <div class="auth-form-container" id="signup-form-container">
      <h2>Регистрация</h2>
      <form action="./includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder=" Имя пользователя...">
        <input type="text" name="login" placeholder=" Логин...">
        <input type="password" name="pwd" placeholder=" Пароль...">
        <input type="password" name="pwd-rpt" placeholder=" Повторите пароль...">
        <button type="submit">Создать</button>
      </form>
      <button class="change-display-btn" id="open-sign-in-btn">Войти</button>
    </div>
    <script src="./js/login.js"></script>
</body>
</html>