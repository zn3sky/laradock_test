<html>
    <head>
        <title>商品管理 - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            ここがメインのサイドバー
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>