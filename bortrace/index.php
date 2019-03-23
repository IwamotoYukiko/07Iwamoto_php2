
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>投票記録</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">

<header>
  <nav>
      <a class="nav_btn" href="result.php">収支記録</a>
  </nav>
  <div class="top">
  <h1>BOAT RACE 平和島<br>
  投 票 記 録</h1>
  </div>

</header>

<div class="main">
<form method="post" action="select.php">
    <p>レース：<select name="race" id="rSelect"></select></p>

     <div class="form_left">
     <p>投 票：
     <input type="radio" name="tohyo" id="t1" value="1"><label class="white" for="t1">1</label>
     <input type="radio" name="tohyo" id="t2" value="2"><label class="gray" for="t2">2</label>
     <input type="radio" name="tohyo" id="t3" value="3"><label class="red" for="t3">3</label>
     <input type="radio" name="tohyo" id="t4" value="4"><label class="blue" for="t4">4</label>
     <input type="radio" name="tohyo" id="t5" value="5"><label class="yellow" for="t5">5</label>
     <input type="radio" name="tohyo" id="t6" value="6"><label class="green" for="t6">6</label></p>

     <p>金 額：<select name="race" id="pSelect"></select></p>
     </div>

     <div class="form_right">
     <p>結 果：
     <input type="radio" name="result" id="k1" value="1"><label class="white" for="k1">1</label>
     <input type="radio" name="result" id="k2" value="2"><label class="gray" for="k2">2</label>
     <input type="radio" name="result" id="k3" value="3"><label class="red" for="k3">3</label>
     <input type="radio" name="result" id="k4" value="4"><label class="blue" for="k4">4</label>
     <input type="radio" name="result" id="k5" value="5"><label class="yellow" for="k5">5</label>
     <input type="radio" name="result" id="k6" value="6"><label class="green" for="k6">6</label></p>

     <p>オッズ：<input type="text" name="ozzu">倍</p>
     </div>
     
    
     <input type="submit" value="送信">
 
  
</form>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="main.js"></script>
</body>
</html>
