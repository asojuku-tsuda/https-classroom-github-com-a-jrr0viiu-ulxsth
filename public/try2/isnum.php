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
$data = filter_input(INPUT_GET, "indata");
if(empty($data)) {
  die("Error: 値が空です");
}
if(!is_numeric($data)) {
  die("Error: 整数値ではない値が入力されています");
}

echo "入力された数字は： " . $data;
?>
    </h2>
    </div>
  </body>
</html>
