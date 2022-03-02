<?php

$n="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n = $_POST ['n'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kiemTra Palindrome</title>
</head>
<body>
    <form action="kiemTraChuoipalindrome.php" method="post">
        <div>Nhập chuỗi:
            <input type="text" name="n"/>
        </div>
        <div>
                </br>
                <input type="submit" value="Kiểm tra chuỗi có phải chuỗi Palindrome?">
        </div>
    </form>
</body>
</html>
<?php
function kiemTraChuoiPalindrome($A) {
echo "</br>";
  if($A == strrev($A)){
      echo "Chuỗi " .$A. " là chuỗi Palindrome";
  }else{
      echo "Chuỗi " .$A. " không là chuỗi Palindrome";
  }
}
$result=kiemTraChuoiPalindrome($GLOBALS['n']);
echo $result;
?>
