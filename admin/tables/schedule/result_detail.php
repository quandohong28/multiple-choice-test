<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chi tiết kết quả thi</h6>
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
                        <th scope="col">STT</th>
                        <th scope="col">Câu hỏi</th>
                        <th scope="col">Câu trả lời</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Câu hỏi</th>
                        <th scope="col">Câu trả lời</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($result_detail as $key => $value) : ?>
                        <tr class="">
                            <td><?= $key + 1?></td>
                            <td><?= $value['question_content']?></td>
                            <td><?= isset($value['answer_content']) ? $value['answer_content'] : '<span class="badge bg-danger">Không chọn</span>'?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php include 'tables/components/pagination.php' ?>
    </div>
</div>