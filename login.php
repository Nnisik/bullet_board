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
        cursor: pointer;
      }
    </style>
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
    <style>
      .auth-form-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: fit-content;
        margin: auto;
        padding: 20px;
        border: 1px solid grey;
        text-align: center;
      }
      .auth-form-container > h2 {
        margin: 30px 0;
        font-size: 28px;
        letter-spacing: 1px;
      }
      .auth-form-container > form {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        width: 80%;
      }
      .auth-form-container input {
        height: 25px;
        margin: 5px 0;
        padding: 0 10px;
        font-size: 18px;
        outline: none;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: 1px solid grey;
      }
      .auth-form-container > form button {
        height: fit-content;
        width: fit-content;
        margin: 20px auto 0;
        padding: 5px 15px;
        border: none;
        background: rgb(31, 77, 88);
        color: white;
        font-size: 16px;
        font-weight: bold;
      }
      .change-display-btn {
        margin-top: 50px;
        border: none;
        background: transparent;
        color: rgb(31, 77, 88);
        font-size: 14px;
      }
    </style>
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