<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/common.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="./common.css">
        <title>@yield('title')</title>
    </head>
    <body>
        <div id="contents-area">
            <div id="header-content-area">
                <div class="header-contents">
                    {{-- 共通ヘッダー --}}
                </div>
            </div>
            <div id="main-contents-area">
                <div class="title-contents">
                    <h1>練習用</h1>
                    {{-- 商品紹介ヘッダー --}}
                    @yield('content')
                </div>
                <div class="main-contents">
                    {{-- 専用コンテンツ --}}
                </div>
            </div>
            <div id="footer-contents-area">
                <div class="footer-contents">
                    {{-- 共通フッター --}}
                </div>
            </div>
        </div>
    </body>
</html>
