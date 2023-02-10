<!DOCTYPE html>
<html>
<body>

<?php
$array = [4,2,4,21,9,65,3,1,5,45,33,12];
$min=$array[0];
$max=$array[0];
for ($i = 0; $i < count($array); $i++)
{   
        if ($array[$i] > $max){
            $max = $array[$i];
        }
        if ($array[$i] < $min){
            $min = $array[$i];
        }
}
echo "Số lớn nhất là: $max,  Số nhỏ nhất là: $min";
?>

</body>
</html>