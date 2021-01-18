<?php
    require(__DIR__ . '/base.php');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED EDGE</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class=" navbar-container">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <a class="navbar-brand brand-header" href="#"></a>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Услуги</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Портфолио</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Отзывы</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Вакансии</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="#">Контакты</a>
                      </li>
                    </ul>
                    <div class="header-right">
                        <div class="header-adress d-flex justify-content-end">Ростов-на-Дону, Ленина, 21</div>
                        <div class="header-number">8(863)243-15-10</div>
                    </div>
                    <!-- <div class="header-right-lg">
                      <div class="header-adress d-flex justify-content-end">Ростов-на-Дону</div>
                      <div class="header-number">8(863)243-15-10</div>
                    </div> -->
                  </div>
                  <div class="header-right-lg">
                    <div class="header-number-lg">8(863)243-15-10</div>
                    <div class="header-adress-lg d-flex justify-content-end">Ростов-на-Дону</div>
                  </div>
                </div>
              </nav>
        </div>
    </header>

    <section class="section-one">  
        <div class="container-one">
            <div class="container">
                <h1 class="h1-section-one text-white">Рекламно-информативное агенство</h1>
                <p class="text-section-one text-white">Будем рады, если Вы обратитесь в наше Агентство. Мы готовы предложить Вам передовые решения для продвижения Вашего бизнеса.</p>
                <form action="https://jsonplaceholder.typicode.com/posts" autocomplete="on" method="POST">
                    <input minlength="10" maxlength="11" required type="tel" name="number" placeholder="Номер телефона" class="one-form">
                    <button type="submit" class="one-button text-white">
                        Обратный звонок
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="section-two">
        <div class="container container-two">
            <h1 class="text-center">Новости</h1>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel!">
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div>
                    <div class="card red-card">
                    
                    </div>
                </div>
                <div>
                    <div class="card purple-card">
                    
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">15.10.2020</h5>
                                      <!-- <p class="card-text">Акции на размещение баннерного панно 20% до конца июля</p> -->
                                      <p class="card-text"><?php print "$news[0]" ?></p>
                                      <a href="#" class="btn btn-primary">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">15.10.2020</h5>
                                      <p class="card-text">Мы работаем в обычном режиме с 15 июня!</p>
                                      <a href="#" class="btn btn-primary">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-end">
                                    <div class="card-body">
                                      <h5 class="card-title">15.10.2020</h5>
                                      <p class="card-text">Как правильно подобрать рекламный канал?</p>
                                      <a href="#" class="btn btn-primary">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-between">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">15.10.2020</h5>
                                      <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi at, a voluptates iure laudantium nulla odio nam possimus cupiditate laborum maxime accusamus, optio autem dolores ut harum aspernatur numquam reiciendis.</p>
                                      <a href="#" class="btn btn-primary">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">15.10.2020</h5>
                                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio temporibus exercitationem natus doloremque perferendis fuga reiciendis cum culpa nemo consectetur dolores facilis amet quasi autem repudiandae porro sed, quam error.</p>
                                      <a href="#" class="btn btn-primary">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-end">
                                    <div class="card-body">
                                      <h5 class="card-title">15.10.2020</h5>
                                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio temporibus exercitationem natus doloremque perferendis fuga reiciendis cum culpa nemo consectetur dolores facilis amet quasi autem repudiandae porro sed, quam error.</p>
                                      <a href="#" class="btn btn-primary">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-between">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">15.10.2020</h5>
                                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio temporibus exercitationem natus doloremque perferendis fuga reiciendis cum culpa nemo consectetur dolores facilis amet quasi autem repudiandae porro sed, quam error.</p>
                                      <a href="#" class="btn btn-primary">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">15.10.2020</h5>
                                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio temporibus exercitationem natus doloremque perferendis fuga reiciendis cum culpa nemo consectetur dolores facilis amet quasi autem repudiandae porro sed, quam error.</p>
                                      <a href="#" class="btn btn-primary">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card card-end">
                                    <div class="card-body">
                                      <h5 class="card-title">15.10.2020</h5>
                                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio temporibus exercitationem natus doloremque perferendis fuga reiciendis cum culpa nemo consectetur dolores facilis amet quasi autem repudiandae porro sed, quam error.</p>
                                      <a href="#" class="btn btn-primary">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a> -->
              </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid navbar-container">
                  <a class="navbar-brand position-absolute" href="#"></a>
                    <ul class="navbar-nav navbar-footer mx-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link nav-footer text-white" href="#">Услуги</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-footer text-white" href="#">Портфолио</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-footer text-white" href="#">Отзывы</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-footer text-white" href="#">Вакансии</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link nav-footer text-white" href="#">Контакты</a>
                      </li>
                    </ul>
                </div>
              </nav>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>