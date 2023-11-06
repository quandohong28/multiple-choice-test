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
                            <th class="small p-2" scope="col">
                                <a href="?act=schedule&sortbyindex">
                                    <span class="me-2">STT</span>
                                    <i class="fa-solid fa-sort"></i>
                                </a>
                            </th>
                            <th class="small p-2" scope="col">
                                <a href="?act=schedule&sortbyindex">
                                    <span class="me-2">Tên</span>
                                    <i class="fa-solid fa-sort"></i>
                                </a>
                            </th>
                            <th class="small p-2" scope="col">
                                <a href="?act=schedule&sortbydate">
                                    <span class="me-2">Ngày bắt đầu</span>
                                    <i class="fa-solid fa-sort"></i>
                                </a>
                            </th>
                            <th class="small p-2" scope="col">
                                <a href="?act=schedule&sortbylocation">
                                    <span class="me-2">Ngày kết thúc</span>
                                    <i class="fa-solid fa-sort"></i>
                                </a>
                            </th>
                            <th class="small p-2" scope="col">
                                <a href="?act=schedule&sortbyexam">
                                    <span class="me-2">Thời gian thi</span>
                                    <i class="fa-solid fa-sort"></i>
                                </a>
                            </th>
                            <th class="small p-2" scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < 10; $i++) : ?>
                            <tr class="">
                                <td><?= $i ?></td>
                                <td class="small" scope="row">R1C1</td>
                                <td class="small" scope="row">
                                    <span>Thứ Năm</span><br>
                                    <span>Ngày 23/11/2002</span>
                                </td>
                                <td class="small" scope="row">R1C1</td>
                                <td class="small" scope="row">R1C1</td>
                                <td class="small" scope="row" class="">
                                    <a href="" class="badge bg-primary">Xem chi tiết</a>
                                </td>
                            </tr>

                        <?php endfor ?>
                    </tbody>
                </table>
                <!-- pagination -->
                <nav>
                    <?php include "./user/components/pagination.php" ?>
                </nav>
            </div>

        </section>
    </div>
</section>