<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>投稿一覧</title>
</head>
<body>
    <h1>投稿一覧</h1>
    <table>
        <tr>
        <th><h2>タイトル</h2></th>
        <th><h2>本文</h2></th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->content}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
