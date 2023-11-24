<form method="post" enctype="multipart/form-data" action="?act=tables&data=add_schedule">

    <!-- Thêm lịch thi -->
    <div class="modal fade" id="addSchedule" aria-hidden="true" aria-labelledby="addScheduleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addScheduleLabel">Thêm lịch thi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row justify-content-center align-items-center h-100 m-5">
                    <div class="col-11">
                        <div class="row">
                            <div class="col mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="name">Tên lịch thi</label>
                                    <input type="text" id="name" name="name" class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 d-flex align-items-center">
                                <div class="form-outline datepicker w-100">
                                    <label for="time_start" class="form-label">Thời gian bắt đầu</label>
                                    <input type="date" name="time_start" class="form-control form-control-sm" id="time_start" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="exam_time">Thời gian làm bài</label>
                                    <input type="number" id="exam_time" name="exam_time" class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_exam">Số lượng đề thi</label>
                                    <input type="number" id="number_exam" name="number_exam" class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_easy_questions">Số lượng câu dễ</label>
                                    <input type="number" id="number_easy_questions" name="number_easy_questions" class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_medium_questions">Số lượng câu trung
                                        bình</label>
                                    <input type="number" id="number_medium_questions" name="number_medium_questions" class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="number_hard_questions">Số lượng câu khó</label>
                                    <input type="number" id="number_hard_questions" name="number_hard_questions" class="form-control form-control-sm" />
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

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" data-bs-target="#addCandidate" data-bs-toggle="modal">Thêm thí sinh</button>
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
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="md-6 mb-4 pb-2">
                            <div class="form-outline">
                                <a href="../assets/public/candidates_partten.xlsx" class="btn btn-sm btn-success mb-3">
                                    <i class="fa-regular fa-file-excel fa-fw"></i>
                                    File mẫu
                                </a>
                                <a href="../assets/public/manual.docx" type="button" class="btn btn-sm btn-outline-dark mb-3">
                                    <i class="fa fa-file-download fa-fw"></i>
                                    Hướng dẫn sử dụng
                                </a>
                            </div>
                            <div class="md-6 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="accounts">Tải lên file</label>
                                    <input type="file" id="accounts" name="accounts" class="form-control form-control-sm" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-target="#addSchedule" data-bs-toggle="modal">Trở về</button>
                    <button class="btn btn-primary" name="submit" type="submit">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
</form>