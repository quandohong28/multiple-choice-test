<section><!-- Start: Features Cards -->
    <div class="col-md-8 col-xl-6 text-center mx-auto">
        <h3 class="fw-bold">Kết quả bài thi</h3>
    </div>
    <div class="container bg-primary-gradient p-lg-5 p-sm-2">
        <div class="general-inf-user filter px-5 py-3 bg-white shadow rounded">
            <div class="row">
                <div class="col-md-2">
                    <img src="https://github.com/mdo.png" alt="..." style="width: 150px; height: 150px;" class="rounded-circle">
                </div>
                <div class="col-md-9">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="col">
                            <div class="col-md-12 pb-1 border-bottom">
                                <h4 class="text-primary text-uppercase">Đỗ Hồng Quân</h4>
                                <h6>Bai thi: Toan thong ke</h6>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="col d-flex">
                                    <div class="card-body">
                                        <h5 class="card-title">Diem: 8</h5> 
                                    </div> 
                                    <div class="card-body">
                                        <h5 class="card-title">So cau dung: 8</h5> 
                                    </div> 
                                    <div class="card-body">
                                        <h5 class="card-title">So cau sai: 2</h5> 
                                    </div> 
                                    <div class="card-body">
                                        <h5 class="card-title">Thoi gian lam bai: 20'</h5> 
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="title">
            <h4 class="w-100 mb-3 text-center">Chi tiet bai thi</h4>
        </div>
        <div class="row row-cols-2"> 
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="col">
                    <ul class="list-group" style="list-style-type: none;">
                        <li>
                            <div class="filter px-3 py-3 mb-4 bg-white border rounded">
                                <div class="question px-3 py-2 mb-2" style="background-color: #5c5c5c10; border-radius: .3rem">
                                    <strong>Cau 1: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque debitis est, vel laborum?</strong>
                                </div>
                                <ul class="p-0 m-0" style="list-style-type: none; font-size: 18px;">                        
                                    <li>
                                        <?php for ($j = 0; $j < 4; $j++) : ?>
                                            <div class="answer d-flex">
                                                <img class="ms-1 mt-1 pe-1" style="height: 20px" src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-circle-outline-256.png" alt="">
                                                <p class="text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.solor blanditiis soluta</p>                                            
                                            </div>
                                        <?php endfor; ?>
                                    </li>
                                </ul>  
                            </div>                                  
                        </li>
                    </ul>
                </div> 
            <?php endfor; ?>
        </div>
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

</section>
 