<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chi tiết lịch thi</h6>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <?php include '../components/filter.php' ?>
        </div>
        <div class="row mb-3">
            <div class="col">
                <a class="btn btn-sm btn-info" href="?act=tables&data=add_candidate">Thêm thí sinh</a>
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
                        <th scope="col">Mã thí sinh</th>
                        <th scope="col">Họ và tên thí sinh</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Mã thí sinh</th>
                        <th scope="col">Họ và tên thí sinh</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr class="">
                        <td>R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                        <td class="col-1">
                            <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger btn-sm mx-4" href="?act=tables&data=del_candidate"><i class="fa fa-trash"></i></a>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php include '../components/pagination.php' ?>
    </div>
</div>