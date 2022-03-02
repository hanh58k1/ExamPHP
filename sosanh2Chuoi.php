<?php

$n="";
$m="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n = $_POST ['n'];
    $m = $_POST ['m'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đảo ngược chuỗi</title>
</head>
<body>
    <form action="sosanh2Chuoi.php" method="post">
        <div>Nhập chuỗi t1:
            <input type="text" name="n"/>
        </div>
        <div>Nhập chuỗi t2:
            <input type="text" name="m"/>
        </div>
        <div>
                </br>
                <input type="submit" value="So sánh ">
        </div>
    </form>
</body>
</html>
<?php
function SoSanhChuoi($A ,$B) {
  if($A == $B){
      echo "Hai chuỗi giống nhau";
  }
  else{
      echo "Hai chuỗi không giống nhau";
  }
}
$result=SoSanhChuoi($GLOBALS['n'] ,$GLOBALS['m']);
echo $result;
?>
