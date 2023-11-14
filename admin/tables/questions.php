<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách câu hỏi</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <?php include 'components/filter.php' ?>
        </div>
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#addquestionmodal">Thêm câu hỏi</a>
            </div>
            <div class="col">
                <?php include 'components/data_export.php' ?>
            </div>
        </div>
        <div class="container-fuild">
            <?php foreach ($questions as $question) :
                extract($question);
                $answers = getAnswersByQuestionId($id);
                $getQuestion = [$question, $answers];
                // var_dump($getQuestion);
            ?>

                <div class="expandable-container border border-2 rounded my-3">
                    <div class="py-2 px-5 bg-light text-dark d-flex justify-content-between user-select-none">
                        <div id="toggleButton" class="content">
                            <p><?= $content ?></p>
                        </div>
                        <div class="">
                            <button type="button" class="btn btn-warning btn-sm btneditquestion" data-bs-toggle="modal" data-bs-target="#editquestionmodal" data-value='<?= json_encode($getQuestion) ?>'>
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>

                            <a name="dlt_btn" onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm" href="?act=tables&data=del_question&id=<?= $id; ?>">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                    <div class="expandable" style="display:none">
                        <div class="d-flex justify-content-center align-items-start gap-5 p-5">
                            <div>
                                <img src="<?= $pathImg . $image ?>" class="rounded-2" width="100%">
                            </div>
                            <ul class="list-group col-5 user-select-none">
                                <?php foreach ($answers as $answer) : ?>
                                    <li class="list-group-item list-group-item-action text-sm <?= $answer['is_correct'] == 1 ? 'active' : '' ?>">
                                        <span><?= $answer['content'] ?></span>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <?php include '../components/pagination.php' ?>
    </div>
    <!----Thêm câu hỏi & trả lời----->
    <?php include 'modals/addquestionmodal.php' ?>

    <!----Sửa câu hỏi & trả lời----->
    <?php include 'modals/editquestionmodal.php' ?>
</div>

<script>
    const toggleButtons = document.querySelectorAll("#toggleButton");
    const expandableContents = document.querySelectorAll(".expandable");
    toggleButtons.forEach((toggleButton, index) => {
        toggleButton.addEventListener("click", function() {
            if (expandableContents[index].style.display === "none" || expandableContents[index].style
                .display === "") {
                // Khi ẩn hoặc không hiển thị, thì mở rộng
                expandableContents[index].style.display = "block";
            } else {
                // Khi đã hiển thị, thì thu gọn
                expandableContents[index].style.display = "none";
            }
        });
    });
</script>