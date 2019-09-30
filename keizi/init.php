<?php
session_start();
$db['host'] = "localhost";  // DBサーバのURL
$db['user'] = "root";  // ユーザー名
$db['pass'] = "";  // ユーザー名のパスワード
$db['dbname'] = "board_test";  // データベース名
?>
 
<?php
 
$dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);
 
try{
  $pdo = new PDO($dsn, $db['user'], $db['pass']);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
}catch(PDOException $Exception){

  die('接続エラー:'.$Exception->getMessage());
}
?>
