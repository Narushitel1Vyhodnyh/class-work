@extends('layout.master')

@section('content')
    <div class="container">
        {{ $post->title }}
        {{ $post->text }}
        <img width="250" height="250" src="/images/{{$post->image}}" alt="">
    </div>
@endsection
