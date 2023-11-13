<section class="bg-light p-5 rounded-3 mb-5 min-vh-100">
    <h3 class="text-dark text-center mb-5">Danh sách đề thi</h3>

    <table class="table table-striped text-center">
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
        <?php foreach ($exams as $exam):
            extract($exam);

            ?>
            <tbody>
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
                        <a class="btn btn-success btn-sm" href="?act=tables&data=exam_detail&id=<?= $exam_id ?>"><i
                                class="fa-solid fa-circle-info"></i></a>
                    </td>
                </tr>
            </tbody>
        <?php endforeach ?>
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