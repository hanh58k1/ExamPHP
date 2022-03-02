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
    <form action="docchuSo.php" method="post">
        <div>Nhập số:
            <input type="text" name="n"/>
        </div>
        <div>
                </br>
                <input type="submit" value="in chữ số">
        </div>
    </form>
</body>
</html>
<?php
function convert_number_to_words($number) {
 
    $hyphen      = ' ';
    $conjunction = '  ';
    $separator   = ' ';
    $negative    = 'âm ';
    $decimal     = ' phẩy ';
    $dictionary  = array(
    0                   => 'Không',
    1                   => 'Một',
    2                   => 'Hai',
    3                   => 'Ba',
    4                   => 'Bốn',
    5                   => 'Năm',
    6                   => 'Sáu',
    7                   => 'Bảy',
    8                   => 'Tám',
    9                   => 'Chín',
    10                  => 'Mười',
    11                  => 'Mười một',
    12                  => 'Mười hai',
    13                  => 'Mười ba',
    14                  => 'Mười bốn',
    15                  => 'Mười năm',
    16                  => 'Mười sáu',
    17                  => 'Mười bảy',
    18                  => 'Mười tám',
    19                  => 'Mười chín',
    20                  => 'Hai mươi',
    30                  => 'Ba mươi',
    40                  => 'Bốn mươi',
    50                  => 'Năm mươi',
    60                  => 'Sáu mươi',
    70                  => 'Bảy mươi',
    80                  => 'Tám mươi',
    90                  => 'Chín mươi',
    100                 => 'trăm',
    1000                => 'ngàn',
    1000000             => 'triệu',
    1000000000          => 'tỷ',
    1000000000000       => 'nghìn tỷ',
    1000000000000000    => 'ngàn triệu triệu',
    1000000000000000000 => 'tỷ tỷ'
    );
     
    if (!is_numeric($number)) {
        echo"Hãy nhập số";
    return false;
    }

    
    if ($number < 0) {
    return $negative . convert_number_to_words(abs($number));
    }
     
    $string = $fraction = null; //fraction phần sau dấu phẩy// 
     
    if (strpos($number, '.') !== false) { //tìm trong số nếu có dấu chấm//
    list($number, $fraction) = explode('.', $number);// trả về giá trị bỏ dấu .
    }
     
    switch (true) {
        case $number < 21:
        $string = $dictionary[$number];
        break;
    case $number < 100:
        $tens   = ((int) ($number / 10)) * 10;
        $units  = $number % 10;
        $string = $dictionary[$tens];
        if ($units) {// số tròn chục
        $string .= $hyphen . $dictionary[$units];
        }
        break;
    case $number < 1000:
        $hundreds  = $number / 100;
        $remainder = $number % 100;
        $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
        if ($remainder) {
        $string .= $conjunction . convert_number_to_words($remainder);
        }
        break;
        default:

        $baseUnit = pow(1000, floor(log($number, 1000))); //floor làm tròn 
        $numBaseUnits = (int) ($number / $baseUnit); 1.223
        $remainder = $number % $baseUnit;
        $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];

        if ($remainder) {
        $string .= $remainder < 100 ? $conjunction : $separator;
        $string .= convert_number_to_words($remainder);
        }
        break;
        }
     
    if (null !== $fraction && is_numeric($fraction)) {
    $string .= $decimal;
    $words = array();

    foreach (str_split((string) $fraction) as $number) {
    $words[] = $dictionary[$number];
    }
    $string .= implode(' ', $words); //nối các phần tử thành 1 chuỗi
    }
     
    return $string;
    }

$result=convert_number_to_words($GLOBALS['n']);
echo $result;
?>
