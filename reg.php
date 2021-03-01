<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try{
  //Gmail 認証情報
  $host = 'smtp.gmail.com';
  $username = 'racutogaki@gmail.com'; 
  $password = 'nrcjsaogrdiulhjy';
  //差出人
  $from = 'racutogaki@gmail.com';
  $fromname = 'らくとがき';
  //宛先
  $to = $_POST['mail'];
  $toname = $_POST['name'];
  //件名・本文
  $subject = '送信ありがとうございます';
  $body ='らくとがきをご覧いただきありがとうございます'
            ."\n"."\n"."\n"."\n".
            'お問い合わせ内容はこちら'
            ."\n".
            '--------------------------'
            ."\n".
            $_POST['message']
            ."\n".
            '-------------------------------------------------------'
            ."\n"."\n"."\n"."\n".
            'らくとがき公式Instagramはこちら'
            ."\n".
            'https://instagram.com/rakutogaki?igshid=1reyncfvy15aa'
            ."\n"."\n".
            'らくとがき公式ホームページはこちら'
            ."\n".
            'http://rucutogaki.sakura.ne.jp/racutogaki/racutogaki.html';
  //メール設定
  
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->Host = $host;
  $mail->Username = $username;
  $mail->Password = $password;
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->CharSet = "utf-8";
  $mail->Encoding = "base64";
  $mail->setFrom($from, $fromname);
  $mail->addAddress($to, $toname);
  $mail->addReplyTo($from,$fromname);  
  $mail->Subject = $subject;
  $mail->Body    = $body;
  //メール送信
  $mail->send();
}catch (Exception $e){
    var_dump($e);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>お問い合わせフォーム</title>
    <link rel="apple-touch-icon icon" href="app.png" />    
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link rel="stylesheet" href="reg.css">
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
<div class="register">
    <div class="reg">
        <h2>送信ありがとうございます</h2>
        <button class="home"><a href="racutogaki.html" style="text-decoration: none;">ホームへ</a></button>
    </div>
    </div>
</body>
</html>