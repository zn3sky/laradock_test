<html>
    <head>
        <title>商品管理 - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @section('sidebar')
            ここがメインのサイドバー
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
    @yield('script')
</html>