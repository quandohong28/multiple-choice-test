<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Danh sách chuyên mục</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <form method="post" role="form" class="filter-panel">
                <div class="row align-items-end">
                    <div class="col-md-3 form-group">
                        <label>Sắp xếp theo</label>
                        <select name="filterByCategory" class="form-control form-control-sm">
                            <option value="id" selected>ID</option>
                            <option value="category_name">Tên chuyên mục</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Cách sắp xếp</label>
                        <select name="filterByLetter" class="form-control form-control-sm">
                            <option value="a-z" selected>A-Z</option>
                            <option value="z-a">Z-A</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label>Tìm kiếm</label>
                        <input type="text" name="search" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-3 form-group ">
                        <div class="row">
                            <button name="filter" class="btn btn-sm btn-info me-3 col">
                                <i class="fa fa-fw fa-search fs-6 me-2"></i>
                                <span class="lg-hidden">Tìm kiếm</span>
                            </button>
                            <button type="reset" class="btn btn-sm btn-outline-dark col">
                                <i class="fa-regular fa-fw fa-window-restore"></i>
                                <a href="index.php?act=tables&data=categories" class="lg-hidden text-decoration-none">Mặc định</a>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-target="#addcategorymodal">
                    <i class="fa-regular fa-fw fa-square-plus fa-lg"></i>
                    <span>Thêm chuyên mục</span>
                </a>
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
                            <td class="align-middle col-2">
                                <button type="button" class="btn btn-warning btn-sm btneditcategory" data-bs-toggle="modal" data-bs-target="#editCategory" data-value='<?= json_encode($category) ?>'>
                                    <i class=" fa-regular fa-pen-to-square"></i>
                                </button>
                                <a name="del_category" onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm" href="?act=tables&data=del_category&id=<?= $id; ?>"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <ul class="pagination pagination-sm justify-content-end">
            <li class="page-item disabled">
                <a class="page-link px-3">
                    <i class="fa-solid fa-caret-left"></i>
                </a>
            </li>
            <?php
            $currentURL = "index.php?act=tables&data=categories";
            $amountPage = ceil(count(getAllCategories()) / 10);
            for ($page = 1; $page <= $amountPage; $page++) :
            ?>
                <li class="page-item"><a class="page-link" href="<?= $currentURL . "&page=$page" ?>"><?= $page ?></a></li>
            <?php endfor; ?>
            <li class="page-item">
                <a class="page-link px-3" href="#">
                    <i class="fa-solid fa-caret-right"></i>
                </a>
            </li>
        </ul>
    </div>
    <!----Thêm chuyên mục----->
    <?php include 'modals/addcategorymodal.php' ?>

    <!----Sửa chuyên mục----->
    <?php include 'modals/editcategorymodal.php' ?>
</div>