<section class="bg-gradient-light p-5 rounded-3 mb-5 min-vh-100">
    <h5 class="text-dark mb-5">Danh sách kết quả thi</h5>

    <div class="row mb-3">
        <div class="col">
        </div>
        <div class="col">
            <?php include 'components/data_export.php' ?>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID bài thi</th>
                <th scope="col">Loại bài thi</th>
                <th scope="col">Họ và tên thí sinh</th>
                <th scope="col">Điểm</th>
                <th scope="col">Thời gian bắt đầu</th>
                <th scope="col">Thời gian làm bài</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <?php foreach ($results as $result) :
            extract($result);
            list($start_date, $start_time) = explode(" ", $time_start);
            $exam_time_format = date('i:s', strtotime($exam_time));
        ?>
            <tbody>
                <tr class="">
                    <td class="align-middle">
                        <?= $id ?>
                    </td>
                    <td class="align-middle">
                        <?= $exam_code ?>
                    </td>
                    <td class="align-middle">
                        <?= $exam_type ?>
                    </td>
                    <td class="align-middle">
                        <?= $fullname ?>
                    </td>
                    <td class="align-middle">
                        <?= $points ?>
                    </td>
                    <td class="align-middle">
                        <span>
                            <?= 'Ngày : ' . $start_date ?>
                        </span>
                        <br>
                        <span>
                            <?= 'Giờ : ' . $start_time ?>
                        </span>
                    </td>
                    <td class="align-middle">
                        <?= $exam_time_format ?>
                    </td>
                    <td class="align-middle">
                        <a class="btn btn-success btn-sm mx-3" href="?act=tables&data=result_detail&id=<?= $id ?>"><i class="fa-solid fa-circle-info"></i></a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
    <nav>
        <?php include '../components/pagination.php'?>
    </nav>

</section>