<section class="bg-light p-5 rounded-3 mb-6 min-vh-100">
    <h3 class="text-dark text-center mb-5">Chi tiết đề thi</h3>


    <table class="table table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Câu hỏi</th>
            </tr>
        </thead>

        <tbody>
            <tr class="">
                <td class="align-middle">
                    R1C2
                </td>
                <td class="align-middle">
                    R1C2
                </td>
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

    <!----Thêm đề thi----->
    <?php include './modals/addexammodal.php' ?>
    <!----Sửa đề thi----->
    <?php include './modals/editexammodal.php' ?>



</section>