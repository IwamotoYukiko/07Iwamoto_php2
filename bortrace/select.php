<?php
//POSTデータ取得
$race = $_POST["race"];
$tohyo = $_POST["tohyo"];
$price = $_POST["price"];
$result = $_POST["result"];
$ozzu = $_POST["ozzu"];

if( $tohyo == $result ){
  $syushi = $price * $ozzu;
} else {
  $syushi = $price * -1;
}

//DB接続
try {
  $pdo = new PDO('mysql:dbname=c_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//データ登録SQL作成 
$stmt = $pdo->prepare("INSERT INTO c_table(id, race, syushi, date)
VALUES(NULL, :race, :syushi, sysdate())");
$stmt->bindValue(':race', $race, PDO::PARAM_STR);
$stmt->bindValue(':syushi', $syushi, PDO::PARAM_INT);
$status = $stmt->execute();

//データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //index.phpへリダイレクト(どこに飛ぶか)
  header("Location: index.php");
  exit;
}
?>
