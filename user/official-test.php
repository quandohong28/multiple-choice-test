<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thi</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        article {
            width: 100%;
            height: 100%;
        }  
        
        .main {
            width: 80%; 
            margin: 0 auto;
        }

        .answer-questions .row {
            margin-left: 0;
            margin-right: 0;
        }

        .time {
            text-align: center;
        }
    </style>
</head>
<body>
    <article>
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <div class="zoom-size">
                </div>
                <div class="time">
                    <div class="title">
                        Thoi gian con lai:
                    </div>
                    <div class="countdown-time">
                        <span class="minutes">30</span>
                        <span class="space">:</span>
                        <span class="seconds">30</span>
                    </div>
                </div>
            </div>
        </header>
        <div class="main" style="height: 768px;">
            <div class="show-questions" style="width: 100%; margin: 25px 0 40px 0;">
                <div class="card mb-3" style="width: 100%;">
                    <div class="row g-0">
                        <div class="title">
                            <p>Cau 1: Chon cau tra loi dung</p>
                        </div>
                        <div class="col-md-4">
                            <img style="max-width: 500px;" src="https://f52-zpg-r.zdn.vn/634994283982957172/fa98b9f8fcac2bf272bd.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="answer-questions" style="width: 100%;">
                <div class="row row-cols-1 row-cols-md-4 g-4" style="display: flex; justify-content: space-between;">
                    <div class="card" style="width: 18rem;">
                        <img src="https://f52-zpg-r.zdn.vn/634994283982957172/fa98b9f8fcac2bf272bd.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://f52-zpg-r.zdn.vn/634994283982957172/fa98b9f8fcac2bf272bd.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://f52-zpg-r.zdn.vn/634994283982957172/fa98b9f8fcac2bf272bd.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://f52-zpg-r.zdn.vn/634994283982957172/fa98b9f8fcac2bf272bd.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="p-3 bg-dark text-white">
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <button type="button" class="btn btn-primary">Cau truoc</button>
                <div></div>
                <div data-v-60d7c50e="" data-v-7b4e0a1f="" class="flex items-center">
                    <div style="text-align: center;" data-v-60d7c50e="" class="bg-light bg-opacity-10 rounded-lg mr-2 text-lg font-medium overflow-hidden inline-flex justify-center items-center md:w-auto md:justify-start md:items-center text-unselectable animated fadeIn anim-300-duration rounded-edges py-2 px-2 md:py-2.5 md:px-3.5">
                        <span data-v-60d7c50e="" data-cy="current-question-number" class="text-sm leading-4 md:text-base md:leading-5">1</span>
                        <span data-v-60d7c50e="" class="total-questions">/45</span>
                    </div>
                </div>
                <div></div>
                <button type="button" class="btn btn-primary">Cau tiep theo</button>
            </div>
        </header>
    </article>
</body>
</html>