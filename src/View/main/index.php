<div class="home-page">
    <div class="banner">
        <h1>Bienvenue sur Donkey Car</h1>
        <?php include ROOT . '/src/View/parts/_showErrorsForm.php'?>
        <form>
            <div class="wrapper">
                <div class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success search" name="search" type="submit">Search</button>
                </div>
                <div class="container-datepicker">
                    <input type="date" name="fromDate" id="fromDate">
                    <input type="date" name="toDate" id="toDate">
                </div>
            </div>
        </form>
    </div>
    <div class="container container-one">
        <div class="row">
            <div class="col-md-4 box">
                <img class="img-fluid" src="https://via.placeholder.com/468x200" alt="">
                <div class="card__description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus iste esse nihil dolorum illo
                    numquam error, dolores, officiis corporis voluptatum accusantium et excepturi, eaque laboriosam
                    possimus distinctio molestias saepe nemo.
                </div>
            </div>
            <div class="col-md-4 box">
                <img class="img-fluid" src="https://via.placeholder.com/468x200" alt="">
                <div class="card__description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus iste esse nihil dolorum illo
                    numquam error, dolores, officiis corporis voluptatum accusantium et excepturi, eaque laboriosam
                    possimus distinctio molestias saepe nemo.
                </div>
            </div>
            <div class="col-md-4 box">
                <img class="img-fluid" src="https://via.placeholder.com/468x200" alt="">
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
                <img class="img-fluid" src="https://via.placeholder.com/468x200" alt="">
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
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="picture/bugatti-electric.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="picture/chiron.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="picture/mansory-bugatti-chiron.png" class="d-block w-100" alt="...">
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