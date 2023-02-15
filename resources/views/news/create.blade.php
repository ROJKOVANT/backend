@extends('layouts.app')

@section('content')
    <head>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    </head>
    <body>
    <form action="{{route('news.store')}}" method="POST">
        @csrf
        <div>
            <label for="title">Введите  название новости</label>
            <br>
            <input type="text" name="title" placeholder="Введите Name">
        </div>
        <br>
        <div>
            <label for="body">Введите  заголовок новости</label>
            <br>
            <input type="text" name="body" placeholder="Введите Name">
        </div>
        <br>
        <div>
            <label for="description">Введите  описание новости</label>
            <br>
            <input type="text" name="description" placeholder="Введите Name">
        </div>
        <br>
        <button type="submit">Создать новость</button>
    </form>
    </body>
@endsection
