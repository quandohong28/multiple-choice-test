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
            <form action="?act=tables&data=add_category" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center align-items-center h-100 my-5">
                    <div class="col-11">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="name">Tên chuyên mục</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-sm" />
                                </div>
                            </div>
                            <div class="col-md-12 mb-4 pb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="image">Ảnh</label>
                                    <input class="form-control form-control-sm" id="image" name="image" type="file" />
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