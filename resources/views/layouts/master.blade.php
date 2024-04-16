<!doctype html>
<html lang="ja">
<head>
    @yield('head-script')
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    @if(isset($meta_seo))
        {!! $meta_seo ? $meta_seo->renderMetaSeo() : '' !!}
    @else
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="ROBOTS" content="{{ app()->environment('production') ? 'all' : 'NOINDEX, NOFOLLOW' }}">
        <title>@yield('title', 'Steerlink')</title>
    @endif
    @if(auth()->user())
        <meta name="user_id" content="{{ auth()->id() }}" id="meta-user-id">
    @endif
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('libs/fontawesome-free/css/all.min.css') }}">
    @yield('css')
    <style>
        ins.adsbygoogle[data-ad-status="unfilled"] {
            display: none !important;
        }
    </style>
</head>
<body>
@include('elements.header')
@yield('content')
@include('elements.footer')

<script>
    window.language = '{{ config('app.locale') }}'
</script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="https://kit.fontawesome.com/e67eec438f.js" crossorigin="anonymous"></script>
@yield('script')
</body>
</html>
