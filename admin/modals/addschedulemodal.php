<style>
    .error {
        font-size: 14px;
        color: red;
    }
</style>

<form method="post" enctype="multipart/form-data" action="?act=tables&data=add_schedule">

    <!-- Thêm lịch thi -->
    <div class="modal fade" id="addSchedule" aria-hidden="true" aria-labelledby="addScheduleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addScheduleLabel">Thêm lịch thi</h5>
                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row justify-content-center align-items-center h-100 m-5">
                    <div class="col-11">
                        <div class="row">
                            <div class="col mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="name">Tên lịch thi</label>
                                    <input type="text" id="name" name="name" class="form-control form-control-sm" />
                                    <small class="error h6 text-danger"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="time_start" class="form-label">Thời gian bắt đầu</label>
                                    <input type="datetime-local" name="time_start" class="form-control form-control-sm" id="time_start" />
                                    <small class="error"></small>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="exam_time">Thời gian làm bài</label>
                                    <input type="number" id="exam_time" name="exam_time" min="0" class="form-control form-control-sm" />
                                    <small class="error"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="md-6 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="category_id">Chuyên mục</label>
                                    <div class="mb-3">
                                        <select name="category_id" class="select form-control form-control-sm">
                                            <option value="0">Chọn chuyên mục</option>
                                            <?php foreach ($categories as $category) : ?>
                                                <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_exam">Số lượng đề thi</label>
                                    <input type="number" id="number_exam" name="number_exam" class="form-control form-control-sm" />
                                    <small class="error"></small>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_easy_questions">Số lượng câu dễ</label>
                                    <input type="number" id="number_easy_questions" name="number_easy_questions" class="form-control form-control-sm" />
                                    <small class="error"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_medium_questions">Số lượng câu trung
                                        bình</label>
                                    <input type="number" id="number_medium_questions" name="number_medium_questions" class="form-control form-control-sm" />
                                    <small class="error"></small>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_hard_questions">Số lượng câu khó</label>
                                    <input type="number" id="number_hard_questions" name="number_hard_questions" class="form-control form-control-sm" />
                                    <small class="error"></small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-target="#addCandidate" data-bs-toggle="modal">Thêm thí sinh</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Thêm danh sách thí sinh -->
    <div class="modal fade" id="addCandidate" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Thêm thí sinh</h5>
                    <button type="button" class="btn btn-sm-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="md-6 mb-4 pb-2">
                            <div class="form-outline">
                                <a href="../assets/public/candidates_partten.xlsx" class="btn btn-sm btn-sm btn-success mb-3">
                                    <i class="fa-regular fa-file-excel fa-fw"></i>
                                    File mẫu
                                </a>
                                <a href="../assets/public/manual.docx" type="button" class="btn btn-sm btn-sm btn-outline-dark mb-3">
                                    <i class="fa fa-file-download fa-fw"></i>
                                    Hướng dẫn sử dụng
                                </a>
                            </div>
                            <div class="md-6 mb-4 pb-2">
                                <label class="form-label" for="account">Chọn tất cả</label>
                                <input type="checkbox" name="all_accounts"><br>
                                <small>Thêm tất cả người dùng có trong hệ thống</small>
                            </div>

                            <div class="md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="account">Tên người dùng</label>
                                    <input type="text" id="account" name="account" class="form-control form-control-sm" />
                                    <small class="error"></small>
                                </div>
                            </div>

                            <div class="md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="accounts">Tải lên file</label>
                                    <input type="file" id="accounts" name="accounts"  onchange="checkFileUpload()" class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-sm btn-outline-dark">Khôi phục</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-target="#addSchedule" data-bs-toggle="modal">Trở về</button>
                    <button class="btn btn-sm btn-primary" name="submit" type="submit">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    const name = document.querySelector('#name');
    const examTime = document.querySelector('#exam_time');
    const timeStart = document.querySelector('#time_start');
    const category = document.querySelector('#category_id');
    const numberExam = document.querySelector('#number_exam');
    const numberEasyQuestions = document.querySelector('#number_easy_questions');
    const numberMediumQuestions = document.querySelector('#number_medium_questions');
    const numberHardQuestions = document.querySelector('#number_hard_questions');


    /**
     * Validate form tạo lịch thi
     * tên lịch thi không được để trống 
     * kiểm tra thời gian làm bài luôn luôn lớn hơn 15 phút
     * số lượng đề thi phải lớn hơn 0, nhỏ hơn 10
     * 
     * 
     */
    name.addEventListener('blur', function() {
        if (this.value.trim() == '') {
            this.parentNode.querySelector('.error').innerText = 'Tên lịch thi không được để trống';
        } else {
            this.parentNode.querySelector('.error').innerText = '';
        }
    })

    numberExam.addEventListener('blur', function() {
        if (this.value < 1 || this.value > 10) {
            this.parentNode.querySelector('.error').innerText = 'Số lượng đề thi phải lớn hơn 0, nhỏ hơn 10';
        } else {
            this.parentNode.querySelector('.error').innerText = '';
        }
    })

    examTime.addEventListener('change', function() {
        if (this.value < 15) {
            this.value = 15;
            examTime.parentNode.querySelector('.error').innerText = 'Thời gian làm bài phải lớn hơn hoặc bằng 15 phút';
        } else {
            this.parentNode.querySelector('.error').innerText = '';
        }
    })

    /**
     * Validate form thêm thí sinh
     * nếu ô input chọn tất cả được chọn thì ẩn hai trường thêm thủ công và tải lên file
     * ngược lại thì hiện hai trường thêm thủ công và tải lên file
     * 
     * nếu ô thêm người dùng thủ công được chọn thì ẩn ô tải lên file và ngược lại
     */

    const allAccounts = document.querySelector('input[name="all_accounts"]');
    const account = document.querySelector('#account');
    const accounts = document.querySelector('#accounts');

    allAccounts.addEventListener('change', function() {
        if (this.checked) {
            account.parentNode.style.display = 'none';
            accounts.parentNode.style.display = 'none';
        } else {
            account.parentNode.style.display = 'block';
            accounts.parentNode.style.display = 'block';
        }
    })

    account.addEventListener('focus', function() {
        accounts.parentNode.style.display = 'none';
    })

    account.addEventListener('blur', function() {
        accounts.parentNode.style.display = 'block';
    })

    function checkFileUpload() { 
        var uploadedFile = accounts.files[0];

        if (uploadedFile) {
            account.parentNode.style.display = 'none';
        } else {
            account.parentNode.style.display = 'block';
        }
    }

    account.addEventListener('change', function() {
        if (this.value.trim() == '') {
            this.parentNode.querySelector('.error').innerText = 'Tên người dùng không được để trống';
        } else {
            this.parentNode.querySelector('.error').innerText = '';
        }
    })
</script>