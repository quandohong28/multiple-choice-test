<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-3 text-gray-800">Danh sách chuyên mục</h1>
</div>

<a class="btn btn-info mb-2" href="?act=tables&data=add_category">Thêm chuyên mục</a>


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
                <a class="btn btn-warning btn-sm" href="?act=tables&data=edit_category"><i
                        class="fa-regular fa-pen-to-square"></i></a>
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


</div>