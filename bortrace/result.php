<?php

try {
$pdo = new PDO('mysql:dbname=c_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}


$stmt = $pdo -> prepare("SELECT SUM(syushi) as sum_syushi FROM c_table");
 $stmt -> bindParam(':y', $y, PDO::PARAM_STR);
 $stmt -> execute();
 if($row = $stmt -> fetch()){
 $total = $row['sum_syushi'];
 }


$stmt = $pdo->prepare("SELECT DATE_FORMAT(date, '%Y-%m-%d') AS time, SUM(syushi) AS sum FROM c_table GROUP BY DATE_FORMAT(date, '%Y%m%d')");
 $status = $stmt->execute();
 

    $view="";
    if($status==false){
      $error = $stmt->errorInfo();
      exit("ErrorQuery:".$error[2]);
     }else{
       while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
         $view .= "<p>";
        $view .= $result["time"]." : ".$result["sum"]."円";
         $view .= "</p>";
       }
     }

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>収支表示</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">

<header>
  <nav>
      <a class="nav_btn" href="index.php">投票記録</a>
  </nav>
  <div class="top">
  <h1>収 支 記 録</h1>
  </div>

</header>

<div class= "main">

<div class="total">
    <h2>トータル収支<h2>
    <p class="total_price"><?=$total?>円
    <?php
    if($total >= 0){
        echo "＋";
    }
    ?>
    </p>
    </div>

<div class="rank">
    <p><a href="#more1" class="btn_day">日別収支▽</a><p>

    <div class="morefix" id="more1">&nbsp;</div>
    <div class="more">

    <div class="view"><?=$view?></div>

    <a href="#close">閉じる△</a>

</div>

</div>
</div>

</div>
</body>
</html>
