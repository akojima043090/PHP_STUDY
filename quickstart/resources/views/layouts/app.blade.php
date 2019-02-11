<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>

    <body>
        <nav class="navbar vavbar-default">
            <div class="container">
                <!-- navbar -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        ログイン
                    </a>
                    <a class="navbar-brand" href="{{ url('/createUser') }}">
                        新規登録
                    </a>
                    <a class="navbar-brand" href="{{ url('/calendar') }}">
                        カレンダー
                    </a>
                    <a class="navbar-brand" href="{{ url('/logout') }}">
                        ログアウト
                    </a>
                </div>
            </div>
        </nav>

        @yield('content')
        <!-- JavaScripts -->
        @yield('hooter')
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
    </html>
