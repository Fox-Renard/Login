<!DOCTYPE HTML>
<html lang="ja">
    
    <head>
        <meta charset = "utf-8">
        <title>会員登録確認</title>
        <link rel="stylesheet" type="text/css" href="register_confirm.css">
    </head>
    
    <body>
        
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        
    <main>
        <div class="confirm">
            <h1>会員登録 確認</h1>
            <p>こちらの内容で登録してもよろしいでしょうか？</p>
            
            <div class="name">
                氏名：<?php echo $_POST['name'];?>
            </div>
                
            <div class="mail">
                メール：<?php echo $_POST['mail'];?>
            </div>
            
            <div class="pass">
                パスワード：<?php echo $_POST['pass'];?>
            </div>
            
            <div class="mypic">
                プロフィール写真：<?php echo $_POST['mypic'];?>
            </div>
            
            <div class="comments">
                コメント：<?php echo $_POST['comments'];?>
            </div>
            
            <div class="button">
                <form action="register.php">
                    <input type="submit" class="button1" value="戻って修正する"/>
                </form>
            
                <form action="register_insert.php" method="post">
                    <input type="submit" class="button2" value="登録する"/>
                    <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
                    <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                    <input type="hidden" value="<?php  echo $_POST['pass'];?>" name="pass">
                    <input type="hidden" value="<?php echo $_POST['mypic'];?>" name="mypic">
                    <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
                </form>
            </div>
        </div>
    </main>
        
        <footer>
            copyright©internous | 4each blog the which provides A to Z about programming.
        </footer>
        
    </body>
</html>