<!doctype html>
<html lang="en">

<head>
    <title>fvr</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header-scroll">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-2 pt-3">
                    <a href="index.php">
                        <img src="img/log.png" alt="">
                    </a>
                </div>
                <div class="col-sm-8 col-md-3">
                    <form action="#" class="busqueda">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="What service are you looking for?"
                                requiered>
                            <div class="input group-append">
                                <input type="submit" value="Search" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
                <!--col-sm-6-->
                <div class="col-md-7">
                    <nav class="nav d-flex justify-content-end " id="menuPrincipal">
                        <a href="aboutus.php" class="nav-link">ABOUT US</a>
                        <a href="monitoring.php" class="nav-link">MONITORING</a>
                        <a href="ourservices.php" class="nav-link">OUR SERVICES</a>
                        <a href="contactus.php" class="nav-link">CONTACT US</a>
                        <a href="login.php" class="btn btn-outline-light text-light">LOGIN</a>
                    </nav>
                </div>
            </div>
            <!--row-->
        </div>
        <!--container-->
        <hr class="m-1">
        <div class="container-fluid pd-2">
            <nav class="nav justify-content-between">
                <a href="#" class="nav-link">UX/UI design</a>
                <a href="#" class="nav-link">Web development</a>
                <a href="#" class="nav-link">Mobile development</a>
                <a href="#" class="nav-link">Embed Systems</a>
            </nav>
        </div>
    </div>
    <header class="header pt-4">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4 pl-5">
                    <a href="index.php">
                        <img src="img/log.png" alt="">
                    </a>
                </div>
                <div class="col-md-8">
                    <nav class="nav d-flex justify-content-end flex-column flex-md-row">
                        <a href="aboutus.php" class="nav-link">ABOUT US</a>
                        <a href="monitoring.php" class="nav-link">MONITORING</a>
                        <a href="ourservices.php" class="nav-link">OUR SERVICES</a>
                        <a href="contactus.php" class="nav-link">CONTACT US</a>
                        <a href="login.php" class="btn btn-outline-light text-light">LOGIN</a>
                    </nav>
                </div>
            </div>
        </div>
        <!--container-->
        <div class="container">
            <div class="row justify-content-center buscador align-items-center">
                <div class="col-md-10">
                    <h1 class="display-4 titulo text-light text-center textstyle">We are ready to start your project.</h1>
                    <p class="text-light text-center">Get in touch with us.</p>
                </div>
            </div>
        </div>
    </header>
    <!--finaliza header-->
    <main class="py-5 contactoPage">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="#">
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label">Name (Required)</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">Email (Required)</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" id="email" name="email" placeholder="Ingrese su correo">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mensaje" class="col-md-4 col-form-label">Message (Required)</label>
                            <div class="col-md-8">
                                <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Ingrese su mensaje"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4 " style=" text-align: center;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h2>
                        What to expect:</h2>
                    <p>
                        Send us your questions, tell us your ideas and let's start working together.
                        We’ll get in touch within 24 hours with pricing info and to set up a chat
                        Need us to sign an NDA? Send it along and we’ll get right on it
                        Try us risk free for two weeks to make it easier to get a feel for our capabilities</p>

                    <h2>
                        Email:</h2>
                        <p>Primary:</p>
                        <a href="#">contact@pineapple.com</a>
                        <p>Jobs:</p>
                        <a href="#">careers@pinneapple.com</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer bg-light " id="hola">
        <div class="container-fluid">
            <div class="widget py-5">
                <h3>COMPANY</h3>
                <div class="nav flex-column">
                    <a href="#" class="nav-link">About us</a>
                    <a href="#" class="nav-link">Carrers</a>
                </div>
            </div>
            <!--widget-->
            <div class="widget py-5">
                <h3>LEGAL</h3>
                <div class="nav flex-column">
                    <a href="#" class="nav-link">Code of conduct</a>
                    <a href="#" class="nav-link">Imprint</a>
                    <a href="#" class="nav-link">Terms & conditions</a>
                    <a href="#" class="nav-link">Privacy policy</a>
                </div>
            </div>
            <!--widget-->
            <div class="widget py-5">
                <h3>PRODUCT</h3>
                <div class="nav flex-column">
                    <a href="#" class="nav-link">For buyers</a>
                    <a href="#" class="nav-link">For manufacturers</a>
                    <a href="#" class="nav-link">How It work</a>
                </div>
            </div>
            <!--widget-->
            <div class="widget py-5">
                <h3>OUR SERVICES</h3>
                <div class="nav flex-column">
                    <a href="#" class="nav-link">UX/UI design</a>
                    <a href="#" class="nav-link">Web development</a>
                    <a href="#" class="nav-link">Mobile development</a>
                    <a href="#" class="nav-link">Embed Systems</a>
                </div>
            </div>
            <!--widget-->
            <div class="widget py-5">
                <h3>CONTACT US</h3>
                <div class="nav flex-column">
                    <a href="#" class="nav-link">Contact us</a>
                </div>
            </div>
            <!--widget-->
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>

</html>