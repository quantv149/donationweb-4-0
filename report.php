<?php
$maychu = "localhost";
$tenDangNhap = "root";
$matKhau = "";
$database = "report";

$connect = new mysqli($maychu, $tenDangNhap, $matKhau, $database);
mysqli_set_charset($connect, "utf8");

$truyvan = "SELECT * FROM reports";
$data = mysqli_query($connect, $truyvan);

$temparray = array();
if (mysqli_num_rows($data) >= 1) {
    while ($row = mysqli_fetch_assoc($data)) {
        $temparray[] = $row;
    } 
}

echo json_encode($temparray);

?>