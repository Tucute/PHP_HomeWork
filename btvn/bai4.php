<!-- <!--bai4: nhập điểm tb của một sinh viên cho biết sinh viên đó sếp loại gì, biết
 (từ 9.0:xuất sắc :;8.0-9.0; giỏi;7.0-8.0;khá;5.0-7.0;trung bình;0-5.0 yếu kém.) -->

<html>
    <body>
    <?php
    echo "Nhap vao mot gia tri bat ky: ";
    $data = fgets(fopen("php://D:\xampp\htdocs\Demo1\btvn\bai2.php","r")) ;
    echo "Ban vua nhap vao gia tri:".$data ;

    $diem = 8;
    if ($diem<5) {
        echo "Học sinh yếu";
    }
    elseif ($diem<7 && $diem>=5) {
        echo "Học sinh trung bình";
    }
    elseif ($diem>=7 && $diem<8) {
        echo "Học sinh khá";
    }
    elseif ($diem>=8 && $diem<9) {
        echo "Học sinh giỏi";
    }
    else {
        echo "Học sinh xuất sắc";
    }
?>
    </body>
</html>