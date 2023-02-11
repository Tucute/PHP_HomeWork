<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bài 3 PHP</title>
</head>
<body>
<form action="" method="post">
        <section>
            <Label>Nhập ngày: </Label>
            <input type="number" name="day" placehoder="Nhập ngày">
        </section>
        <section>
            <Label>Nhập tháng: </Label>
            <input type="number" name="month" placehoder="Nhập tháng">
        </section>
        <section>
            <Label>Nhập năm: </Label>
            <input type="number" name="year" placehoder="Nhập năm">
        </section>
        <section>
            <input type="submit" value="check">
        </section>
    </form>

    <?php
        if (isset($_POST['day']) && isset($_POST['month']) && isset($_POST['year'])) {
            $day=$_POST['day'];
            $month=$_POST['month'];
            $year=$_POST['year'];     
        }
        switch ($month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
                if ($day<=30) {
                    echo"Hôm sau là ngày ".($day+1)."tháng $month năm $year";
                }
                elseif ($day=31) {
                    echo"Hôm sau là ngày 1 tháng ".($month+1)." năm $year";
                }
                else {
                    echo"Ngày không hợp lệ";
                }
                break;
            case 12:
                if ($day<=30) {
                    echo"Hôm sau là ngày ".($day+1)."tháng $month năm $year";
                }
                elseif ($day=31) {
                    echo"Hôm sau là ngày 1 tháng 1 năm ".($year+1);
                }
                else {
                    echo"Ngày không hợp lệ";
                }
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                if ($day<=29) {
                    echo"Hôm sau là ngày ". ($day+1)." tháng $month năm$year";
                }
                elseif($day=30) {
                    echo"Hôm sau là ngày 1 tháng ".($month+1)." nam $year";
                }
                else {
                    echo"Ngày không hợp lệ";
                }
                break;
            case 2:
                if ( ($year%4==0 && $year%100!=0) || $year%400==0 ) {
                    if ($day<=28) {
                        echo"Hôm sau là ngày ".($day+1)." tháng $month năm $year";
                    }
                    elseif ($day=29) {
                        echo"Hôm sau là ngày 1 tháng ".($month+1)."năm $year";
                    }
                    else {
                        echo"Ngày không hợp lệ";
                    }
                }
                else {
                    if($day<=27) {
                        echo"Hôm sau là ngày ".($day+1)." tháng $month năm $year";
                    }
                    elseif($day=28) {
                        echo"Hôm sau là ngày 1 tháng ".($month+1)." năm $year";
                    }
                    else {
                        echo"Ngày không hợp lệ !";
                    }
                }
                break;
            default:
                echo "Ngày không hợp lệ";
                break;
        }
        
    ?>
</body>
</html>