<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>お問い合わせフォーム</title>
    <link rel="apple-touch-icon icon" href="app.png" />
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel=" stylesheet">
    <link rel="stylesheet" href="for.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="racutogaki.js"></script>
</head>

<body>
    <header>
        <div class="header">
            <div class="top">
                <a href="https://instagram.com/rakutogaki?igshid=wgkkn62nqtua"><img src="insta.png" alt="insta"></a>
                <h1>
                    <span class="span1">ら</span>
                    <span class="span2">く</span>
                    <span class="span3">と</span>
                    <span class="span4">が</span>
                    <span class="span5">き</span>
                </h1>
                <h2>official website</h2>
            </div>
            <div class="menuWrapper">
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
    <div class="wrapper">
        <h2 class="page-title">Contact</h2>
        <form name="form" action="con.php" method="post" OnSubmit="return check_value()" enctype="multipart/form-data">
            <!-- 名前 -->
            <div class="name">
                <label>名前(必須)</label>
                <input type="text" id="name" name="name" size="30" maxlength="10000" placeholder="山田太郎" required>
            </div>
            <!-- エラーメッセージ -->
            <div><font color="red"><?php echo $error_name; ?></font></div>
           

            <!-- メール -->
            <div class="mail">
                <label>メールアドレス(必須)</label>
                <input type="email" id="mail" name="mail" size="30" maxlength="10000" placeholder="example@email.com" required>
            </div>
           <!-- エラーメッセージ -->
           <div><font color="red"><?php echo $error_mail; ?></font></div>
          

<!-- opacity0にするかどうか検討 -->
            <!-- メッセージ -->
            <div class="message">
                <label for="message">お問い合わせ内容</label>
                <textarea type="text" name="message" id="message" cols="34" rows="7" maxlength="10000" 　required ></textarea>
            </div>

            <div><font color="red"><?php echo $error_message; ?></font></div>
           

            <br>
            <input type="submit" class="button" value="確認" name="button">
        </form>
    </div>
</body>

</html>