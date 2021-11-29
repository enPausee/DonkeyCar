<div class="home-page">
    <div class="banner">
        <h1>Bienvenue sur Donkey Car</h1>
        <?php

use App\Model\MainModel;

include ROOT . '/src/View/parts/_showErrorsForm.php'?>
    </div>
    <div class="container container-one">
        <div class="row">
            <div class="col-md-4 box">
                <img class="img-fluid" src="./picture/asset/article-1.jpg" alt="">
                <div class="card__description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus iste esse nihil dolorum illo
                    numquam error, dolores, officiis corporis voluptatum accusantium et excepturi, eaque laboriosam
                    possimus distinctio molestias saepe nemo.
                </div>
            </div>
            <div class="col-md-4 box">
                <img class="img-fluid" src="./picture/asset/article-2.jpg" alt="">
                <div class="card__description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus iste esse nihil dolorum illo
                    numquam error, dolores, officiis corporis voluptatum accusantium et excepturi, eaque laboriosam
                    possimus distinctio molestias saepe nemo.
                </div>
            </div>
            <div class="col-md-4 box">
                <img class="img-fluid" src="./picture/asset/article-3.jpg" alt="">
                <div class="card__description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus iste esse nihil dolorum illo
                    numquam error, dolores, officiis corporis voluptatum accusantium et excepturi, eaque laboriosam
                    possimus distinctio molestias saepe nemo.
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <h2>Lorem ipsum dolor sit amet consectetur</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="./picture/asset/map_fr.webp" alt="" width="85%" height="288px">
            </div>
            <div class="col-md-6">
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide carousel-dark" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height: 864px;">
                <div class="carousel-item active">
                    <img src="<?php echo MainModel::getRandomPicture() ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo MainModel::getRandomPicture() ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo MainModel::getRandomPicture() ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card opinion-grp">
                    <div class="card-body">
                        <p class="opinion"><i class="fas fa-user-tie fa-3x"></i></p>
                        <p class="opinion-firstname">Stephen</p>
                        <p>Un super service.<br>
                            Je vous recommande ce site</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card opinion-grp">
                    <div class="card-body">
                        <p class="opinion"><i class="fas fa-user-secret fa-3x"></i></p>
                        <p class="opinion-firstname">James</p>
                        <p>Un super service.<br>
                            Je vous recommande ce site</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card opinion-grp">
                    <div class="card-body">
                        <p class="opinion"><i class="fas fa-user-nurse fa-3x"></i></p>
                        <p class="opinion-firstname">Julia</p>
                        <p>Un super service.<br>
                            Je vous recommande ce site</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<br><br><br><br>
