<section class="bg-primary-gradient p-5 rounded">
    <!-- filter -->
    <div class="filter px-5 py-3 mb-5 bg-white shadow rounded">
        <form action="">
            <div class="mb-3">
                <label for="" class="form-label mb-3">
                    <i class="fa-regular fa-clock me-3"></i>
                    Thời gian
                </label>
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

    <section class="filter px-5 py-3 bg-white shadow rounded">
        <?php include "components/data_export.php" ?>
        <span><i class="fa-solid fa-table me-3"></i></span>
        <span>Bảng điểm chung</span>
        <hr>
        <table class="table table-sm table-bordered align-middle text-center my-5">
            <thead>
                <tr>
                    <th class="small p-2" scope="col">
                        <a href="?act=result&sort=exam_id">
                            Mã đề thi
                            <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                        </a>
                    </th>
                    <th class="small p-2" scope="col">
                        <a href="?act=result&sort=points">
                            Điểm
                            <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                        </a>
                    </th>
                    <th class="small p-2" scope="col">
                        <a href="?act=result&sort=type">
                            Hình thức
                            <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                        </a>
                    </th>
                    <th class="small p-2" scope="col">
                        <a href="?act=result&sort=time_start">
                            Thời gian bắt đầu
                            <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                        </a>
                    </th>
                    <th class="small p-2" scope="col">
                        <a href="?act=result&sort=exam_time">
                            Thời gian làm bài
                            <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                        </a>
                    </th>
                    <th class="small p-2" scope="col">Chức năng</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="small p-2" scope="col">
                        <a href="?act=result&exam_id">
                            Mã đề thi
                            <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                        </a>
                    </th>
                    <th class="small p-2" scope="col">
                        <a href="?act=result&sort=points">
                            Điểm
                            <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                        </a>
                    </th>
                    <th class="small p-2" scope="col">
                        <a href="?act=result&sort=type">
                            Hình thức
                            <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                        </a>
                    </th>
                    <th class="small p-2" scope="col">
                        <a href="?act=result&sort=time_start">
                            Thời gian bắt đầu
                            <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                        </a>
                    </th>
                    <th class="small p-2" scope="col">
                        <a href="?act=result&sort=exam_time">
                            Thời gian làm bài
                            <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                        </a>
                    </th>
                    <th class="small p-2" scope="col">Chức năng</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($results as $result) : ?>
                    <tr>
                        <td class="py-3"><?= $result['exam_code'] ?></td>
                        <td class="py-3"><?= $result['points'] ?></td>
                        <td class="py-3"><?= $result['type'] ?></td>
                        <td class="py-3"><?= $result['time_start'] ?></td>
                        <td class="py-3"><?= $result['exam_time'] ?></td>
                        <td class="small" class="">
                            <a href="?act=result_detail&result_id=<?= $result['id'] ?>" class="badge bg-info p-2">
                                <i class="fa-solid fa-circle-info fa-xl me-2"></i>
                                Chi tiết
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>


            </tbody>
        </table>

        <!-- pagination -->
        <?php include "components/pagination.php" ?>

    </section>
</section>