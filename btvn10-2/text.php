<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="number">
        <input type="submit" value="check">
    </form>

    <?php
        if (isset($_POST['number'])) {
            $coins = $_POST['number'];

            $temp=$coins/10000;

            $dvchuc=$temp%10;
            $temp=$temp/10;
            $dvtram= $temp%10;
            $temp=$temp/10; 
            $dvtrieu= $temp%10;

            $sl5tram=0;
            $sl2tram=0;
            $sl1tram=0;
            $sl5chuc=0;
            $sl2chuc=0;
            $sl1chuc=0;

            $sl5tram=$dvtrieu/0.5;

            switch ($dvtram) {
                case 1:
                    $sl1tram += 1;
                    break;
                case 2:
                    $sl2tram += 1;
                    break;
                case 3:
                    $sl1tram +=1;
                    $sl2tram += 1;
                    break;
                case 4:
                    $sl2tram += 2;
                    break;
                case 5:
                    $sl5tram += 1;
                    break;
                case 6:
                    $sl5tram += 1;
                    $sl1tram +=1;
                    break;
                case 7:
                    $sl5tram += 1;
                    $sl2tram +=1;
                    break;
                case 8:
                    $sl5tram += 1;
                    $sl2tram +=1;
                    $sl1tram +=1;
                    break;
                case 9:
                    $sl5tram += 1;
                    $sl2tram +=2;
                    break;
            }
            switch ($dvchuc) {
                case 1:
                    $sl1chuc += 1;
                    break;
                case 2:
                    $sl2chuc += 1;
                    break;
                case 3:
                    $sl1chuc +=1;
                    $sl2chuc += 1;
                    break;
                case 4:
                    $sl2chuc += 2;
                    break;
                case 5:
                    $sl5chuc += 1;
                    break;
                case 6:
                    $sl5chuc += 1;
                    $sl1chuc +=1;
                    break;
                case 7:
                    $sl5chuc += 1;
                    $sl2chuc +=1;
                    break;
                case 8:
                    $sl5chuc += 1;
                    $sl2chuc +=1;
                    $sl1chuc +=1;
                    break;
                case 9:
                    $sl5chuc += 1;
                    $sl2chuc +=2;
                    break;
            }
            $Tong= (500*$sl5tram + 200*$sl2tram + 100*$sl1tram + 50*$sl5chuc +  20*$sl2chuc + 10*$sl1chuc) * 1000;
            echo"M???nh gi??: 500.000     S??? l?????ng: $sl5tram   T???ng s??? ti???n: ".number_format(500000*$sl5tram); 
            echo "<br>";
            echo"M???nh gi??: 200.000     S??? l?????ng: $sl2tram   T???ng s??? ti???n: ".number_format(200000*$sl2tram); 
            echo "<br>";
            echo"M???nh gi??: 100.000    S??? l?????ng: $sl1tram   T???ng s??? ti???n: ".number_format(100000*$sl1tram); 
            echo "<br>";
            echo"M???nh gi??: 50.000     S??? l?????ng: $sl5chuc   T???ng s??? ti???n: ".number_format(50000*$sl5chuc); 
            echo "<br>";
            echo"M???nh gi??: 20.000     S??? l?????ng: $sl2chuc   T???ng s??? ti???n: ".number_format(20000*$sl2chuc); 
            echo "<br>";
            echo"M???nh gi??: 10.000     S??? l?????ng: $sl1chuc  T???ng s??? ti???n: ".number_format(10000*$sl1chuc); 
            echo "<br>";
            echo "T???ng s??? ti???n l??: ".number_format($Tong);
        }
    ?>
</body>
</html>