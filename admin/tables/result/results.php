<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách kết quả thi</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <?php include 'tables/components/filter.php' ?>
        </div>
        <div class="row mb-3">
            <div class="col">
            </div>
            <div class="col">
                <?php include 'tables/components/data_export.php' ?>
            </div>
        </div>
        <div class="table-responsive small">
            <table class="table table-bordered table-hover">
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
                <tfoot>
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
                </tfoot>
                <tbody>
                    <?php foreach ($results as $result) :
                        extract($result);
                        list($start_date, $start_time) = explode(" ", $time_start);
                    ?>
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
                                <?= ($exam_time) ? $exam_time : '0' ?>
                            </td>
                            <td class="align-middle col-1">
                                <a class="btn btn-success btn-sm mx-3" href="?act=tables&data=result_detail&id=<?= $id ?>"><i class="fa-solid fa-circle-info"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php include 'tables/components/pagination.php' ?>
    </div>
</div>