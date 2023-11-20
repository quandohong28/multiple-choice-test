<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách chi tiết kết quả thi</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <?php include 'tables/components/filter.php' ?>
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
                        <th scope="col">ID kết quả bài thi</th>
                        <th scope="col">Câu hỏi</th>
                        <th scope="col">Câu trả lời</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID kết quả bài thi</th>
                        <th scope="col">Câu hỏi</th>
                        <th scope="col">Câu trả lời</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($result_detail as $key => $value): ?>
                        <tr class="">
                            <td>
                                <?= $value['result_detail_id'] ?>
                            </td>
                            <td>
                                <?= $value['result_id'] ?>
                            </td>
                            <td>
                                <?= $value['question_content'] ?>
                            </td>
                            <td>
                                <?= $value['answer_content'] ?>
                            </td>

                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php include 'tables/components/pagination.php' ?>
    </div>
</div>