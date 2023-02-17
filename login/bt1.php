<?php
$a = array(3,8);
$max = $a[0];
$min = $a[0];
$index_max = 0;
$index_min = 0;
for ($i=1; $i < count($a) ; $i++) { 
    if ($max<$a[$i]) {
        $max = $a[$i];
        $index_max = $i;
    }
    if ($min > $a[$i]) {
        $min = $a[$i];
        $index_min = $i;
    }
}
echo "Số lớn nhất trong mảng là: $max ở vị trí số $index_max <br>";
echo "Số nhỏ nhất trong mảng là: $min ở vị trí số $index_min";