<!DOCTYPE html>
<html lang="ja">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>お問い合わせフォーム</title>
        <link rel="apple-touch-icon icon" href="app.png" />
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
        <link rel="stylesheet" href="con.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="racutogaki.js"></script>
</head>

<body>
<header>
            <div class="header">
                <div class="top">
                    <a href="https://instagram.com/rakutogaki?igshid=wgkkn62nqtua"><img src="insta.png" alt="insta"></a>
                    <h1><span class="span1">ら</span>
                        <span class="span2">く</span>
                        <span class="span3">と</span>
                        <span class="span4">が</span>
                        <span class="span5">き</span>
                    </h1>
                    <h2>official website</h2>
                </div>
                <div class="menuWrapper" >
                    <a href="#menu" id="menuButton"><span>MENU</span></a>
                </div>
            </div>
            <div id="menuList">
                <nav id=nav-menulist>
                    <ul>
                        <h2>MENU</h2>
                        <li><a class="list-item" href="racutogaki.html">Home</a></li>
                        <li><a class="list-item" href="original.html">Original picture</a></li>
                        <li><a class="list-item" href="irai.html">Requested picture</a></li>
                        <li><a class="list-item" href="for.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>




  <form action="reg.php" method="post">




<div class="confirm">
    <h2>入力内容の確認</h2>
    <div class="confirms"  >
        <div class="nam"><?php 
            $name = $_POST["name"];
            echo ("名前 :$name<br>");?></div>
        <br>
        <div class="mai"><?php $mail = $_POST["mail"];
            echo ("メールアドレス :$mail<br>");?></div>
        <br>
        <div class="mes"><?php
                $message = nl2br($_POST["message"]);
            echo ("お問い合わせ内容 : <br> $message");?></div>
        <br>
    </div>

    <div class="backnext">
    <button type="button" class="back"  onclick="history.back()">戻る</button>
    <input type="submit" class="button" value="送信">
    </div>
</div>
    
    <input type="hidden" name="name" value="<?= $name ?>">
    <input type="hidden" name="mail" value="<?= $mail ?>">
    <input type="hidden" name="message" value="<?= $_POST["message"] ?>">
    
  </form>

</body>

</html>