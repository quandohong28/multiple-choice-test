<div class="container">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 m-3 text-gray-800">List categories</h1>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Function</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td>R1C1</td>
                <td>R1C3</td>
                <td>
                    <img src="" alt="">
                </td>
                <td>
                    <a class="btn btn-warning" href="?act=edit_category">Edit</a>
                    <a onclick="return confirm('Bạn có xác nhận xóa ?');" class="btn btn-danger"
                        href="?act=delete_category">Delete</a>
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

    <a class="btn btn-info" href="?act=add_category">Add a category</a>

</div>
</div>