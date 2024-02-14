@extends('base')

@section('title', $post->title)

@section('content')
    <div class="container mt-5">
        <h1 class="">{{ $post->title }}</h1>
        <img src="{{ $post->picture }}" alt="">
        <p>{{ $post->content }}</p>
    </div>


@endsection
