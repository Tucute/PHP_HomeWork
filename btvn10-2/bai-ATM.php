<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        form {
            border: 3px solid #FFB6C1;
            width: 600px;
        }
        .section-top {
            display: flex;
            padding: 15px;
        }
        .section-top-right {
            margin-left: 20px;
        }
        h2 {
            text-align: center;
            color: red;
            font-weight: 800;
            margin-top: 0px;
        }
        table {
            width: 100%;
        }
        tbody {
            text-align: center;
        }
        .tong {

        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="section-top">
                <div class="img">
                    <img src="https://img.dantocmiennui.vn/t620/uploaddtmn//2016/1/25/atm-2-1.jpg" alt="" width="200px" height="130px">
                </div>
                <div class="section-top-right">
                    <h2>Mô phỏng máy ATM</h2>
                    <p>Vui lòng nhập vào số tiền quý khách muốn thực hiện giao dịch</p>
                    <div class="content">
                        <input type="number" style="width:20em" name="number">
                        <input type="submit" value="Rút tiền">
                    </div>
                </div>
            </div>
            <div class="section-bottom">
                <table>
                    <thead>
                    <tr>
                        <th>Mệnh giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    </thead>
                    <tbody>
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

            echo "<tr>";
            echo " <td> Mệnh giá 500.000 </td>" ;   
            echo " <td> $sl5tram </td>";
            echo " <td>".number_format(500000*$sl5tram)."</td>"; 
            echo "</tr>";
            echo "<tr>";
            echo " <td> Mệnh giá 200.000  </td> ";
            echo " <td> $sl2tram </td> ";
            echo " <td>".number_format(200000*$sl2tram)."</td>"; 
            echo "</tr>";
            echo "<tr>";
            echo " <td> Mệnh giá 100.000 </td>";
            echo " <td> $sl1tram </td>";
            echo " <td>".number_format(100000*$sl1tram)."</td>"; 
            echo "</tr>";
            echo "<tr>";
            echo " <td> Mệnh giá 50.000 </td>";
            echo " <td> $sl5chuc  </td>";
            echo " <td>".number_format(50000*$sl5chuc)."</td>"; 
            echo "</tr>";
            echo "<tr>";
            echo " <td> Mệnh giá 20.000 </td>";
            echo " <td> $sl2chuc  </td>";
            echo " <td>".number_format(20000*$sl2chuc)."</td>"; 
            echo "</tr>";
            echo "<tr>";
            echo " <td> Mệnh giá 10.000 </td>";
            echo " <td> $sl1chuc  </td>";
            echo " <td>".number_format(10000*$sl1chuc)."</td>"; 
            echo "</tr>";
            // echo "<br>";
            // echo"Mệnh giá: 20.000     Số lượng: $sl2chuc   Tổng số tiền: ".number_format(20000*$sl2chuc); 
            // echo "<br>";
            // echo"Mệnh giá: 10.000     Số lượng: $sl1chuc  Tổng số tiền: ".number_format(10000*$sl1chuc); 
            // echo "<br>";
            echo "<tr>";
            echo "</tr>";
            echo "<tr>";
            echo "<td></td>";
            echo "<td></td>";
            echo " <td> Tổng số tiền là: ".number_format($Tong)."</td>";
            echo "</tr>";
        }
    ?>
                    </tbody>
                    
                </table>
                
            </div>
        </form>
    </div>
</body>
</html>