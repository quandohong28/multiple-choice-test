<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách đề thi</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <form method="post" role="form" class="filter-panel">
                <div class="row align-items-end">
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
                <?php include 'components/data_export.php' ?>
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
                        <th scope="col">Loại đề thi</th>
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
                        <th scope="col">Loại đề thi</th>
                        <th scope="col">Số lượng câu hỏi</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($exams as $exam) : extract($exam); ?>
                        <tr class="">
                            <td class="align-middle">
                                <?= $exam_id ?>
                            </td>
                            <td class="align-middle">
                                <?= $exam_code ?>
                            </td>
                            <td class="align-middle">
                                <?= $schedule_name ? $schedule_name : '<span class="badge bg-danger p-2">Thi thử không thuộc Lịch thi nào!</span>' ?>
                            </td>
                            <td class="align-middle">
                                <?= $category_name ?>
                            </td>
                            <td class="align-middle">
                                <?= $type_name ?>
                            </td>
                            <td class="align-middle">
                                <?= $number_question ?>
                            </td>
                            <td class="align-middle">
                                <a class="btn btn-success btn-sm" href="?act=tables&data=exam_detail&id=<?= $exam_id ?>"><i class="fa-solid fa-circle-info"></i></a>
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