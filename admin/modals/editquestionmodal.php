<div class="modal fade" id="editquestionmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>