
<!-- $a = array(3,8);
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
echo "Số nhỏ nhất trong mảng là: $min ở vị trí số $index_min"; -->

<?php
   $array = [ 9 , 2 ,3 ,6 ,40 ,40 ,40 ,10, 2];
    $max=$array[0];
    $min=$array[0];
    for ($i =0; $i < count($array); $i++)
   {
         if ($array[$i] > $max){
            $max = $array[$i];
         }
         if ($array[$i] < $min){
            $min = $array[$i];
         }
      }
      $str_max='';
      $str_min='';
   for ($i = 0; $i < count($array); $i++)
   {
         if ($array[$i] == $max){
            $position_max[] = $i;
            $str_max =$str_max.(string)$i.'  ';
         }
         if ($array[$i] == $min){ 
            $position_min[] = $i;
            $str_min =$str_min.(string)$i.'  ';
         }
      }
 
   echo "Giá trị lớn nhất là : $max và nằm tại các vị trí : $str_max <br>";
   echo "Giá trị nhỏ nhất là : $min và nằm tại các vị trí : $str_min";
?>