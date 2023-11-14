<section class="bg-gradient-light p-5 rounded-3 mb-5 min-vh-100">
    <h5 class="text-dark mb-5">Danh sách chi tiết kết quả thi</h5>

    <div class="row mb-3">
        <div class="col">
        </div>
        <div class="col">
            <?php include 'components/data_export.php' ?>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID chi tiết bài thi</th>
                <th scope="col">ID người dùng</th>
                <th scope="col">Câu trả lời</th>
                <th scope="col">Điểm</th>
            </tr>
        </thead>
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
    <nav>
        <?php include '../components/pagination.php'?>
    </nav>
    <!----Thêm kết quả thi----->
    <?php include '../../modals/addresultmodal.php'; ?>
    <!----Sửa kết quả thi----->
    <?php include '../../modals/editresultmodal.php'; ?>
</section>