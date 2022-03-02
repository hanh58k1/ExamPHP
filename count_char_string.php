<?php
$n="";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $n = $_POST['n'];

    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="count_char_string.php">
    <input type="text" name="n" placeholder="Nhập 1 chuỗi ký tự" size="30">
    <button type="submit">Đếm</button>
</form>
</body>
</html>
<?php
  
function count_char_string($n){
    //aabbccaaa=>>a2b2c2a3//
    if($n == '') {
        echo "Bạn chưa nhập chuỗi";
        return;
    }
   $array = str_split($n);// cắt từng kí tự 
   $count =0;
   $result = array();
   $first = $array[0];
   
   for($i = 0 ; $i <=count($array) ; $i++){
       if($i == count($array)){
           array_push($result,$first.$count);
           break;
       }
       if($first == $array[$i]){
           $count++;
       }else{
           array_push($result,$first.$count);
           $count=1;
           $first=$array[$i];
       }
   }
   echo "<br>chuỗi vừa nhập :$n<br>";
   echo "số lần xuất hiện của từng phần tử là :" .implode('',$result);
}

echo count_char_string($GLOBALS['n']);
?>
