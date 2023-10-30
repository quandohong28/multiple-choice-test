<section><!-- Start: Features Cards -->

    <div class="row">
        <div class="col-md-8 col-xl-6 text-center mx-auto mb-5">
            <h3 class="fw-bold">Kết quả thi</h3>
        </div>
    </div>
    <div class="container bg-primary-gradient p-lg-5 p-sm-2 mb-5">
        <div class="filter px-5 py-3 mb-5 bg-white shadow rounded">
            <nav class="navbar navbar-expand-lg navbar-light  ">
                <div class="collapse navbar-collapse" id="navbarNav"> 
                    <ul style="margin: auto; display: flex; justify-content: center;" class="navbar-nav">
                        <li class="nav-item" onclick="showIframe('iframe1')">
                            <a class="nav-link" href="#">Bảng điểm chung</a>
                        </li>
                        <li class="nav-item" onclick="showIframe('iframe2')">
                            <a class="nav-link" href="#">Thi thật</a>
                        </li>
                        <li class="nav-item" onclick="showIframe('iframe3')">
                            <a class="nav-link" href="#">Thi thử</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Iframes -->
        <div id="iframe1" class="iframe-container active-iframe filter px-5 py-3 bg-white shadow rounded">
            <div class="row">
                <div class="col-sm-6 text-left"></div>
                <div class="col-sm-6 text-right">
                    <div class="dt-buttons btn-group float-end">          
                        <button class="btn btn-success rounded-0 py-1 px-2 buttons-print" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <span>Print</span> 
                        </button> 
                        <button class="btn btn-success rounded-0 py-1 px-2 buttons-copy buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <span>Copy</span>
                        </button> 
                        <button class="btn btn-success rounded-0 py-1 px-2 buttons-excel buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <span>Excel</span>
                        </button> 
                        <button class="btn btn-success rounded-0 py-1 px-2 buttons-csv buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                            <span>CSV</span>
                        </button> 
                        <button class="btn btn-success rounded-0 py-1 px-2 buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0" type="button">
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
                                <a href="?act=detail_exam" class="badge bg-primary">Xem chi tiết</a>
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
        </div>
        <div id="iframe2" class="iframe-container filter px-5 py-3 bg-white shadow rounded">
            <section class="mb-5">
                <span><i class="fa-solid fa-list me-3"></i></span>
                <span>Danh sách bài thi</span>
                <hr>
            </section>
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
                                <a href="?act=detail_exam" class="btn text-primary font-weight-bold underlined">Xem kết quả</a>
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
        </div>
        <div id="iframe3" class="iframe-container filter px-5 py-3 bg-white shadow rounded">
            <section class="mb-5">
                <span><i class="fa-solid fa-list me-3"></i></span>
                <span>Danh sách bài thi</span>
                <hr>
            </section>
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
                            <td>Thi thu</td>
                            <td>
                                <a href="?act=detail_exam" class="btn text-primary font-weight-bold underlined">Xem kết quả</a>
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
        </div>
    </div>


</section>