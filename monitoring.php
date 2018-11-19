<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PineApple</title>

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
                    <h1 class="display-4 titulo text-light text-center textstyle">Explore what we can do for you.</h1>
                    <p class="text-light text-center">We’re ready to be your product development partner.</p>
                </div>
            </div>
        </div>
    </header>
    <!--finaliza header-->
    <section class="categoria mt-5">
        <h2 class="text-center">Our monitoring real time</h2>
        <div class="container fluid mt-5">
            <canvas id="speedChart" width="300" height="100"></canvas>
            <canvas id="tiempo" width="300" height="100"></canvas>
        </div>
    </section>

    <div class="nuevo-pro bg-dark pb-5 pb-md-0">
        <div class="container">
            <div class="row align-item-center text-align-center py-5 text-md-left">
                <div class="col-md-6 text-light">
                    <h2>The new App is here!</h2>
                    <p>Download it.</p>
                    <a href="#" class="btn btn-outline-light">See more</a>
                </div>
                <div class="col-md-6">
                    <img src="img/fvr_pro.png" alt="img-fluid">
                </div>
            </div>
        </div>
    </div>

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

    <!--script para el monitoreo tiempo real-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        < script src = "https://code.jquery.com/jquery-3.3.1.min.js"
        integrity = "sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin = "anonymous" >
    </script>
    <script src="js/app.js"></script>


    <script type="text/javascript">
        $('document').ready(function () {
            let data = []
            let fecha = []
            let humedad = []
            let temperatura = []

            //grafica de magnitud
            var speedCanvas = document.getElementById("speedChart");
            var lineChart = new Chart(speedCanvas, {
                type: 'line',
                data: {},
                options: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            boxWidth: 80,
                            fontColor: 'black'
                        }
                    }
                }
            });
            //grafica de temeratura y humedad

            var speedCanvas = document.getElementById("tiempo");

            Chart.defaults.global.defaultFontFamily = "Lato";
            Chart.defaults.global.defaultFontSize = 18;

          

            setInterval(function () {
                getRealData()
            }, 2000); //request every x seconds


            cargarRegistros = function (registros) {
                data = []
                fecha = []
                humedad = []
                 temperatura = []
                for (var i = 0; i < registros.items.length; i++) {
                    data.push(parseFloat(registros.items[i]['magnitud']));
                    fecha.push(registros.items[i]['fecha']);
                    humedad.push(parseInt(registros.items[i]['humedad']));
                    temperatura.push(parseInt(registros.items[i]['temperatura']));
                }
                data.reverse();
                fecha.reverse();
             humedad.reverse();
             temperatura.reverse();
                console.log(data);
            };

            function getRealData() {
                $.ajax({
                    data: {},
                    url: "http://localhost:8080/apiPineApple/obtenerRegistros.php",
                    type: 'GET',
                    cache: false,
                    success: function (response) {
                        var registros = JSON.parse(response);
                        cargarRegistros(registros);
                        draw()
                    },
                    error: function (response, status, error) {
                        alert("no encontrado")
                    }
                })
            }



            function draw() {
                Chart.defaults.global.defaultFontFamily = "Lato";
                Chart.defaults.global.defaultFontSize = 18;

                // if(fecha.length >= 100)
                //     fecha = fecha.splice(90,)

                lineChart.data.labels = [...fecha]
                lineChart.data.datasets = [{
                    label: "monitoring system",
                    data: [...data],
                }]


                  var dataFirst = {
                label: "Humedad",
                data: [...humedad],
                lineTension: 0.3,
                fill: false,
                borderColor: 'red',
                backgroundColor: 'transparent',
                pointBorderColor: 'red',
                pointBackgroundColor: 'lightgreen',
                pointRadius: 5,
                pointHoverRadius: 15,
                pointHitRadius: 30,
                pointBorderWidth: 2,
                pointStyle: 'rect'
            };

            var dataSecond = {
                label: "Temperatura",
                data: [...temperatura],
                lineTension: 0.3,
                fill: false,
                borderColor: 'purple',
                backgroundColor: 'transparent',
                pointBorderColor: 'purple',
                pointBackgroundColor: 'lightgreen',
                pointRadius: 5,
                pointHoverRadius: 15,
                pointHitRadius: 30,
                pointBorderWidth: 2
            };

                var speedData = {
                labels: [...fecha],
                datasets: [dataFirst, dataSecond]
            };

            var chartOptions = {
                legend: {
                    display: true,
                    position: 'top',
                    labels: {
                        boxWidth: 80,
                        fontColor: 'black'
                    }
                }
            };

            var lineChart2 = new Chart(speedCanvas, {
                type: 'line',
                data: speedData,
                options: chartOptions
            });
            lineChart2.update();
                lineChart.update();
            }

            
        });
    </script>
</body>

</html>