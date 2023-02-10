
<!-- Bài 3 : Nhập ngày bất kỳ, trả lời ngày hôm sau là ngày mấy?				 -->
<?php
$ngay=20;$thang=1;$nam=2022;
switch($thang){
    case 1:
    case 3:
    case 5:
    case 7:
    case 9:
    case 11:
    $tday=31;
    break;
    case 4:
    case 6:
    case 8:
    case 10:
    case 12:
    $tday=30;
    break;
    case 2:
    $tday=28;
    break;
};
if($ngay<$tday && $ngay>0 && $thang>0 && $nam>0){
    $nngay=$ngay+1;
    echo "ngay hom sau cua ngay: $ngay/$thang/$nam la $nngay/$thang/$nam";  
};
?>