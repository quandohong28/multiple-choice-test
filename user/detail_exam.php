<section><!-- Start: Features Cards -->

    <div class="row">
        <div class="col-md-8 col-xl-6 text-center mx-auto mb-5">
            <h3 class="fw-bold">Kết quả bài thi</h3>
        </div>
    </div>
    <div class="container bg-primary-gradient p-lg-5 p-sm-2 mb-5">
        <div class="general-inf-user filter px-5 py-3 mb-5 bg-white shadow rounded">
            <div class="row">
                <div class="col-md-2">
                    <img src="https://github.com/mdo.png" alt="..." style="width: 150px; height: 150px;" class="rounded-circle">
                </div>
                <div class="col-md-9">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="col">
                            <div class="row custom-border">
                                <div class="col-md-12">
                                    <h4 class="text-primary text-uppercase">Le Van Thanh</h4>
                                    <h6>Bai thi: Toan thong ke</h6>
                                </div>
                            </div>
                            <div class="col-md-12">
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
            <h3 class="w-100 mb-2 text-center">Chi tiet bai thi</h3>
        </div>
        <div class="row row-cols-2"> 
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="col">
                    <ul class="list-group" style="list-style-type: none;">
                        <li>
                            <div class="filter px-3 py-3 mb-4 bg-white shadow rounded">
                                <div class="question px-3 py-3 rounded" style="background-color: #5c5c5c10;">
                                    <strong>Cau 1: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque debitis est, vel laborum ipsam quidem ducimus explicabo necessitatibus enim, perspiciatis culpa facere similique atque, voluptas ut esse! Modi, nam fugiat?</strong>
                                </div>
                                <ul class="p-0 m-0" style="list-style-type: none; font-size: 18px;">                        
                                    <li>
                                        <?php for ($j = 0; $j < 4; $j++) : ?>
                                            <div class="answer d-flex">
                                                <img style="height: 20px; margin-right: 5px;margin-top: 3px;" src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-circle-outline-256.png" alt="">
                                                <p class="text m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor blanditiis soluta</p>                                            
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
    </div>

</section>
