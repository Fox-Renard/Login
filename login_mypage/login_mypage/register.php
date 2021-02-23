<!DOCTYPE HTML>
<html lang = "ja">
    
    <head>
        <meta charset = "utf-8">
        <title>会員登録</title>
        <link rel="stylesheet" type="text/css" href="register.css">
    </head>
    
    <body>
    
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        
        <form method="post" action="register_confirm.php">
            <h1>会員登録</h1>
            
            <div>
                <label><span>必須</span>氏名</label>
                <br>
                <input type="text" class="text" size="35" name="name">
            </div>
            
            <div>
                <label><span>必須</span>メールアドレス</label>
                <br>
                <input type="text" class="text" size="35" name="mail">
            </div>
            
            <div>
                <label><span>必須</span>パスワード</label>
                <br>
                <input type="password" class="text" size="35" name="pass">
            </div>
            
            <div>
                <label><span>必須</span>パスワード確認</label>
                <br>
                <input type="password" class="text" size="35" name="passfirm">
            </div>
            
            <div>
                <label>プロフィール写真</label>
                <br>
                <input type="file" class="text" name="mypic">
            </div>
            
            <div>
                <label>コメント</label>
                <br>
                <textarea cols="50" rows="7" name="comments"></textarea>
            </div>
            
            <div class="sub">
                <input type="submit" class="submit" value="登録する">
            </div>
        </form>
        
        <footer>
            copyright©internous | 4each blog the which provides A to Z about programming.
        </footer>
        
    </body>
</html>