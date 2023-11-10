<section class="bg-light p-5 rounded-3 mb-5 min-vh-100">
    <h3 class="text-dark text-center mb-5">Danh sách câu hỏi</h3>

    <a class="btn btn-sm btn-info mb-2" href="#" data-toggle="modal" data-target="#addquestionmodal">Thêm câu hỏi</a>

    <?php foreach ($questions as $question) :
        extract($question);
        $answers = getAnswersByQuestionId($id);
        echo '<pre>';
        // echo $answers;
        echo '</pre>';
    ?>

        <div class="expandable-container border border-2 rounded my-3">
            <div class="py-2 px-5 bg-light text-dark d-flex justify-content-between user-select-none">
                <div id="toggleButton" class="content">
                    <p><?= $content ?></p>
                </div>
                <div>
                    <button type="button" class="btn btn-warning btn-sm btneditquestion" data-bs-toggle="modal" data-bs-target="#editquestionmodal" data-value='<?= json_encode($account) ?>'>
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
                        <img src="../assets/img/landing-page-backgound.avif" class="rounded-2" width="100%">
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
    <!----Thêm câu hỏi & trả lời----->
    <?php include 'modals/addquestionmodal.php' ?>

    <!----Sửa câu hỏi & trả lời----->
    <?php include 'modals/editquestionmodal.php' ?>
</section>