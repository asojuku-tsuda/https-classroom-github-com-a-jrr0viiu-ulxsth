<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
$username = filter_input(INPUT_GET, "username");
$useraddress = filter_input(INPUT_GET, "useraddress");
$usermail = filter_input(INPUT_GET, "usermail");

// 名前
// 1-20文字
if(empty($username)) {
  die("Error: Name は必須です");
}
if(mb_strlen($username) > 20) {
  die("Error: Name は20文字以下である必要があります");
}

// 住所
// 1-50文字
if(empty($useraddress)) {
  die("Error: Address は必須です");
}
if(mb_strlen($useraddress) > 50) {
  die("Error: Address は 50 文字以下である必要があります");
}

// メアド
// 1-100文字、半角英数字＋[.-_@]
if(empty($usermail)) {
  die("Error: e-mail は必須です");
}
if(mb_strlen($usermail) > 100) {
  die("Error: e-mail は 100 文字以下である必要があります");
}
if(!filter_var($usermail, FILTER_VALIDATE_EMAIL)) {
  die("Error: e-mail がメールアドレス形式ではありません");
}

echo "あなたが入力した値<br>";
echo "名前：" . $username . "<br>";
echo "住所：" . $useraddress. "<br>";
echo "メールアドレス：" . $usermail;
?>
    </h2>
    </div>
  </body>
</html>
