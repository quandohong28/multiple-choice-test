<section class="bg-gradient-light p-5 rounded-3 mb-6 min-vh-100">
    <h5 class="text-dark mb-5">Chi tiết đề thi</h5>

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
                <th scope="col">Câu hỏi</th>
            </tr>
        </thead>
        <?php foreach ($exam_detail as $question):
            extract($question);
            ?>
            <tbody>
                <tr class="">
                    <td class="align-middle">
                        <?= $id ?>
                    </td>
                    <td class="align-middle">
                        <?= $question_content ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <nav>
        <?php include '../components/pagination.php'?>
    </nav>

    <!----Thêm đề thi----->
    <?php include './modals/addexammodal.php' ?>
    <!----Sửa đề thi----->
    <?php include './modals/editexammodal.php' ?>



</section>