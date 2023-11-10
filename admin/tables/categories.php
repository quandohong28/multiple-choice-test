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
            <?php foreach ($catergories as $category) :
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
                        <button type="button" class="btn btn-warning btn-sm btneditcategory" data-bs-toggle="modal" data-bs-target="#editCategory" data-value='<?= json_encode($category) ?>'>
                            <i class=" fa-regular fa-pen-to-square"></i>
                        </button>

                        <a name="del_category" onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm" href="?act=tables&data=del_category&id=<?= $id; ?>"><i class="fa fa-trash"></i></a>
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
    <?php include 'modals/addcategorymodal.php' ?>

    <!----Sửa chuyên mục----->
    <?php include 'modals/editcategorymodal.php' ?>
</section>