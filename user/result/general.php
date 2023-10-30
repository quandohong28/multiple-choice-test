<section class="filter px-5 py-3 bg-white shadow rounded">
    <div class="row">
        <div class="col-sm-6 text-left"></div>
        <div class="col-sm-6 text-right mb-3">
            <div class="dt-buttons btn-group float-end">          
                <button class="btn btn-success rounded-0 py-1 px-2 me-2  buttons-print" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                    <i class="fa-solid fa-print me-2"></i>
                    <span>Print</span> 
                </button> 
                <button class="btn btn-success rounded-0 py-1 px-2 me-2  buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                    <i class="fa-solid fa-copy me-2"></i>
                    <span>Copy</span>
                </button> 
                <button class="btn btn-success rounded-0 py-1 px-2 me-2  buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                    <i class="fa-solid fa-file-export me-2"></i>
                    <span>Excel</span>
                </button> 
                <button class="btn btn-success rounded-0 py-1 px-2 me-2  buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                   <i class="fa-solid fa-file-csv me-2"></i>
                   <span>CSV</span>
                </button> 
                <button class="btn btn-success rounded-0 py-1 px-2 buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                    <i class="fa-solid fa-file-pdf me-2"></i>
                    <span>PDF</span>
                </button> 
            </div>
        </div>
    </div>
    <table class="table table-sm table-bordered align-middle text-center my-3">
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
                    <a href="?act=result&sortbylocation">
                        Điểm    
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th>
                <th class="small p-2" scope="col">
                    <a href="?act=result&sortbyindex">
                        Phân loại
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th> 
                <th class="small p-2" scope="col">
                    <a href="?act=result&sortbyindex">
                        Trạng thái
                        <span class="ms-2"><i class="fa-solid fa-sort"></i></span>
                    </a>
                </th> 
                <th class="small p-2" scope="col">Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < 10; $i++) : ?>
                <tr>
                    <td class="py-3" scope="row"><?php echo $i+1;?></td>
                    <td class="py-3">fasfdsloremloremloremloremlorem</td>
                    <td class="py-3">9</td>
                    <td class="py-3">fasnfdkedskfhkasdf</td>
                    <td class="py-3">Dat</td>
                    <td class="py-3">
                        <a href="?act=result&nav=detail_exam" class="badge bg-primary">Xem chi tiết</a>
                    </td>
                </tr> 
            <?php endfor; ?>
        </tbody>
    </table>

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