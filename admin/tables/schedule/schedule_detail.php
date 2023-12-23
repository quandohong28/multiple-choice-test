<!-- Danh sách đề thuộc một lịch thi -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chi tiết lịch thi - Danh sách đề thi</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <form method="post" role="form" class="filter-panel">
                <div class="row align-items-end me-1">
                    <div class="col-md-3 form-group">
                        <label>Sắp xếp theo</label>
                        <select name="filterByCategory" class="form-control form-control-sm"> DESC
                            <option value="id" selected>ID</option>
                            <option value="exam_code">Mã đề thi</option>
                            <option value="category">Chuyên mục</option>
                            <option value="types_exam">Loại đề thi</option>
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
                                <a href="index.php?act=tables&data=exams" class="lg-hidden text-decoration-none">Mặc định</a>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row mb-3">
            <?php include '../components/filter.php' ?>
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
                        <th scope="col">Mã đề thi</th>
                        <th scope="col">Lịch thi</th>
                        <th scope="col">Chuyên mục</th>
                        <th scope="col">Hình thức</th>
                        <th scope="col">Số lượng câu hỏi</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Mã đề thi</th>
                        <th scope="col">Lịch thi</th>
                        <th scope="col">Chuyên mục</th>
                        <th scope="col">Hình thức</th>
                        <th scope="col">Số lượng câu hỏi</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($exams as $exam) :
                        $results = getResultsByExamId($exam['exam_id']);
                        foreach ($results as &$result) {
                            $result['exam_code'] = $exam['exam_code'];
                            $result['schedule_name'] = $exam['schedule_name'];
                            $result['category_name'] = $exam['category_name'];
                            $result['type'] = $exam['type'];
                            $result['number_question'] = $exam['number_question'];
                        }
                        unset($result);
                    ?>
                        <tr class="">
                            <td class="align-middle">
                                <?= $exam['exam_id'] ?>
                            </td>
                            <td class="align-middle">
                                <?= $exam['exam_code'] ?>
                            </td>
                            <td class="align-middle">
                                <?= $exam['schedule_name'] ?>
                            </td>
                            <td class="align-middle">
                                <?= $exam['category_name'] ?>
                            </td>
                            <td class="align-middle">
                                <?= $exam['type'] ?>
                            </td>
                            <td class="align-middle">
                                <?= $exam['number_question'] ?>
                            </td>
                            <td class="align-middle col-2">
                                <a class="btn btn-success btn-sm" href="?act=tables&data=exam_detail&id=<?= $exam['exam_id'] ?>"><i class="fa-solid fa-circle-info"></i></a>
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#results" data-bs-value='<?= json_encode($results) ?>'>Theo dõi điểm</button>
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
            $currentURL = "index.php?act=tables&data=exams";
            $amountPage = ceil(count(getAllExams()) / 10);
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
</div>

<!-- Danh sách thí sinh -->
<div class="card shadow mb-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chi tiết lịch thi - Danh sách thí sinh</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <form method="post" role="form" class="filter-panel">
                <div class="row align-items-end me-1">
                    <div class="col-md-3 form-group">
                        <label>Sắp xếp theo</label>
                        <select name="filterByCategory" class="form-control form-control-sm">
                            <option value="id" selected>ID</option>
                            <option value="id_candidates">Mã thí sinh</option>
                            <option value="name_candidates">Họ tên thí sinh</option>
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
                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">
                    <i class="fa-regular fa-square-plus fa-fw fa-lg"></i>
                    Thêm thí sinh
                </button>
            </div>
            <div class="col">
                <div class="row">
                    <div class="btn-group float-end">
                        <button class="btn btn-sm btn-success rounded-1 py-1 px-2 me-2">
                            <i class="fa-solid fw-fs fa-file-export"></i>
                            <span class="md-hidden">Excel</span>
                        </button>
                        <button class="btn btn-sm btn-outline-success rounded-1 py-1 px-2 me-2" disabled>
                            <i class="fa-solid fw-fs fa-print"></i>
                            <span class="md-hidden">Print</span>
                        </button>
                        <button class="btn btn-sm btn-outline-success rounded-1 py-1 px-2 me-2" disabled>
                            <i class="fa-solid fw-fs fa-file-csv"></i>
                            <span class="md-hidden">CSV</span>
                        </button>
                        <button class="btn btn-sm btn-outline-success rounded-1 py-1 px-2" disabled>
                            <i class="fa-solid fw-fs fa-file-pdf"></i>
                            <span class="md-hidden">PDF</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive small">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Mã thí sinh</th>
                        <th scope="col">Họ và tên thí sinh</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">Mã thí sinh</th>
                        <th scope="col">Họ và tên thí sinh</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($schedule_detail as $key => $value) : ?>
                        <tr class="">
                            <td><?= $value['account_id'] ?></td>
                            <td><?= $value['fullname'] ?></td>
                            <td class="col-1">
                                <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm mx-4" href="?act=tables&data=del_candidate&candidate_id=<?= $value['account_id'] ?>&schedule_id=<?= $schedule_id ?>"><i class="fa fa-trash"></i></a>
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
            $currentURL = "index.php?act=tables&data=schedule_detail&schedule_id=" . $schedule_id;
            $amountPage = ceil(count(countScheduleDetail($schedule_id)) / 10);
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
</div>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modalTitleId">Thêm thí sinh</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 pb-2">
                            <div class="form-outline">
                                <a href="../assets/public/candidates_partten.xlsx" class="btn btn-sm btn-success mb-3">
                                    <i class="fa-regular fa-file-excel fa-fw"></i>
                                    File mẫu
                                </a>
                                <a href="../assets/public/manual.docx" type="button" class="btn btn-sm btn-outline-dark mb-3">
                                    <i class="fa fa-file-download fa-fw"></i>
                                    Hướng dẫn sử dụng
                                </a>
                            </div>
                            <div class="mb-3 pb-2">
                                <label for="username" class="form-label">Thêm một thí sinh</label>
                                <input type="text" name="username" id="username" class="form-control form-control-sm">
                                <small class="text-muted">Tên người dùng</small>
                            </div>
                            <div class="file-upload mb-3">
                                <div class="mb-3">
                                    <small>Hoặc</small>
                                </div>
                                <div class="pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="accounts">Tải lên file</label>
                                        <input type="file" id="accounts" name="accounts" class="form-control form-control-sm" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Huỷ</button>
                    <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal xem danh sách kết quả 1 đề thi-->
