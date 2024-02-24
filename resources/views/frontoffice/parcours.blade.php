
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
        <link rel="stylesheet" href="style/media.css"/>
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white shadow">
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
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0 entete pt-5"><span class=" d-inline">Resume</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0 entete2">Experience</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <a class="btn btn-primary px-2 py-3 bouton-cv" href="admin/assets/lamine-cisse.pdf" download="CV-de-Lamine-CISSE">
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Télégargez le cv
                                </a>
                            </div>
                            <!-- Experience Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                @foreach($experience as $rem)
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-primary fw-bolder mb-2">{{$rem->annee}}</div>
                                                <div class="small fw-bolder">{{$rem->poste}}</div>
                                                <div class="small text-muted">{{$rem->entreprise}}</div>
                                                <div class="small text-muted">{{$rem->location}}</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>{{$rem->description}}</div></div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            
                           
                        <!-- Education Section-->
                        <section>
                            <h2 class="fw-bolder mb-4 entete2">Education</h2>
                            <!-- Education Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    @foreach($education as $rem)
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0 mt-3">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="entete2 fw-bolder mb-2">{{$rem->annee}}</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">{{$rem->lieu}}</div>
                                                    <div class="small text-muted">{{$rem->diplome}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>{{$rem->description}}</div></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                
                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature gradient text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0 entete2"><span class=" d-inline">Professional Skills</span></h3>
                                        </div>
                                        @foreach($skills as $rem)
                                        <div class="row row-cols-1 row-cols-md-3 mb-4  d-flex justify-content-around">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{$rem->skills}}</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{$rem->skills2}}</div></div>
                                        </div>
                                    @endforeach
                                        
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature gradient text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0 entete2"><span class=" d-inline">Languages</span></h3>
                                        </div>
                                   @foreach($langage as $rem)

                                        <div class="row row-cols-1 row-cols-md-3 mb-4 d-flex justify-content-around">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{$rem->langage}}</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">{{$rem->langage2}}</div></div>
                                        </div>
                                    @endforeach

                                    </div>
                                </div>
                            </div>
                        </section>
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
