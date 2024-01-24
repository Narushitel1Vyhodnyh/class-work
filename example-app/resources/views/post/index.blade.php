@extends('.layout.master')

@section('content')
<div class="container">
    @if($message = Session::get('success'))
        <p>{{$message}}</p>
    @endif
    <row>
        <a href="{{route('post.create')}}" class="button button-primary">{{__('Новый Пост')}}</a>
    </row>
    <row>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название поста</th>
                <th scope="col">Описание поста</th>
                <th scope="col">Изображение</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->text }}</td>
                    <td><img width="150" height="150" src="/images/{{$post->image}}" alt=""></td>
                    <td>
                        <form method="POST" action="{{route('post.delete', $post->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                {{__('Данные не найдены')}}
            @endforelse

            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table></row>
</div>
@endsection
