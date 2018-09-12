<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
 
    <!-- ① CSS を追加 -->
    <link rel="stylesheet" href="/css/app.css">
 
    <!-- ② JavaScript を追加 -->
    <script src="/js/app.js" defer></script>
</head>
<body>
  
    <div class="container py-4"> <!-- ③ 追加 -->
        @yield('content')
    </div>
  
</body>
</html>