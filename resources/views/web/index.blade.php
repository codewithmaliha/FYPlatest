<!doctype html>
<html class="no-js" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgriConnect | Your Agriculture Partner</title>
    <meta name='robots' content='max-image-preview:large' />

    
@include('web.frontend.layouts.header')

</head>

<body class="home page-template-default page page-id-636 theme-backhoe woocommerce-no-js wd_page_transitions wpb-js-composer js-comp-ver-6.13.0 vc_responsive">
    <div class="page-loading">
        <div class="spinner-loading">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <div id="spaces-main" class="pt-perspective ">


        @include('web.frontend.layouts.navbar')

        @yield('main-container')

    </div>

    @include('web.frontend.layouts.footer')

</body>
</html>