<div class="modal fade" id="results" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Danh sách kết quả thi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if (!isset($results) || $results == null) : ?>
                    <div class="alert alert-warning" role="alert">
                        Không có kết quả thi nào
                    </div>
                <?php else : ?>
                    <div class="mb-4 px-3">
                        <div class="row">
                            <h6 class="col">Mã đề thi: <span class="exam-code"></span></h6>
                            <h6 class="col text-end">Tên lịch thi: <span class="schedule-name"></span></h6>
                        </div>
                        <div class="row">
                            <h6 class="col">Chuyên mục: <span class="category-name"></span></h6>
                            <h6 class="col text-end">Hình thức: <span class="type"></span></h6>
                        </div>
                        <div class="row">
                            <h6 class="col">Số lượng câu hỏi: <span class="number-question"></span></h6>
                        </div>
                    </div>
                    <div class="table-responsive small">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Họ và tên thí sinh</th>
                                    <th scope="col">Điểm</th>
                                    <th scope="col">Thời gian bắt đầu</th>
                                    <th scope="col">Thời gian làm bài</th>
                                    <th scope="col">Chức năng</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th scope="col">Họ và tên thí sinh</th>
                                    <th scope="col">Điểm</th>
                                    <th scope="col">Thời gian bắt đầu</th>
                                    <th scope="col">Thời gian làm bài</th>
                                    <th scope="col">Chức năng</th>
                                </tr>
                            </tfoot>
                            <tbody id="results-body-table">

                            </tbody>
                        </table>
                    </div>
                <?php endif ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    Đóng
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    var results = document.getElementById('results');

    results.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        let button = event.relatedTarget;
        // Extract info from data-bs-* attributes
        let results = JSON.parse(button.getAttribute('data-bs-value'));
        let tableBody = document.getElementById('results-body-table');
        results.forEach(result => {
            // Chung
            const exam_code = document.querySelector('.exam-code');
            const schedule_name = document.querySelector('.schedule-name');
            const category_name = document.querySelector('.category-name');
            const type = document.querySelector('.type');
            const number_question = document.querySelector('.number-question');
            exam_code.innerHTML = result['exam_code'];
            schedule_name.innerHTML = result['schedule_name'];
            category_name.innerHTML = result['category_name'];
            type.innerHTML = result['type'];
            number_question.innerHTML = result['number_question'];

            // append child ra các row trong table
            let resultDOM = document.createElement('tr');
            let fullname = document.createElement('td');
            fullname.innerHTML = result['fullname'];
            resultDOM.appendChild(fullname);

            let points = document.createElement('td');
            points.innerHTML = result['points'];
            resultDOM.appendChild(points);

            let time_start = document.createElement('td');
            time_start.innerHTML = result['time_start'];
            resultDOM.appendChild(time_start);

            let exam_time = document.createElement('td');
            exam_time.innerHTML = result['exam_time'];
            resultDOM.appendChild(exam_time);

            let btnInfo = document.createElement('td');
            let btnInfoLink = document.createElement('a');
            btnInfoLink.classList.add('btn', 'btn-sm', 'btn-success');
            btnInfoLink.innerHTML = '<i class="fa-solid fa-circle-info"></i>';
            btnInfoLink.href = "?act=tables&data=result_detail&result_id=" + result['id'];
            btnInfo.appendChild(btnInfoLink);
            resultDOM.appendChild(btnInfo);

            tableBody.appendChild(resultDOM);
        });


    });

    // Xử lý khi nhập vào ô input username
    const username = document.getElementById('username');
    const fileUpload = document.querySelector('.file-upload');

    username.addEventListener('input', function() {
        const inputValue = username.value.trim();

        if (inputValue) {
            // Nếu ô input có giá trị, ẩn DOM element
            fileUpload.classList.add('d-none');
        } else {
            // Ngược lại, hiển thị DOM element
            fileUpload.classList.remove('d-none');
        }
    });
</script>