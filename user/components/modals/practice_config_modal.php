<div class="modal fade modal-lg" id="practiceConfigModal" tabindex="-1" aria-labelledby="practiceConfigModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="practiceConfigModalLabel">Tùy chỉnh đề thi</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?act=start_exam" method="post" id="practiceConfigForm">
                <div class="form-body p-5">
                    <p>Chọn level</p>
                    <div class="row mb-3">
                        <div class="col form-group">
                            <label for="number_easy_questions" class="form-label form-label"><span class="badge bg-success">Dễ</span></label>
                            <input type="number" name="number_easy_questions" id="number_easy_questions" class="form-control form-control-sm">
                            <small class="form-message text-danger"></small>
                        </div>
                        <div class="col form-group">
                            <label for="number_medium_questions" class="form-label form-label"><span class="badge bg-warning">Trung Bình</span></label>
                            <input type="number" name="number_medium_questions" id="number_medium_questions" class="form-control form-control-sm">
                            <small class="form-message text-danger"></small>
                        </div>
                        <div class="col form-group">
                            <label for="number_hard_questions" class="form-label form-label"><span class="badge bg-danger">Khó</span></label>
                            <input type="number" name="number_hard_questions" id="number_hard_questions" class="form-control form-control-sm">
                            <small class="form-message text-danger"></small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exam_time" class="form-label">Thời gian thi</label>
                        <select class="form-select form-select-sm" name="exam_time" id="exam_time">
                            <option value="1">1 Phút</option>
                            <option value="30">30 Phút</option>
                            <option value="45">45 Phút</option>
                            <option value="60">1 Tiếng</option>
                        </select>
                        <input type="hidden" name="type" value="1">
                        <input type="hidden" name="category_id" id="category_id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-outline-dark" data-bs-dismiss="modal">Huỷ</button>
                    <button type="submit" name="start-btn" class="btn btn-sm btn-success">Bắt đầu</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    var practiceConfigModal = document.getElementById('practiceConfigModal');
    practiceConfigModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        // Extract info from data-bs-* attributes
        let button = event.relatedTarget;
        let category = JSON.parse(button.getAttribute('data-bs-value'));

        const title = document.querySelector('#practiceConfigModalLabel');
        title.innerHTML = category.name;

        const form = document.querySelector('#practiceConfigForm');
        form.querySelector("#category_id").value = category.id;
        if(category) {
            validate();
        }
    });

    // Validate form
    function validate() {
        document.addEventListener('DOMContentLoaded', function() {
            Validator({
                form: '#practiceConfigForm',
                formGroupSelector: '.form-group',
                errorSelector: '.form-message',
                rules: [
                    Validator.isRequired('#number_easy_questions', 'Vui lòng nhập số lượng câu hỏi'),
                    Validator.isRequired('#number_medium_questions', 'Vui lòng nhập số lượng câu hỏi'),
                    Validator.isRequired('#number_hard_questions', 'Vui lòng nhập số lượng câu hỏi'),
                    Validator.max('#number_easy_questions', `Số lượng câu hỏi không hợp lệ , tối đa ${category.easy}`, category.easy),
                    Validator.max('#number_medium_questions', `Số lượng câu hỏi không hợp lệ , tối đa ${category.medium}`, category.medium),
                    Validator.max('#number_hard_questions', `Số lượng câu hỏi không hợp lệ , tối đa ${category.hard}`, category.hard),
                ]
            });
        });
    }
</script>