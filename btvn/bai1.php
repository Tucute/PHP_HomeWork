<!-- bài2: nhập ngày bất kỳ (gồm ba biến ngày,tháng,năm)kiểm tra tính hợp lệ của ngày vừa nhập -->
 <!--bai4: nhập điểm tb của một sinh viên cho biết sinh viên đó sếp loại gì, biết
 (từ 9.0:xuất sắc :;8.0-9.0; giỏi;7.0-8.0;khá;5.0-7.0;trung bình;0-5.0 yếu kém.)
 bai1: nhập tháng bất kỳ ,trả lời  tháng đó có bao nhiêu ngày-->
 <!-- bài1 -->
 <?php
 $thang=1;
 $nam=2017;
 switch($thang){
    
    case 1:
    case 4:
    case 6:
    case 8:
    case 11:
    case 12:
    echo"tháng có 31 ngày";break;
    case 3:
    case 5:
    case 7:
    case 9:
    case 10:
    echo"tháng có 30 ngày";break;
    case 2:
        if ($nam%4==0 && $nam%100==0){
            echo"tháng có 28 ngày";break;
        }else {
            echo"tháng có 29 ngày";break;
        }
    
 };
 ?>