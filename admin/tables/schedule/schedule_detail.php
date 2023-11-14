<section class="bg-gradient-light p-5 rounded-3 mb-5 min-vh-100">
    <h5 class="text-dark mb-5">Chi tiết lịch thi</h5>


    <div class="row mb-3">
        <div class="col">
            <a class="btn btn-sm btn-info" href="?act=tables&data=add_candidate">Thêm thí sinh</a>
        </div>
        <div class="col">
            <?php include '../components/data_export.php' ?>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Mã thí sinh</th>
                <th scope="col">Họ và tên thí sinh</th>
                <th scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td>R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
                <td class="d-flex">
                    <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm mx-4" href="?act=tables&data=del_candidate"><i class="fa fa-trash"></i></a>

                </td>
            </tr>
        </tbody>
    </table>
    <nav>
        <?php include '../components/pagination.php'?>
    </nav>


    </div>
</section>