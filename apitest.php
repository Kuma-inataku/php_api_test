<?php 
$url = "https://bitflyer.jp/api/echo/price";
$json = mb_convert_encoding(file_get_contents($url),'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$json_arr=json_decode($json,true);

if($json_arr === NULL){
  echo "データがありません";
  return;
}else{
  $mid=$json_arr["mid"];
  $ask=$json_arr["ask"];
  $bid=$json_arr["bid"];
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo "<p>bitFlyerのビットコインレート<br />仲値：" . $mid ."<br />";
  echo "1BTC販売価格：" .$ask. "<br />";
  echo "1BTC買取価格：" .$ask. "</p>";  
  ?>
</body>
</html>