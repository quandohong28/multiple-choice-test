<section class="bg-primary-gradient p-5"><!-- Start: Features Cards -->
    <!-- filter -->
    <div class="filter px-5 py-3 mb-5 bg-white shadow rounded">
        <form action="">
            <div class="mb-3">
                <label for="" class="form-label mb-3"><i class="fa-regular fa-clock me-3"></i>Thời gian</label>
                <select class="form-select form-select-sm rounded-0" name="" id="">
                    <option selected>7 ngày tới</option>
                    <option value="">30 ngày tới</option>
                    <option value="">90 ngày tới</option>
                    <option value="">7 ngày trước</option>
                    <option value="">30 ngày trước</option>
                    <option value="">90 ngày trước</option>
                </select>
                <small id="helpId" class="text-muted">Lựa chọn thời gian hiển thị lịch thi</small>
            </div>
        </form>
    </div>

    <div class="filter px-5 py-3 bg-white shadow rounded">
        <?php include "components/data_export.php" ?>

        <section class="mb-5">
            <span><i class="fa-solid fa-calendar-days me-3"></i></span>
            <span>Lịch thi</span>
            <hr>
        </section>

        <section class="text-sm">
            <div class="table-responsive">
                <table class="table table-sm table-bordered align-middle text-center mb-5">
                    <thead>
                        <tr>
                            <th class="small p-2">
                                <a href="?act=schedule&sortbyindex">
                                    <span class="me-2">STT</span>
                                    <i class="fa-solid fa-sort"></i>
                                </a>
                            </th>
                            <th class="small p-2">
                                <a href="?act=schedule&sortbyindex">
                                    <span class="me-2">Tên</span>
                                    <i class="fa-solid fa-sort"></i>
                                </a>
                            </th>
                            <th class="small p-2">
                                <a href="?act=schedule&sortbydate">
                                    <span class="me-2">Thời gian bắt đầu</span>
                                    <i class="fa-solid fa-sort"></i>
                                </a>
                            </th>
                            <th class="small p-2">
                                <a href="?act=schedule&sortbydate">
                                    <span class="me-2">Thời gian làm bài</span>
                                    <i class="fa-solid fa-sort"></i>
                                </a>
                            </th>
                            <th class="small p-2">
                                <a href="?act=schedule&sortbydate">
                                    <span class="me-2">Số lượng đề thi</span>
                                    <i class="fa-solid fa-sort"></i>
                                </a>
                            </th>
                            <th class="small p-2">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($schedules as $schedule) : extract($schedule);
                            list($start_date, $start_time) = explode(" ", $time_start);
                            $exam = getExamsByScheduleId($id);
                        ?>
                            <tr class="">
                                <td><?= $id ?></td>
                                <td class="small" scope="row"><?= $name ?></td>
                                <td class="small" scope="row">
                                    <span>Ngày: <?= $start_date ?></span><br>
                                    <span>Thời gian: <?= $start_time ?></span>
                                </td>
                                <td class="small" scope="row">
                                    <?= $exam_time ?> Phút
                                </td>
                                <td class="small" scope="row">
                                    <?= $number_exam ?> Phút
                                </td>
                                <td class="small" class="">
                                    <a class="badge bg-info px-3 py-2" type="button" data-bs-toggle="modal" data-bs-target="#scheduledeatilmodal" data-bs-value='<?= json_encode($exam) ?>'>
                                        <i class="fa-solid fa-circle-info fa-xl me-2"></i>
                                        <span>Chi tiết</span>
                                    </a>

                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <!-- pagination -->
                <nav>
                    <?php include "components/pagination.php" ?>
                </nav>
            </div>

        </section>
    </div>
</section>

<?php include 'scheduledeatilmodal.php' ?>

<!-- Button trigger modal -->

<!-- Modal -->