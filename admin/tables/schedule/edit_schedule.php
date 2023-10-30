<div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration  mb-5" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Sửa lịch thi</h3>
                <form method="POST" enctype="multipart/form-data">
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
                                <input type="text" id="time_exam" class="form-control form-control-sm" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 d-flex align-items-center">
                            <div class="form-outline datepicker w-100">
                                <label for="time_start" class="form-label">Thời gian bắt đầu</label>
                                <input type="date" class="form-control form-control-sm" id="time_start" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 d-flex align-items-center">
                            <div class="form-outline datepicker w-100">
                                <label for="time_end" class="form-label">Thời gian kết thúc</label>
                                <input type="date" class="form-control form-control-sm" id="time_end" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                                <label class="form-label" for="number_exam">Số lượng đề thi</label>
                                <input type="text" id="number_exam" class="form-control form-control-sm" />
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <div class="form-outline">
                                <label class="form-label" for="number_accounts">Số lượng thí sinh</label>
                                <input type="text" id="number_accounts" class="form-control form-control-sm" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-2 text-center">
                        <input class="btn btn-primary btn-sm" type="submit" value="Xác nhận" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>