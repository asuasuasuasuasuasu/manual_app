<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{\Illuminate\Support\Facades\Auth::user()->name}}でログインしています。<br>

    <a href="{{ route('posts.create') }}">新規投稿はこちら</a><br>
    <a href="{{ route('category.create') }}">カテゴリ登録</a>

    <form action="{{route('user.logout')}}" method="post">
        @csrf
        <button>ログアウト</button>
    </form>
</body>
</html>