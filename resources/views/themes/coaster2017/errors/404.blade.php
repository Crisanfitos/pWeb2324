{!! PageBuilder::section('head') !!}

<div class="jumbotron" style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        {!! PageBuilder::breadcrumb() !!}

        <div class="container text-center">
            <div>
                <!-- {!! PageBuilder::img('_f226f71f-ca5e-4e23-a05d-abb3ea4652a5.jpg') !!} -->
                <img src="http://pWeb2324.test/themes/coaster2017/img/_f226f71f-ca5e-4e23-a05d-abb3ea4652a5.jpg" alt="imagen 404 error" width="500" height="500">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <p class="errorpage_1">oops, {!! $error !!} ...</p>
                <p class="errorpage_2">Error: 404</p>
                <p>We couldn't find the page you requested on our servers. We're really sorry about that. It's our fault, not yours. We'll work hard to get this page back online as soon as possible.</p>
            </div>
        </div>

    </div>
</section>

{!! PageBuilder::section('footer') !!}