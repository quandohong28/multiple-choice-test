<section class="bg-gradient-light p-5 rounded-3 mb-5 min-vh-100">
    <h5 class="text-dark mb-5">Danh sách đề thi</h5>

    <div class="row mb-3">
        <div class="col">
        </div>
        <div class="col">
            <?php include '../components/data_export.php' ?>
        </div>
    </div>

    <table class="table table-hover">
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
        <?php include '../components/pagination.php'?>
    </nav>

    <!----Thêm đề thi----->
    <?php include './modals/addexammodal.php' ?>
    <!----Sửa đề thi----->
    <?php include './modals/editexammodal.php' ?>



</section>