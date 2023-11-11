<div class="modal fade" id="editScheduleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm lịch thi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
<<<<<<< HEAD
            <form method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center align-items-center h-100 m-5">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="name">Tên lịch thi</label>
                                    <input type="text" id="name" class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="time_exam">Thời gian làm bài</label>
                                    <input type="number" id="time_exam" name="time_exam"
                                        class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="time_start" class="form-label">Thời gian bắt đầu</label>
                                    <input type="date" name="time_start" class="form-control form-control-sm"
                                        id="time_start" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="time_end" class="form-label">Thời gian kết thúc</label>
                                    <input type="date" name="time_end" class="form-control form-control-sm"
                                        id="time_end" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_exam">Số lượng đề thi</label>
                                    <input type="number" id="number_exam" name="number_exam"
                                        class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_easy_questions">Số lượng câu dễ</label>
                                    <input type="number" id="number_easy_questions" name="number_easy_questions"
                                        class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_medium_questions">Số lượng câu trung
                                        bình</label>
                                    <input type="number" id="number_medium_questions" name="number_medium_questions"
                                        class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_hard_questions">Số lượng câu khó</label>
                                    <input type="number" id="number_hard_questions" name="number_hard_questions"
                                        class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="candidates">Thêm thí sinh</label>
                                    <input type="file" id="candidates" name="candidates"
                                        class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
=======
            <form action="?act=tables&data=add_question" method="post" enctype="multipart/form-data">
                <div class="col-11 m-4 text-center">
                    <div class="form-outline">
                        <label class="form-label" for="content">Câu hỏi</label>
                        <textarea type="text" name="edit_content" id="content" class="form-control form-control-sm"></textarea>
                    </div>
                </div>
                <div class="col-md-11 m-3 text-center">
                    <div class="form-outline">
                        <label class="form-label" for="image">Ảnh</label>
                        <input class="form-control form-control-sm" id="image" name="edit_image" type="file" />
                    </div>
                </div>
                <div class="row m-4 justify-content-between text-center">
                    <div class="col-3 mx-3">
                        <label class="form-label select-label" name="question_level_id">Loại câu hỏi</label>
                        <select name="edit_question_type_id" class="select form-control form-control-sm">
                            <option value="?" selected>Chọn loại câu hỏi</option>
                            <?php foreach ($question_type as $key => $value) : ?>
                                <option value="<?= $value['id'] ?>"><?= $value['type'] == "practice_test" ? "Thi thử" : "Thi thật" ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-3 mx-3">
                        <label class="form-label select-label" name="question_level_id">Mức độ câu hỏi</label>
                        <select name="edit_question_level_id" class="select form-control form-control-sm">
                            <option value="?" selected>Chọn loại câu hỏi</option>
                            <?php foreach ($question_level as $key => $value) : ?>
                                <option value="<?= $value['id'] ?>"><?= $value['level'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-3 mx-3">
                        <label class="form-label select-label" name="id_category">Chuyên mục</label>
                        <select name="edit_id_category" class="select form-control form-control-sm">
                            <option value="?" selected>Chọn chuyên mục</option>
                            <?php foreach ($categories as $key => $value) : ?>
                                <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row m-4 text-center gap-5">
                    <label class="form-label" for="answer">Câu trả lời</label>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" type="radio" id="flexCheckDefault1">
                        <input class="check-input" type="hidden" value="0" name="edit_correct_answer[]">
                        <textarea type="text" id="answer1" name="edit_answer[]" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" type="radio" id="flexCheckDefault2">
                        <input class="check-input" type="hidden" value="0" name="edit_correct_answer[]">
                        <textarea type="text" id="answer2" name="edit_answer[]" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" type="radio" id="flexCheckDefault3">
                        <input class="check-input" type="hidden" value="0" name="edit_correct_answer[]">
                        <textarea type="text" id="answer3" name="edit_answer[]" class="form-control form-control-sm"></textarea>
                    </div>
                    <div class="col-5 d-flex justify-content-between mx-3">
                        <input class="form-check-input" type="radio" id="flexCheckDefault4">
                        <input class="check-input" type="hidden" value="0" name="edit_correct_answer[]">
                        <textarea type="text" id="answer4" name="edit_answer[]" class="form-control form-control-sm"></textarea>
>>>>>>> vanthanh
                    </div>
                    <input type="hidden" value="" placeholder="" name="edit_id" id="id">
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
<<<<<<< HEAD
                    <button class="btn btn-primary" name="submit" type="submit">Xác nhận</button>
=======
                    <button class="btn btn-primary" name="btn_add" type="submit">Xác nhận</button>
>>>>>>> vanthanh
                </div>
            </form>
        </div>
    </div>

    <script>
        const myModal = document.getElementById('editquestionmodal')

        myModal.addEventListener('shown.bs.modal', function() {
            const id = document.querySelector('input[name="edit_id"]');
            const content = document.querySelector('textarea[name="edit_content"]');
            const question_type_id = document.querySelector('select[name="edit_question_type_id"]');
            const question_level_id = document.querySelector('select[name="edit_question_level_id"]');
            const id_category = document.querySelector('select[name="edit_id_category"]');
            const answer = document.querySelectorAll('textarea[name="edit_answer[]"]');
            const correct_answer = document.querySelectorAll('input[name="edit_correct_answer[]"]');

            const button = event.relatedTarget
            const recipient = button.getAttribute('data-value')

            const val = JSON.parse(recipient)

 

            content.value = val.content;
            id_category.value = val.id_category;
            question_type_id.value = val.question_type_id;
            question_level_id.value = val.question_level_id;


            // username.value = val.username;

            // console.log(myModal);
        })
    </script>