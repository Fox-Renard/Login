<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into register(name,mail,pass,mypic,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['pass']."','".$_POST['mypic']."','".$_POST['comments']."');");
?>

<!DOCTYPE HTML>
<html lang="ja">
    
    <head>
        <meta charset = "utf-8">
        <title>会員登録</title>
        <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
    
    <body>
        
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        
    <main>
    
        <div Class="confirm">
            <br>
            <p>登録ありがとうございました。<br></p>
            <a href="register.php">新規登録画面へ戻る</a>    
        </div>
        
    </main>
        
        <footer>
            copyright©internous | 4each blog the which provides A to Z about programming.
        </footer>
        
    </body>
</html>