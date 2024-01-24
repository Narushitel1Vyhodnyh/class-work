@extends('layout.master')

@section('content')
    <div class="container">
        {{ $article->title }}
        {{ $article->text }}
        <img width="250" height="250" src="/images/{{$article->image}}" alt="">
    </div>
@endsection
