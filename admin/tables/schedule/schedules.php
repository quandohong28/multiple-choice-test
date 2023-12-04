<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách lịch thi</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <form method="post" role="form" class="filter-panel">
                <div class="row align-items-end me-1">
                    <div class="col-md-3 form-group">
                        <label>Sắp xếp theo</label>
                        <select name="filterByCategory" class="form-control form-control-sm"> DESC
                            <option value="id" selected>ID</option>
                            <option value="name_schedules">Tên lịch thi</option>
                            <option value="time_schedules">Thời gian bắt đầu</option>
                            <option value="quantity_schedules">Số lượng đề thi</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Cách sắp xếp</label>
                        <select name="filterByLetter" class="form-control form-control-sm">
                            <option value="a-z" selected>A-Z</option>
                            <option value="z-a">Z-A</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Tìm kiếm</label>
                        <input type="text" name="search" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-3 form-group ">
                        <div class="row">
                            <button name="filter" class="btn btn-sm btn-info me-3 col">
                                <i class="fa fa-fw fa-search fs-6 me-2"></i>
                                <span class="lg-hidden">Tìm kiếm</span>
                            </button>
                            <button type="reset" class="btn btn-sm btn-outline-dark col">
                                <i class="fa-regular fa-fw fa-window-restore"></i>
                                <span class="lg-hidden">Mặc định</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-primary btn-sm" data-bs-toggle="modal" href="#addSchedule" role="button"><i class="fa-regular me-2 fa-square-plus fa-lg"></i>Thêm lịch
                    thi</a>
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
                                <a class="btn btn-success btn-sm" href="?act=tables&data=schedule_detail&schedule_id=<?= $id?>"><i class="fa-solid fa-circle-info"></i></a>
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
        <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item disabled">
                <a class="page-link px-3">
                    <i class="fa-solid fa-caret-left"></i>
                </a>
            </li>
            <?php
            $currentURL = "index.php?act=tables&data=schedules";
            $amountPage = ceil(count(getAllSchedules()) / 10);
            for ($page = 1; $page <= $amountPage; $page++) :
            ?>
                <li class="page-item"><a class="page-link" href="<?= $currentURL . "&page=$page" ?>"><?= $page ?></a></li>
            <?php endfor; ?>
            <li class="page-item">
                <a class="page-link px-3" href="#">
                    <i class="fa-solid fa-caret-right"></i>
                </a>
            </li>
        </ul>
    </div>
    <!----Thêm lịch thi----->
    <?php include './modals/addschedulemodal.php' ?>
    <!----Sửa lịch thi----->
    <?php include './modals/editschedulemodal.php' ?>
</div>