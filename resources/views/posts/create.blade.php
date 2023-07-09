<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body class="antialiased">
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="今日起きたこと"
                value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="今何してる？">
                    {{ old('post.body') }}
                </textarea>
                <p class="body__error" style="color:red">
                    {{ $errors->first('post.body') }}
                </p>
            </div>
            <input type="submit" value="保存する">
        </form>
        <div class="footer">
            <a href="/">一つ前に戻る</a>
        </div>
    </body>
</html>