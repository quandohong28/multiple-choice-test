<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách chi tiết kết quả thi</h6>
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
                        <th scope="col">ID chi tiết bài thi</th>
                        <th scope="col">ID người dùng</th>
                        <th scope="col">Câu trả lời</th>
                        <th scope="col">Điểm</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID chi tiết bài thi</th>
                        <th scope="col">ID người dùng</th>
                        <th scope="col">Câu trả lời</th>
                        <th scope="col">Điểm</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr class="">
                        <td>R1C1</td>
                        <td>R1C3</td>
                        <td>R1C3</td>
                        <td>R1C3</td>
                        <td>R1C3</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php include '../components/pagination.php' ?>
    </div>
    <!----Thêm kết quả thi----->
    <?php include '../../modals/addresultmodal.php'; ?>
    <!----Sửa kết quả thi----->
    <?php include '../../modals/editresultmodal.php'; ?>
</div>