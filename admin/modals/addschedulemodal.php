<div class="modal fade" id="addScheduleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm lịch thi</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
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
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <button class="btn btn-primary" name="submit" type="submit">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>