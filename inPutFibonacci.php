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
    <title>in so fibonacci</title>
</head>
<body>
    <form action="fibonaci.php" method="post">
        <div>Nhập số:
            <input type="text" name="n"/>
        </div>
        <div>
                </br>
                <input type="submit" value="in số fibonacci">
        </div>
    </form>
</body>
</html>
<?php
function fibonacci($n) {
    $f0 = 0;
    $f1 = 1;
    $fn = 1;
 
    if ($n < 0) {
        return - 1;
    } else if ($n == 0 || $n == 1) {
        return $n;
    } else {
        for($i = 2; $i < $n; $i ++) {
            $f0 = $f1;
            $f1 = $fn;
            $fn = $f0 + $f1;
        }
    }
    return $fn;
}
 
echo ("".$GLOBALS['n']. " số đầu tiên của dãy số fibonacci: ");
for($i = 0; $i < $GLOBALS['n']; $i ++) {
    echo (fibonacci ( $i ) . " ,");
}
?>
