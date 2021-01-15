<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Blog2</title>
</head>
<body>
    <!--
      別のbladeファイル内でsection('xxx')で指定したものを
      yield('xxx')で呼び出せる。
      別のbladeでは このファイルをextendsする必要がある
    -->
    @yield('content')
</body>
</html>
