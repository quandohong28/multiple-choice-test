<?php
$kind = $_GET['kind'];
if ($kind == 'that') {
    $title = 'Thi thật';
    // caau truy van ra du lieu cua bang thi that
} else {
    $title = 'Thi thử';
    // caau truy van ra du lieu cua bang thi thu
}
?>

<section class="mb-5 filter px-5 py-3 bg-white shadow rounded">
    <span><i class="fa-solid fa-list me-3"></i></span>
    <span>Danh sách bài thi</span>
    <hr>
    <table class="table table-sm  align-middle text-center my-5">
        <thead>
            <tr>
                <th class="small p-2" scope="col">
                    <a href="?act=result&sortbyindex">
                        STT
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th>
                <th class="small p-2" scope="col">
                    <a href="?act=result&sortbydate">
                        Tên bài thi
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th> 
                <th class="small p-2" scope="col">
                    <a href="?act=result&sortbyindex">
                        Hình thức   
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th> 
                <th class="small p-2" scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < 10; $i++) : ?>
                <tr>
                    <td scope="row"><?php echo $i+1;?></td>
                    <td>fasfdsloremloremloremloremlorem</td>
                    <td>Thi that</td>
                    <td>
                        <a href="?act=result&nav=detail_exam" class="btn text-primary font-weight-bold underlined">Xem kết quả</a>
                    </td>
                </tr> 
                <?php endfor; ?>
            </tbody>
        </table>
        
        <!-- Page number -->
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
</section>