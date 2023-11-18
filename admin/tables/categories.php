<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách chuyên mục</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <?php include 'components/filter.php' ?>
        </div>
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#addcategorymodal">Thêm
                    chuyên mục</a>
            </div>
            <div class="col">
                <?php include 'components/data_export.php' ?>
            </div>
        </div>
        <div class="table-responsive small">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên chuyên mục</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên chuyên mục</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </tfoot>
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
                            <td class="align-middle col-1">
                                <button type="button" class="btn btn-warning btn-sm btneditcategory" data-bs-toggle="modal"
                                    data-bs-target="#editCategory" data-value='<?= json_encode($category) ?>'>
                                    <i class=" fa-regular fa-pen-to-square"></i>
                                </button>
                                <a name="del_category" onclick="return confirm('Bạn có xác nhận xóa ?');"
                                    class="btn btn-danger btn-sm" href="?act=tables&data=del_category&id=<?= $id; ?>"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php include 'components/pagination.php' ?>
    </div>
    <!----Thêm chuyên mục----->
    <?php include 'modals/addcategorymodal.php' ?>

    <!----Sửa chuyên mục----->
    <?php include 'modals/editcategorymodal.php' ?>
</div> 