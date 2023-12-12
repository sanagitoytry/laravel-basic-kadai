<!DOCTYPE html>
 <html lang="ja">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel課題</title>
 </head>

 <body>
     <h1>投稿作成</h1>

    <form action="{{ url('posts') }}" method="POST">
        @csrf
        <table>
            <tr>
                <th>タイトル</th>
                <td>
                    <input type="text" name="title">
                </td>
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </tr>
    <tr>
    <th>本文</th>
    <td><textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea></td>
    @error('content')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </tr>
    </table>

    <button type="submit">登録</button>
</form>
 </body>

 </html>
