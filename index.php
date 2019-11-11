<!DOCTYPE html>
 <html lang="ru">
 <head>
 
 <meta charset="UTF-8">
 
 
 <title>Document</title>
</head>
 <body>
 <h1></h1>
 <?php
  require "db.php";
 ?>
 
 
 <?php if( isset($_SESSION['logged_user']) )  : ?>
   Авторизован!<br>
   Привет, <?php echo $_SESSION['logged_user']->login; ?>!
   <hr>
   <a href="/logout.php">Выйти</a>
 <?php else : ?>
     Вы не аторизованы! <br>
     <a href="/login.php">Авторизация</a><br>
     <a href="/signup.php">Регистрация</a>
 <?php endif; ?>
 
 
 </body>
</html>
