<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-3 text-gray-800">Danh sách chi tiết kết quả thi</h1>
</div>

<a class="btn btn-info mb-2" href="?act=tables&data=add_result" data-toggle="modal" data-target="#addresultmodal">Thêm
    kết quả thi</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID chi tiết bài thi</th>
            <th scope="col">ID người dùng</th>
            <th scope="col">Câu trả lời</th>
            <th scope="col">Điểm</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <tr class="">
            <td>R1C1</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td>R1C3</td>
            <td class="d-flex gap-2">
                <a class="btn btn-warning btn-sm" href="?act=tables&data=edit_result" data-toggle="modal"
                    data-target="#editresultmodal"><i class="fa-regular fa-pen-to-square"></i></a>
                <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm"
                    href="?act=tables&data=del_result"><i class="fa fa-trash"></i></a>
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


<!----Thêm kết quả thi----->


<form action="" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="addresultmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm kết quả thi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="row m-4 text-center gap-5">
                    <div class="col-md-5 mx-3">
                        <div class="form-outline">
                            <label class="form-label" for="exam_detail_id">ID bài thi chi tiết</label>
                            <input type="text" id="exam_detail_id" name="exam_detail_id"
                                class="form-control form-control-sm" />
                        </div>
                    </div>
                    <div class="col-md-5 mx-3">
                        <div class="form-outline">
                            <label class="form-label" for="account_id">ID thí sinh</label>
                            <input type="text" id="account_id" name="account_id" class="form-control form-control-sm" />
                        </div>
                    </div>
                    <div class="col-md-5 mx-3">
                        <div class="form-outline">
                            <label class="form-label" for="answer">Câu trả lời</label>
                            <input type="text" id="answer" name="answer" class="form-control form-control-sm" />
                        </div>
                    </div>
                    <div class="col-md-5 mx-3">
                        <div class="form-outline">
                            <label class="form-label" for="points">Điểm</label>
                            <input type="text" id="points" name="points" class="form-control form-control-sm" />
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


<!----Sửa kết quả thi----->


<form action="" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="editresultmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa kết quả thi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="row m-4 text-center gap-5">
                    <div class="col-md-5 mx-3">
                        <div class="form-outline">
                            <label class="form-label" for="exam_detail_id">ID bài thi chi tiết</label>
                            <input type="text" id="exam_detail_id" name="exam_detail_id"
                                class="form-control form-control-sm" />
                        </div>
                    </div>
                    <div class="col-md-5 mx-3">
                        <div class="form-outline">
                            <label class="form-label" for="account_id">ID thí sinh</label>
                            <input type="text" id="account_id" name="account_id" class="form-control form-control-sm" />
                        </div>
                    </div>
                    <div class="col-md-5 mx-3">
                        <div class="form-outline">
                            <label class="form-label" for="answer">Câu trả lời</label>
                            <input type="text" id="answer" name="answer" class="form-control form-control-sm" />
                        </div>
                    </div>
                    <div class="col-md-5 mx-3">
                        <div class="form-outline">
                            <label class="form-label" for="points">Điểm</label>
                            <input type="text" id="points" name="points" class="form-control form-control-sm" />
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