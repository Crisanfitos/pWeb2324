{!! PageBuilder::section('head') !!}

<div class="jumbotron" style="background: url({{ PageBuilder::block('internal_banner', ['view' => 'raw']) }}) no-repeat center"></div>

<section id="sec1">
    <div class="container">

        {!! PageBuilder::breadcrumb() !!}

        <div class="row">
            <div class="col-sm-12">
                {!! PageBuilder::img('404grupo1.jpg') !!}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <p class="errorpage_1">oops, {!! $error !!} ...</p>
                <p class="errorpage_2">Error: 404</p>
                <p>We couldn't find the page you requested on our servers. We're really sorry about that. It's our fault, not yours. We'll work hard to get this page back online as soon as possible.</p>
            </div>
        </div>

    </div>
</section>

{!! PageBuilder::section('footer') !!}