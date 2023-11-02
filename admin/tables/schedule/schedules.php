<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-3 text-gray-800">Danh sách lịch thi</h1>
</div>

<a class="btn btn-info mb-2" href="?act=tables&data=add_schedule" data-toggle="modal"
    data-target="#addschedulemodal">Thêm lịch thi</a>


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên lịch thi</th>
            <th scope="col">Thời gian bắt đầu</th>
            <th scope="col">Thời gian kết thúc</th>
            <th scope="col">Thời gian làm bài</th>
            <th scope="col">Số lượng đề thi</th>
            <th scope="col">Số lượng thí sinh</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <tr class="">
            <td>R1C1</td>
            <td>R1C2</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td class="d-flex gap-1">
                <a class="btn btn-success btn-sm" href="?act=tables&data=schedule_detail"><i
                        class="fa-solid fa-circle-info"></i></a>
                <a class="btn btn-warning btn-sm" href="?act=tables&data=edit_schedule" data-toggle="modal"
                    data-target="#editschedulemodal"><i class="fa-regular fa-pen-to-square"></i></a>
                <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm"
                    href="?act=tables&data=del_schedule"><i class="fa fa-trash"></i></a>

            </td>
        </tr>
    </tbody>
</table>
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

<!----Thêm lịch thi----->

<form method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="addschedulemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm lịch thi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="row justify-content-center align-items-center h-100 m-5">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
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
                                            <label class="form-label" for="number_accounts">Số lượng thí
                                                sinh</label>
                                            <input type="text" id="number_accounts"
                                                class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="candidate">Thêm thí sinh</label>
                                            <input type="file" id="candidate" class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary">Xác nhận</a>
                </div>
            </div>
        </div>
    </div>
</form>


<!----Sửa lịch thi----->

<form method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="editschedulemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa lịch thi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="row justify-content-center align-items-center h-100 m-5">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
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
                                            <label class="form-label" for="number_accounts">Số lượng thí
                                                sinh</label>
                                            <input type="text" id="number_accounts"
                                                class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="md-6 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="candidate">Thêm thí sinh</label>
                                            <input type="file" id="candidate" class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary">Xác nhận</a>
                </div>
            </div>
        </div>
    </div>
</form>