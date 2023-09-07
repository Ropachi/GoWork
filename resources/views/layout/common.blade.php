<DOCTYPE HTML>
    <html lang="ja">

    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

        @yield('pageCss')
    </head>

    <body>
        @yield('header')
        @yield('login')
        @yield('logout')

        <!-- content -->
        <div class="content">
            @yield('title')

            @yield('content')

        </div>

        @yield('footer')
    </body>
    </html>



