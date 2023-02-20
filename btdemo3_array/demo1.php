<h1>Dictionary</h1>
<form action="" method="post">
    Từ cần tra: 
    <input type="text" name="word" value="<?php if(isset($_POST['word'])) echo $_POST['word'] ?>"> <br>
    <input type="submit" name="btn" value="Tra từ">
    Kết quả: 
    <?php
    if (isset($_POST['btn'])) {
        $word = $_POST['word'];
        $result='';
        $dictionary=array("orange" => "cam","lemon" => "chanh","apple" => "táo","watermelon" => "dưa hấu");
        foreach ($dictionary as $english => $vietnamese) {
            
            if ($english === $word) {
            $result = $vietnamese;
            }
        //strtolower($word): về chữ thường.
        //strtoupper($word): thành chữ hoa..
        elseif ($english === strtolower($word)) {
            $result = $vietnamese;
        }
        }
        if ($result == '') {
            echo "Không tìm thấy từ cần tra.";
        }
        else {
            echo "$result";
        }
    }
    ?>
</form>

<!-- <?php
// $user=array("aquang" => "123","DeTu" => "ttt","xuanLe" => "333","anhMinh" => "456");
// $i=1;
// foreach ($user as $u => $p) {
//     echo $i." user: $u -- pas: $p <br>";
//     $i++; }
?> -->