<div class="modal fade" id="editquestionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa câu hỏi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="?act=tables&data=edit_question" method="post" enctype="multipart/form-data">
                <div class="col-11 m-4 text-center">
                    <div class="form-outline">
                        <label class="form-label" for="content">Câu hỏi</label>
                        <textarea type="text" value="" name="edit_content" id="content"
                            class="form-control form-control-sm"></textarea>
                    </div>
                </div>
                <div class="col-11 m-4 text-center">
                    <div class="form-outline">
                        <label class="form-label" for="image">Ảnh</label>
                        <input class="form-control form-control-sm" id="image" name="edit_image" type="file" />
                        <input class="form-control form-control-sm" id="image" name="edit_image" type="hidden" />
                    </div>
                </div>
                <div class="col-11 d-flex m-4 justify-content-center text-center">
                    <div class="col-4 me-4">
                        <label class="form-label select-label" name="question_level_id">Loại câu hỏi</label>
                        <select name="edit_question_type_id" class="select form-control form-control-sm">
                            <option value="?" selected>Chọn loại câu hỏi</option>
                            <?php foreach ($question_type as $key => $value): ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['type'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label class="form-label select-label" name="question_level_id">Mức độ câu hỏi</label>
                        <select name="edit_question_level_id" class="select form-control form-control-sm">
                            <option value="?" selected>Chọn loại câu hỏi</option>
                            <?php foreach ($question_level as $key => $value): ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['level'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-4 ms-3">
                        <label class="form-label select-label" name="id_category">Chuyên mục</label>
                        <select name="edit_category_id" class="select form-control form-control-sm">
                            <option value="?" selected>Chọn chuyên mục</option>
                            <?php foreach ($categories as $key => $value): ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row text-center gap-5">
                    <label class="form-label" for="answer">Câu trả lời</label>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input type="hidden" name="edit_id_answer[]" class="id_answer" value="">
                        <input class="edit-form-check-input" onclick="check_update()" name="edit_check_answer"
                            type="radio" id="flexCheckDefault1">
                        <input class="check-input" type="hidden" value="" name="edit_correct_answer[]">
                        <textarea type="text" value="" id="answer1" name="edit_answer[]"
                            class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input type="hidden" name="edit_id_answer[]" class="id_answer" value="">
                        <input class="edit-form-check-input" onclick="check_update()" name="edit_check_answer"
                            type="radio" id="flexCheckDefault2">
                        <input class="check-input" type="hidden" value="" name="edit_correct_answer[]">
                        <textarea type="text" value="" id="answer2" name="edit_answer[]"
                            class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input type="hidden" name="edit_id_answer[]" class="id_answer" value="">
                        <input class="edit-form-check-input" onclick="check_update()" name="edit_check_answer"
                            type="radio" id="flexCheckDefault3">
                        <input class="check-input" type="hidden" value="" name="edit_correct_answer[]">
                        <textarea type="text" value="" id="answer3" name="edit_answer[]"
                            class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input type="hidden" name="edit_id_answer[]" class="id_answer" value="">
                        <input class="edit-form-check-input" onclick="check_update()" name="edit_check_answer"
                            type="radio" id="flexCheckDefault4">
                        <input class="check-input" type="hidden" value="" name="edit_correct_answer[]">
                        <textarea type="text" value="" id="answer4" name="edit_answer[]"
                            class="form-control form-control-sm"></textarea>
                    </div>
                </div>
                <input type="hidden" value="" placeholder="" name="edit_id" id="id">

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Hủy</button>
                    <button class="btn btn-primary" name="btn_edit" type="submit">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const myModal = document.getElementById('editquestionmodal')

    myModal.addEventListener('shown.bs.modal', function () {
        const id = document.querySelector('input[name="edit_id"]');
        const content = document.querySelector('textarea[name="edit_content"]');
        const question_type_id = document.querySelector('select[name="edit_question_type_id"]');
        const question_level_id = document.querySelector('select[name="edit_question_level_id"]');
        const category_id = document.querySelector('select[name="edit_category_id"]');
        const answer = document.querySelectorAll('textarea[name="edit_answer[]"]');
        const correct_answer = document.querySelectorAll('input[name="edit_correct_answer[]"]');
        const checked_answer = document.querySelectorAll('.edit-form-check-input');
        const image = document.querySelector('input[name="edit_image"][type="hidden"]');
        const id_answer = document.querySelectorAll('.id_answer');

        for (let i = 0; i < checked_answer.length; i++) {
            checked_answer[i].checked = false;
        }

        const button = event.relatedTarget
        const recipient = button.getAttribute('data-value')

        
        const val = JSON.parse(recipient) 
 
        console.log(val);

        image.value = val.image;
        id.value = val.id;
        content.value = val.content;
        question_type_id.value = val.question_type_id;
        question_level_id.value = val.question_level_id;
        category_id.value = val.category_id; 

        for (let i = 0; i < val.answers.length; i++) {
            id_answer[i].value = val.answers[i].id;
            answer[i].value = val.answers[i].content;
            correct_answer[i].value = val.answers[i].is_correct;
            if (correct_answer[i].value == 1) {
                checked_answer[i].checked = true;
            } 
        }

    })

    function check_update() {
        var radioElements = document.getElementsByName('edit_check_answer');
        const correct_answer = document.querySelectorAll('input[name="edit_correct_answer[]"]');

        for (var i = 0; i < radioElements.length; i++) {
            if (radioElements[i].checked) {
                correct_answer[i].value = "1";
            } else {
                correct_answer[i].value = "0";
            }
        }
    }
</script>