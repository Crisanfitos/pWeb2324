<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <header>
        {!! PageBuilder::section('head') !!}
        <div class="jumbotron" style="background: url(http://pweb2324.test/uploads/images/coaster2017/banner.jpg) no-repeat center"></div>
    </header>

    <section>
        <h1>Hola mundo</h1>
        <article>
            <h3>
                Título del blog
            </h3>
            <p>
                Descripción
            </p>

            <section id="section1">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="http://pweb2324.test">Home</a></li>
                            <li class="active">Meet the Team</li>

                        </ul>
                    </div>
                </div>
            </section>

        </article>
    </section>

    <footer>
        {!! PageBuilder::section('footer') !!}
    </footer>
</body>

</html>