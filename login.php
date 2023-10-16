<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <script>
      const signUpForm = document.getElementById("signup-form-container"); 
      const signInForm = document.getElementById("login-form-container"); 

      document.getElementById("log_out-btn").style.display = "none";      
      signInForm.style.display = "none";

      // !FIXME: change form function 
      const openSignUp = document.getElementById("open-sign-up-btn");
      const openSignIn = document.getElementById("open-sign-in-btn");

      openSignUp.onclick = () => {
        signInForm.style.display = "none";
        signUpForm.style.display = "block";
      }

      openSignIn.onclick = () => {
        signUpForm.style.display = "none";
        signInForm.style.display = "block";
      }
    </script>
</body>
</html>