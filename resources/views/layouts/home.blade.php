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
                <div class="title-contents">
                    <div class="title-text-contents">
                        <a name="news"></a>
                        <h2>NEWS</h2>
                    </div>
                    <div class="news-list">
                        <ul class="slider">
                            <li><a href="#"><img src="{{ asset('img/item_1.jpg') }}"></a></li>
                            <li><a href="#"><img src="{{ asset('img/item_2.jpg') }}"></a></li>
                            <li><a href="#"><img src="{{ asset('img/item_3.jpg') }}"></a></li>
                            <li><a href="#"><img src="{{ asset('img/item_4.jpg') }}"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="main-contents">
                    <div class="title-text-contents">
                        <a name="newitems"></a>
                        <h2>NEW ITEMS</h2>
                    </div>
                    <div class="main-items-container">
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-category-area">
                                <p>Category：2018 10 22</p>
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history-contents">
                    <div class="title-text-contents">
                        <a name="historyitems"></a>
                        <h2>HISTORY ITEMS</h2>
                    </div>
                    <div class="history-item-list">
                        <div class="history-items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="history-items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="history-items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="history-items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                        <div class="history-items-container">
                            <div class="item-image-area">
                                <img src="{{ asset('img/item.png') }}" alt="商品">
                            </div>
                            <div class="item-text">
                                <p>Computer</p>
                            </div>
                        </div>
                    </div>
                </div>
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
