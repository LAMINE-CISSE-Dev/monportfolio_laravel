
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mon Portfolio - Lamine CISSE</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="admin/assets/logo.png" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="style/media.css">
        
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
                <div class="container px-5">
                    <a class="navbar-brand" href="home"><img src="admin/assets/logo.png" width="75" height="75" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="home">Acceuil</a></li>
                            <li class="nav-item"><a class="nav-link" href="resume">Parcours</a></li>
                            <li class="nav-item"><a class="nav-link" href="projet">Projets</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="py-3">
                <div class="container px-5 pb-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-md-5">
                            <!-- Header text content-->
                            <div class="text-center text-xxl-start">
                                <div class="couleur mb-4"><div class="text-uppercase">DEVELOPPEUR WEB ET MOBILE</div></div>
                                <div class="fs-3 fw-light text-muted">Je m'appelle Lamine CISSE</div>
                                <h1 class="display-3 fw-bolder mb-5"><span class=" d-inline">Je suis aussi un Designer</span></h1>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                    <a class="btn bouton1 btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume">Parcours</a>
                                    <a class="btn btn-outline-dark bouton2 btn-lg px-5 py-3 fs-6 fw-bolder" href="projet">Projets</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <!-- Header profile picture-->
                            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                                <div class="">
                                    <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                    <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                    <img class="profile-img rounded-3" height="600" width="600" src="admin/assets/lamine.png" alt="..."/>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About Section-->
            <section class="bg-light py-5">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-xxl-8">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder entete"><span class="d-inline">A propos de moi</span></h2>
                                <p class="lead fw-light mb-4">Je m'appelle Lamine CISSE et I help brands grow.</p>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                                <div class="d-flex justify-content-center fs-2 gap-4">
                                    <a class="couleurs" href="https://twitter.com/home"><i class="bi bi-twitter"></i></a>
                                    <a class="couleurs" href="https://www.linkedin.com/in/lamine-cisse-1a674322b/"><i class="bi bi-linkedin"></i></a>
                                    <a class="couleurs" href="https://gitlab.com/lamine-cisse"><i class="bi bi-github"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="text-center">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Lamine CISSE 2023</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('admin/js/scripts.js')}}"></script>
    </body>
</html>
