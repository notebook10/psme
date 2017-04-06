<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PSME | {!! Theme::get('title') !!}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="{!! Theme::get('keywords') !!}">
        <meta name="description" content="{!! Theme::get('description') !!}">
        {{--{!! Theme::asset()->styles() !!}--}}
        {{--{!! Theme::asset()->scripts() !!}--}}
        <link href = "images/psme-logo2.png" rel="icon" type="image/png">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/unite-gallery.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-glyphicons.css') }}">
{{--        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">--}}
        {{--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

        <script src="{{ asset('js/jquery-3.1.1.js') }}"></script>
        <script src="{{ asset('js/unitegallery.js') }}"></script>
        <script src="{{ asset('js/ug-theme-tiles.js') }}"></script>
        <script src="{{ asset('js/player.js') }}"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </head>
    <body>
        {!! Theme::partial('header') !!}

        <div class="container-fluid">
            {!! Theme::content() !!}
        </div>

        {!! Theme::partial('footer') !!}

        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
