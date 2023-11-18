<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chi tiết đề thi</h6>
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
                        <th>ID</th>
                        <th>Câu hỏi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Câu hỏi</th>
                    </tr>
                </tfoot>
                <?php foreach ($exam_detail as $question) : extract($question); ?>
                    <tr class="">
                        <td class="align-middle col-1">
                            <?= $id ?>
                        </td>
                        <td class="align-middle">
                            <?= $question_content ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
        <?php include 'tables/components/pagination.php' ?>
    </div>
</div>