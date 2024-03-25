<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="http://pweb2324.test/themes/css/style.css">
</head>

<body>
    <header>
        {!! PageBuilder::section('head') !!}
        <div class="jumbotron" style="background: url(http://pweb2324.test/uploads/images/coaster2017/banner.jpg) no-repeat center"></div>
    </header>



    <section id="section1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="http://pweb2324.test">Home</a></li>
                        <li class="active">Conoce a nuestros directores</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h1>Conoce a nuestro equipo</h1>
                    <p class="lead">Este es nuestro equipo de trabajo para la Asignatura de Programación Web</p>
                    <p>Cristian y Myriam</p>
                </div>
                <div class="row text-center meetrow">

                    <div class="col-sm-4">
                        <img src="http://pweb2324.test/uploads/images/coaster2017/cristian.jpg" title="team" alt="team" class="img-responsive img-inline" width="180px">
                        <h3>Antonio Cristian Regina Puccini</h3>
                    </div>

                    <div class="col-sm-4">
                        <img src="http://pweb2324.test/uploads/images/coaster2017/team.jpg" title="team" alt="team" class="img-responsive img-inline">
                        <h3>Myriam</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        {!! PageBuilder::section('footer') !!}
    </footer>
</body>

</html>