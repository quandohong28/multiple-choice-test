<section><!-- Start: Features Cards -->
    <div class="col-md-8 col-xl-6 text-center mx-auto">
        <h3 class="fw-bold">Kết quả bài thi</h3>
    </div>
    <div class="container bg-primary-gradient p-lg-5 p-sm-2">
        <div class="general-inf-user filter p-5 bg-white shadow rounded mb-5">
            <div class="row gap-5 justify-content-center align-items-center">
                <div class="col-md-2">
                    <img src="<?= $avatarPath . $_SESSION['user']['avatar'] ?>" style="width: 150px; height: 150px;" class="rounded-circle">
                </div>
                <div class="col-md-9">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="col">
                            <div class="col-md-12 pb-1 border-bottom">
                                <h5 class="text-primary text-uppercase">Đỗ Hồng Quân</h5>
                                <p>Bài thi: Tên bài thi</p>
                                <p class="small">Hình thức: Thi thử</p>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="col d-flex gap-3">
                                    <p class="badge bg-primary">Điểm: 8,9</p>
                                    <p class="badge bg-success">Số câu đúng: 12</p>
                                    <p class="badge bg-danger">Số câu sai: 43</p>
                                    <p class="badge bg-dark">Thời gian làm bài: 00:30:03</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-2">
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="col">
                    <ul class="list-group" style="list-style-type: none;">
                        <li>
                            <div class="filter px-3 py-3 mb-4 bg-white border rounded">
                                <div class="question p-3 mb-2" style="background-color: #5c5c5c10; border-radius: .3rem">
                                    <strong>Câu 1: Đất nước nào có diện tích lớn nhất thế giới?</strong>
                                </div>
                                <ul class="p-0 m-0" style="list-style-type: none;">
                                    <?php for ($j = 0; $j < 4; $j++) : ?>
                                        <li class="answer d-flex align-items-center gap-3 mb-3">
                                            <input type="checkbox" id="answer" name="answer">
                                            <label class="text m-0 small" for="answer">Việt Nam</label>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                                <div class="text-end">
                                    <span class="badge bg-light text-dark">1/1</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            <?php endfor; ?>
        </div>
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
    </div>

</section>