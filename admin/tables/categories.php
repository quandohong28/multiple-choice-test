<section class="bg-light p-5 rounded-3 mb-5 min-vh-100">
    <h3 class="text-dark text-center mb-5">Danh sách chuyên mục</h3>

    <a class="btn btn-sm btn-info mb-2" href="#" data-toggle="modal" data-target="#addcategorymodal">Thêm chuyên mục</a>


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
            <?php foreach ($catergories as $category):
                extract($category) ?>
                <tr class="">
                    <td class="align-middle">
                        <?= $id ?>
                    </td>
                    <td class="align-middle">
                        <?= $name ?>
                    </td>
                    <td class="align-middle">
                        <img src="../assets/img/categories/<?= $image ?>" alt="" width="50px">
                    </td>
                    <td class="d-flex gap-3 align-middle">
                        <input type="hidden" name="edit_category" id="edit_category" />
                        <button type="button" class="btn btn-warning btn-sm btneditcategory" data-bs-toggle="modal"
                            data-bs-target="#editCategory" data-value='<?= json_encode($category) ?>'>
                            <i class=" fa-regular fa-pen-to-square"></i>
                        </button>

                        <button name="del_category" onclick="return confirm('Bạn có xác nhận xóa ?');"
                            class="btn btn-danger btn-sm" href="?act=tables&data=del_category&id=<?= $id; ?>"><i
                                class="fa fa-trash"></i></button>
                    </td>
                </tr>
            <?php endforeach ?>
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


    <form action="?act=tables&data=add_category" method="POST" enctype="multipart/form-data">
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
                                        <input class="form-control form-control-sm" id="image" name="image"
                                            type="file" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button class="btn btn-primary" name="submit" type="submit">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!----Sửa chuyên mục----->


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
                                    <div class="col-md-12 mb-4">
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
</section>