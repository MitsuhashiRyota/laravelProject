<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/common.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet"/>
        <title>@yield('title')</title>
    </head>
    <body>
        <div id="contents-area">
            <div id="header-content-area">
                <div class="header-contents">
                    <a name="home"></a>
                    <h2>Laravel Sample Site</h2>
                </div>
                <div class="search-contents">
                    <form method="post" action="#" class="search_container">
                        <input type="text" size="25" placeholder="キーワード検索">
                        <input type="submit" value="&#xf002">
                    </form>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/items.png') }}" alt="商品一覧" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               <img src="{{ asset('img/cart.png') }}" alt="カート">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('img/users.png') }}" alt="ログイン">
                            </a>
                        </li>
                    </ul>
                    <div class="menu-area">
                        <div class="scroll-header-search hide">
                            <form method="post" action="#" class="search_container">
                                <input type="text" size="25" placeholder="キーワード検索">
                                <input type="submit" value="&#xf002">
                            </form>
                        </div>
                        <div class="menu-text">
                            <a href="#home">HOME</a>
                        </div>
                        <div class="menu-text">
                            <a href="#news">NEWS</a>
                        </div>
                        <div class="menu-text">
                            <a href="#newitems">NEW ITEMS</a>
                        </div>
                        <div class="menu-text">
                            <a href="#historyitems">HISTORY ITEMS</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="main-contents-area">
                @yield('content')
            </div>
            <div id="footer-contents-area">
                <div class="footer-contents">
                    <h2>COPYRIGHT © MITSULAB ALL RIGHTS RESERVED.</h2>
                    <div class="footer-social-icon-contents">
                        <img src="{{ asset('img/Facebook.png') }}" alt="Facebook" class="social-icon">
                        <img src="{{ asset('img/Twitter.png') }}" alt="Twitter" class="social-icon">
                    </div>
                </div>
            </div>
        </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    </body>
</html>
