<section class="bg-primary-gradient p-5 rounded">
    <div class="row">
        <div class="col-md-8 col-xl-6 text-center mx-auto mb-5">
            <h3 class="fw-bold">Hỗ trợ</h3>
        </div>
    </div>

    <div class="row row-cols-2 justify-content-between min-vh-100">
        <!-- filter -->
        <div class="col-3 filter px-5 py-3 mb-5">
            <h6>Chủ đề</h6>
            <ul class="">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>
        </div>

        <div class="col-9 filter px-5 py-3 bg-white shadow rounded">
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

        </div>
    </div>
</section>