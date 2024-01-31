
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
        <link rel="stylesheet" href="style/media.css"
    </head>
    <body class="d-flex flex-column h-100 bg-light">
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
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="row mb-4">
                    <div class="col-md-6">
                       <img src="admin/assets/Book1.png" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="admin/assets/Book2.png" alt="">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                       <img src="admin/assets/Book3.png" alt="">
                    </div>
                    <div class="col-md-6">
                       <img src="admin/assets/duree1.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="admin/assets/duree2.png" alt="">
                    </div>
                    <div class="col-md-6">
                       <img src="admin/assets/doctor_app.png" alt="">
                    </div>
                </div>
            </div>
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
