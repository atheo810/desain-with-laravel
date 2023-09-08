@props(['post'])

<a href="/post/{{ $post->slug }}">
    <h1>{{ $post->name }}</h1>
</a>
