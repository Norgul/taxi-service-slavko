<!DOCTYPE HTML>
<html>
<head>
    <title>{{ strtoupper(env('APP_NAME')) }}</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}"/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="../../public/css/ie9.css"/><![endif]-->
    <noscript>
        <link rel="stylesheet" href="{{asset('/css/noscript.css')}}"/>
    </noscript>
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

@include('partials.header')

<!-- Main -->
    <div id="main">

        @include('partials.sections.intro')
        @include('partials.sections.work')
        @include('partials.sections.about')
        @include('partials.sections.contact')

        @include('partials.sections.elements')

    </div>

    @include('partials.footer')

</div>

<!-- BG -->
<div id="bg"></div>

<!-- Scripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/skel.min.js')}}"></script>
<script src="{{asset('js/util.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
