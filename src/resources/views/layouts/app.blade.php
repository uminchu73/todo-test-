<!-- 共通レイアウトのHTML -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- 文字コードやレスポンシブ対応 -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ページタイトル -->
    <title>Todo</title>

    <!-- 共通CSSの読み込み -->
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />

    <!-- 各ページごとの追加CSS -->
    @yield('css')

</head>
<body>
    <!-- ヘッダー -->
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">
                Todo
            </a>
        </div>
    </header>

    <!-- ページごとの中身 -->
    <main>
        @yield('content')
    </main>
</body>

</html>
