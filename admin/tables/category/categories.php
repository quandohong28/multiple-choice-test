<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-3 text-gray-800">Danh sách chuyên mục</h1>
</div>

<a class="btn btn-info mb-2" href="?act=tables&data=add_category" data-toggle="modal"
    data-target="#addcategorymodal">Thêm chuyên mục</a>


<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên chuyên mục</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
        <tr class="">
            <td>R1C1</td>
            <td>R1C3</td>
            <td>
                <img src="" alt="">
            </td>
            <td class="d-flex gap-3">
                <a class="btn btn-warning btn-sm" href="?act=tables&data=edit_category" data-toggle="modal"
                    data-target="#editcategorymodal"><i class="fa-regular fa-pen-to-square"></i></a>
                <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm"
                    href="?act=tables&data=del_category"><i class="fa fa-trash"></i></a>
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



<!----Thêm chuyên mục----->


<form action="" method="post" enctype="multipart/form-data">
    <div class="modal fade text-center" id="addcategorymodal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm chuyên mục</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="row justify-content-center align-items-center h-100 my-5">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="name">Tên chuyên mục</label>
                                            <input type="text" id="name" class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="avatar">Ảnh</label>
                                            <input class="form-control form-control-sm" id="avatar" type="file" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary" type="submit">Xác nhận</a>
                </div>
            </div>
        </div>
    </div>
</form>

<!----Sửa chuyên mục----->


<form action="" method="post" enctype="multipart/form-data">
    <div class="modal fade text-center" id="editcategorymodal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa chuyên mục</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="row justify-content-center align-items-center h-100 my-5">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="name">Tên chuyên mục</label>
                                            <input type="text" id="name" class="form-control form-control-sm" />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4 pb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="avatar">Ảnh</label>
                                            <input class="form-control form-control-sm" id="avatar" type="file" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <a class="btn btn-primary" type="submit">Xác nhận</a>
                </div>
            </div>
        </div>
    </div>
</form>