
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
    .table {
        text-align: center;
        width: 900px;
        align-items: center;
    }

    .add {
        padding: 10px;
        width: 900px;
        display: flex;
        justify-content: right;
        align-items: center;
    }

    .add h5 {
        margin-right: 20px;
    }

    .add button a {
        color: white;
        font-weight: 700;
    }

    a {
        text-decoration: none;
        color: #000;
    }
</style>

<body>
    <div class="container">
        <h2>Danh sách sản phẩm</h2>
        <div class="add">
            <h5>Thêm sản phẩm </h5>
            <button class="btn btn-primary" type="submit" name="submit">
                <a href="http://localhost/Demo1/conect_database/them.php">Thêm +</a>
            </button>
        </div>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Mã SP</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá tiền</th>
                    <th>Số lượng</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $connect = mysqli_connect("localhost","root","","tu_database");
                    $sql = mysqli_query($connect, "SELECT*FROM sanpham");
                    while ($row= mysqli_fetch_assoc($sql)) {

                ?>
                        <tr>
                            <td>
                                <?php echo $row["maSP"]; ?>
                            </td>
                            <td>
                                <?php echo $row["tenSP"]; ?>
                            </td>
                            <td>
                                <?php echo $row["Gia"]; ?>
                            </td>
                            <td>
                                <?php echo $row["SoLuong"]." ".$row["Donvi"]; ?>
                            </td>
                            <td>
                                <img src="<?php echo $row["Anh"]; ?>" alt="" width="100px" height="70px">
                            </td>
                            <td>
                                <button class='btn btn-warning'>
                                    <a href="http://localhost/Demo1/conect_database/sua.php?id=<?php echo $row["id"] ?>">Edit</a>
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Delete
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Cảnh cáo</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="https://www.clipartmax.com/png/middle/248-2486494_tam-gi%C3%A1c-c%E1%BA%A3nh-b%C3%A1o.png"
                                                    style="padding-right: 20px;" width="120px" height="70px">
                                                Bạn có chắc muốn xóa sản phẩm này
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                <button type="button" class="btn btn-primary">
                                                    <a href="http://localhost/Demo1/conect_database/xoa.php?id=<?php echo $row["id"] ?>"> Đồng ý</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <?php
                    }
                ?>
            </tbody>
        </table>

    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>