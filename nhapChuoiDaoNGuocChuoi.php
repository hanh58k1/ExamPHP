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
    <title>đảo ngược chuỗi</title>
</head>
<body>
    <form action="nhapChuoiDaoNGuocChuoi.php" method="post">
        <div>Nhập chuỗi:
            <input type="text" name="n"/>
        </div>
        <div>
                </br>
                <input type="submit" value="Đảo Ngược">
        </div>
    </form>
</body>
</html>
<?php
function daoNguocChuoi($A) {
  echo  strrev($A);
}
$result=daoNguocChuoi($GLOBALS['n']);
echo $result;
?>
