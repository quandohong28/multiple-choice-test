<?php
include "../model/excel.php";

// Sử dụng hàm để đọc dữ liệu từ một trang (worksheet) cụ thể bằng tên
$filename = 'accounts.xlsx'; // Thay thế bằng tên tệp Excel thực tế
$sheetName = 'Sheet1'; // Tên của trang cần đọc

$data = readDataFromExcelBySheetName($filename, $sheetName);
// echo '<pre>';
// var_dump($data);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <h4 class="text-center mt-5">Đọc dữ liệu từ file excel</h4>
        <div class="table-responsive p-5 m-5">
            <table class="table table table-bordered table-sm table-hover">
                <tr>
                    <?php foreach ($data[1] as $item) : ?>
                        <th class="p-3 text-center"><small><?= $item ?></small></th>
                    <?php endforeach ?>
                </tr>
                <?php foreach ($data as $items) : ?>
                    <?php if ($items !== $data[1]) : ?>
                        <tr>
                            <?php foreach ($items as $item) : ?>
                                <td class="p-3 text-center"><small><?= $item ?></small></td>
                            <?php endforeach ?>
                        </tr>
                    <?php endif ?>
                <?php endforeach ?>
            </table>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>