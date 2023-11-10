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

    <form action="?act=tables&data=add_question" method="post" enctype="multipart/form-data">
        <div class="modal fade" id="addquestionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thêm câu hỏi</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="col-11 m-4 text-center">
                        <div class="form-outline">
                            <label class="form-label" for="username">Câu hỏi</label>
                            <textarea type="text" name="username" id="username" class="form-control form-control-sm"></textarea>
                        </div>
                    </div>
                    <div>
                    </div>
                    <div class="row m-4 text-center gap-5">
                        <label class="form-label" for="answer">Câu trả lời</label>
                        <div class="col-5 d-flex justify-content-between mx-3">
                            <input class="form-check-input" name="correct_answer" type="checkbox" value="" id="flexCheckDefault">
                            <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-5 d-flex justify-content-between mx-3">
                            <input class="form-check-input" name="correct_answer" type="checkbox" value="" id="flexCheckDefault">
                            <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-5 d-flex justify-content-between mx-3">
                            <input class="form-check-input" name="correct_answer" type="checkbox" value="" id="flexCheckDefault">
                            <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-5 d-flex justify-content-between mx-3">
                            <input class="form-check-input" name="correct_answer" type="checkbox" value="" id="flexCheckDefault">
                            <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between">
                            <div class="col-md-3.5 mx-3">
                                <label class="form-label select-label" name="question_type_id">Loại câu hỏi</label>
                                <select name="question_type_id" class="select form-control form-control-sm" require>
                                    <option value="?" name="question_type_id" disabled selected>Chọn loại câu hỏi</option>
                                    <?php foreach ($question_type as $key => $value) : ?>

                                        <option value="<?= $value['id'] ?>" name="question_type_id"><?= $value['type'] == "practice_test" ? "Thi thật" : "Thi thử"; ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-3.5 mx-3">
                                <label class="form-label select-label" name="category_id">Chuyên mục</label>
                                <select name="category_id" name="category" class="select form-control form-control-sm" require>
                                    <option value="?" name="category_id" disabled selected>Chọn chuyên mục</option>
                                    <?php foreach ($categories as $key => $value) : ?>

                                        <option value="<?= $value['id'] ?>" name="category_id"><?= $value['name'] ?></option>

                                    <?php endforeach; ?>
                                </select>

                            </div>
                            <div class="col-md-3.5 mx-3">
                                <label class="form-label select-label" name="question_level_id">Mức độ câu hỏi</label>
                                <select name="question_level_id" class="select form-control form-control-sm" require>
                                    <option value="?" name="question_level_id" disabled selected>Chọn loại câu hỏi</option>
                                    <?php foreach ($question_level as $key => $value) : ?>

                                        <option value="<?= $value['id'] ?>" name="question_level_id"><?= $value['level'] ?></option>

                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-11 m-3 text-center">
                        <div class="form-outline">
                            <label class="form-label" for="avatar">Ảnh</label>
                            <input class="form-control form-control-sm" name="image" id="avatar" type="file" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                        <button type="submit" name="btn_add" class="btn btn-primary">Xác nhận</button>
                    </div>
                    <span>
                        <?php
                        if ($_SESSION['error'] != "") {
                            echo $_SESSION['error'];
                            $_SESSION['error'] = "";
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </form>

    <!----Sửa câu hỏi & trả lời----->


    <!-- <div class="modal fade" id="editquestionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa câu hỏi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="" method="post">
                    <div class="col-11 m-4 text-center">
                        <div class="form-outline">
                            <label class="form-label" for="username">Câu hỏi</label>
                            <textarea type="text" id="username" class="form-control form-control-sm"></textarea>
                        </div>
                    </div>
                    <div>
                    </div>
                    <div class="row m-4 text-center gap-5">
                        <label class="form-label" for="answer">Câu trả lời</label>
                        <div class="col-5 d-flex justify-content-between mx-3">
                            <input class="form-check-input" name="correct_answer" type="checkbox" value="" id="flexCheckDefault">
                            <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-5 d-flex justify-content-between mx-3">
                            <input class="form-check-input" name="correct_answer" type="checkbox" value="" id="flexCheckDefault">
                            <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-5 d-flex justify-content-between mx-3">
                            <input class="form-check-input" name="correct_answer" type="checkbox" value="" id="flexCheckDefault">
                            <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-5 d-flex justify-content-between mx-3">
                            <input class="form-check-input" name="correct_answer" type="checkbox" value="" id="flexCheckDefault">
                            <textarea type="text" id="answer" name="answer" class="form-control form-control-sm"></textarea>
                        </div>
                        <div class="col-md-5 mx-3">
                            <label class="form-label select-label" name="question_level_id">Loại câu hỏi</label>
                            <select class="select form-control form-control-sm">
                                <option value="?" name="question_level_id" selected>Chọn loại câu hỏi</option>
                                <option value="0" name="question_level_id">Dễ</option>
                                <option value="1" name="question_level_id">Trung bình</option>
                                <option value="2" name="question_level_id">Khó</option>
                            </select>
                        </div>
                        <div class="col-md-5 mx-3">
                            <label class="form-label select-label" name="id_category">Chuyên mục</label>
                            <select class="select form-control form-control-sm">
                                <option value="?" name="id_category" selected>Chọn chuyên mục</option>
                                <option value="0" name="id_category">Toán rời rạc</option>
                                <option value="1" name="id_category">...</option>
                                <option value="2" name="id_category">...</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-11 m-3 text-center">
                        <div class="form-outline">
                            <label class="form-label" for="avatar">Ảnh</label>
                            <input class="form-control form-control-sm" name="image" id="avatar" type="file" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                        <a class="btn btn-primary">Xác nhận</a>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
</section>