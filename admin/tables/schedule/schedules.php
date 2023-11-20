<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách lịch thi</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <?php include 'tables/components/filter.php' ?>
        </div>
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#addSchedule" role="button">
                    <i class="fa-regular fa-fw fa-square-plus fa-lg"></i>
                    <span>Tạo mới lịch thi</span>
                </a>
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
                        <th scope="col">Tên lịch thi</th>
                        <th scope="col">Thời gian bắt đầu</th>
                        <th scope="col">Thời gian làm bài</th>
                        <th scope="col">Số lượng đề thi</th>
                        <th scope="col">Số lượng thí sinh</th>
                        <th scope="col">Mã lịch thi</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên lịch thi</th>
                        <th scope="col">Thời gian bắt đầu</th>
                        <th scope="col">Thời gian làm bài</th>
                        <th scope="col">Số lượng đề thi</th>
                        <th scope="col">Số lượng thí sinh</th>
                        <th scope="col">Mã lịch thi</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($schedules as $schedule) :
                        extract($schedule);
                        list($start_date, $start_time) = explode(" ", $time_start);
                    ?>
                        <tr class="">
                            <td class="align-middle">
                                <?= $id ?>
                            </td>
                            <td class="align-middle">
                                <?= $name ?>
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
                                <?= $exam_time ?>
                            </td>
                            <td class="align-middle">
                                <?= $number_exam ?>
                            </td>
                            <td class="align-middle">
                                R1C3
                            </td>
                            <td class="align-middle">

                            </td>
                            <td class="align-middle">
                                <a class="btn btn-success btn-sm" href="?act=tables&data=schedule_detail"><i class="fa-solid fa-circle-info"></i></a>
                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editScheduleModal" data-value='<?= json_encode($schedule) ?>'>
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm" href="?act=tables&data=del_schedule&id=<?= $id; ?>"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
        <?php include 'tables/components/pagination.php' ?>
    </div>
    <!----Thêm lịch thi----->
    <?php include './modals/addschedulemodal.php' ?>
    <!----Sửa lịch thi----->
    <?php include './modals/editschedulemodal.php' ?>
</div>