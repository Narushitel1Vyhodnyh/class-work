@extends('layouts.masterLayout')

@section('content')

    <div class="container">
        <div class="row">
            @if($message = Session::get('success'))
                <p class="alert ">{{$message}}</p>
            @endif
            <a href="{{route('tovar.create') }}" class="btn btn-primary">Новая категория</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название категории</th>
                    <th scope="col">Описание категории</th>
                    <th scope="col">Активность</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <th scope="row">{{$product -> id}}</th>
                        <td>{{$product -> name}}</td>
                        <td> {{$product -> text}}</td>
                            @if($product -> is_active == 1)
                                <td class="alert alert-success">Активен</td>
                            @else
                                <td class="alert alert-danger">Неактивен</td>
                            @endif

                        <td>
                            <form class="mb-3" action="{{route('category.delete', $category->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">{{__('Удалить')}}</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    {{__('Категории не найдены')}}
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection
