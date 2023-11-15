<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách đề thi</h6>
    </div>
    <div class="card-body">
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
                        <th scope="col">Mã lịch thi</th>
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
                        <th scope="col">Mã lịch thi</th>
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
                                <?= $schedule_id ?>
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
        <?php include 'components/pagination.php' ?>
    </div>
</div>