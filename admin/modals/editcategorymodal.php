<div class="modal fade" id="editCategory" tabindex="-1" aria-labelledby="editCategoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryLabel">Sửa chuyên mục</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?act=tables&data=edit_category" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row justify-content-center align-items-center h-100 mt-5">
                        <div class="col-12 col-lg-9 col-xl-7">
                            <div class="row">
                                <div class="col-md-12 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="name">Tên chuyên mục</label>
                                        <input type="text" name="edit_name" id="name"
                                            class="form-control form-control-sm" value="" />
                                    </div>
                                </div>
                                <div class="col-md-12 mb-4 pb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="image">Ảnh</label>
                                        <input class="form-control form-control-sm" id="image" name="edit_image"
                                            value="" type="hidden" />
                                        <input class="form-control form-control-sm" id="image" name="edit_image"
                                            type="file" value="" />
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="" placeholder="" name="edit_id" id="id">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="submit" name="btn_edit" class="btn btn-primary">Xác nhận</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const myModal = document.getElementById('editCategory')
    myModal.addEventListener('shown.bs.modal', function () {
        const id = document.querySelector('input[name="edit_id"]');
        const name = document.querySelector('input[name="edit_name"]');
        const image = document.querySelector('input[name="edit_image"]');

        const button = event.relatedTarget
        const recipient = button.getAttribute('data-value')
        const val = JSON.parse(recipient)

        name.setAttribute('value', val.name);
        image.setAttribute('value', val.image);
        id.setAttribute('value', val.id);
    })
</script>