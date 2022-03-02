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
    <title>in ra chữ số</title>
</head>
<body>
    <form action="chuyenTA_TV.php" method="post">
        <div>Nhập tiếng anh:
            <input type="text" name="n"/>
        </div>
        <div>
                </br>
                <input type="submit" value="in ra tiếng việt">
        </div>
    </form>
</body>
</html>
<?php
function chuyenTA_TV($number) {
 
$dictionary  = array(
    'zezo'                => 'số không',
    'one'                 => 'số một',
    'two'                 => 'số hai',
    'three'               => 'số ba',
    'four'                => 'số bốn',
    'five'                => 'số năm',
    'hello'               => 'xin chào',
    'bye'                 => 'tạm biệt',
    'i love you'         => 'anh yêu em',
    'good morning'         => 'chào buổi sáng'
    );
    $string=null;
    $string= $dictionary[$number];
    return $string;
    }

$result=chuyenTA_TV($GLOBALS['n']);
echo $result;
?>
