<html>
    <head>
        <style>
            #year {
                display: none;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_POST['month'])) {
            $month=$_POST['month'] ;
            switch ($month) {
                case 1:
                    case 4:
                    case 6:
                    case 8:
                    case 11:
                    case 12:
                    echo"tháng $month có 31 ngày";break;
                    case 3:
                    case 5:
                    case 7:
                    case 9:
                    case 10:
                    echo"tháng $month có 30 ngày";break;
                    // case 2:
                    //     if ($nam%4==0 && $nam%100==0){
                    //         echo"tháng $month có 28 ngày";break;
                    //     }else {
                    //         echo"tháng $month có 29 ngày";break;
                    //     }
            } 
        }
        ?>
        <form method="post" action="" oninput="if (month.value=='2') {
            document.getElementById('year').style.display='block'; year.focus();} else {
            document.getElementById('year').style.display='none';
            }">
            <section>
                <label for=""> Mời bạn nhập một tháng bất kì: </label>
                    <input type="number" name="month" min="1" max="12">
                    <input type="submit" value="check">
            </section>
            <section id="year">
                <label>Mời bạn nhập năm: </label>
                <input type="number" name="year">
            </section>
        </form>
    </body>
</html>