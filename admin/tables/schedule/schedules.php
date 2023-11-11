<section class="bg-light p-5 rounded-3 mb-5 min-vh-100">
    <h3 class="text-dark text-center mb-5">Danh sách lịch thi</h3>

    <a class="btn btn-sm btn-info mb-2" href="?act=tables&data=add_schedule" data-toggle="modal"
        data-target="#addScheduleModal">Thêm lịch thi</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên lịch thi</th>
                <th scope="col">Thời gian bắt đầu</th>
                <th scope="col">Thời gian kết thúc</th>
                <th scope="col">Thời gian làm bài</th>
                <th scope="col">Số lượng đề thi</th>
                <th scope="col">Số lượng thí sinh</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <?php foreach ($schedules as $schedule):
            extract($schedule);
            ?>
            <tbody>
                <tr class="">
                    <td>
                        <?= $id ?>
                    </td>
                    <td>
                        <?= $name ?>
                    </td>
                    <td>
                        <?= $time_start ?>
                    </td>
                    <td>
                        <?= $time_exp ?>
                    </td>
                    <td>
                        <?= $exam_time ?>
                    </td>
                    <td>
                        <?= $number_exam ?>
                    </td>
                    <td>
                        <?= $time_start ?>
                    </td>
                    <td class="d-flex gap-1">
                        <a class="btn btn-success btn-sm" href="?act=tables&data=schedule_detail"><i
                                class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-warning btn-sm" href="?act=tables&data=edit_schedule" data-toggle="modal"
                            data-target="#editScheduleModal"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm"
                            href="?act=tables&data=del_schedule"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
    </table>
    <nav>
        <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item disabled">
                <a class="page-link px-3">
                    <i class="fa-solid fa-caret-left"></i>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link px-3" href="#">
                    <i class="fa-solid fa-caret-right"></i>
                </a>
            </li>
        </ul>
    </nav>

    <!----Thêm lịch thi----->
    <?php include './modals/addschedulemodal.php' ?>
    <!----Sửa lịch thi----->
    <?php include './modals/editschedulemodal.php' ?>



</section>