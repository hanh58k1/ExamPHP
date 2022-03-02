<?php
// khai báo các biến toàn cầu
$n="";
// đọc các hệ số từ FORM
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
    <title>in ra ten thang</title>
</head>
<body>
    <form action="nhapSoINThang.php" method="post">
        <div>Nhập số:
            <input type="text" name="n"/>
        </div>
        <div>
                </br>
                <input type="submit" value="in tháng">
        </div>
    </form>
</body>
</html>
<?php

function inPutMonth ($n) {
    // kiểm tra biến đầu vào
    if ($n == "")
        $n = 0;
    
    // in phương trình ra màn hình
    echo "</br>";
    switch ($n) {
        case 1:
            echo'tháng 1';
            break;
        case 2:
            echo'tháng 4';
            break;
        case 3:
            echo'tháng 3';
            break;
        case 4:
            echo'tháng 4';
            break;
        case 5:
            echo'tháng 5';
            break;
        case 6:
            echo'tháng 6';
            break;
        case 7:
            echo'tháng 7';
            break;
        case 8:
            echo'tháng 8';
            break;
        case 9:
            echo'tháng 9';
            break;
        case 10:
            echo'tháng 10';
            break;
        case 11:
            echo'tháng 11';
            break;
        case 12:
            echo'tháng 12';
            break;
        default:
            echo'không có tháng này';
            break;
        }
}

// gọi hàm kiem tra tam giac
// Sử dụng từ kháo $GLOBALS để đọc các biến toàn cầu và truyền vào hàm

    inPutMonth( $GLOBALS ['n'] );

?>
