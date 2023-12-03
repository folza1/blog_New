<!doctype html>

<title>My BLog</title>
<link rel="stylesheet" href="/css/app.css">

<body>
@foreach ($posts as $post)
<article class="{{$loop->even?'foo':''}}">
    <h1>
        <a href="/posts/{{$post->slug}}">
            {{$post->title}}        </a>
    </h1>
    <div>
        {{$post->excerpt}}
    </div>
</article>
@endforeach
</body>
