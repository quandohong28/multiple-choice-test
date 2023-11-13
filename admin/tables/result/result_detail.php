<section class="bg-light p-5 rounded-3 mb-5 min-vh-100">
    <h3 class="text-dark text-center mb-5">Danh sách chi tiết kết quả thi</h3>
    <table class="table table-striped">
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
    </nav>
    <!----Thêm kết quả thi----->
    <?php include './modals/addresultmodal.php'; ?>
    <!----Sửa kết quả thi----->
    <?php include './modals/editresultmodal.php'; ?>
</section>