<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    

    <div class="section2" id="show2">
        <?php
            $user=array("tu"=>"tu2002","minh"=>"minh123456","quang"=>"quang123","xuan"=>"xuancute123");
        ?>
        <h1>Danh sách các thành viên</h1>
        <table border="1px solid black">
            <th>
                <tr>
                    <td>STT</td>
                    <td>Tên tài khoản</td>
                    <td>Mật khẩu</td>
                </tr>
            </th>
            <tbody>
                <?php 
                $i=1;
                    foreach($user as $name => $password) {
                        echo"<tr>";
                        echo"<td> $i </td>";
                        echo"<td> $name </td>";
                        echo"<td> $password </td>";
                        $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>