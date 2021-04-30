@extends('auth.layouts.master')

@section('title', 'Новость ' . $news->title)

@section('content')
    <div class="col-md-12">
        <h1>Новость {{ $news->title }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $news->id }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $news->title }}</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td>{{ $news->desc }}</td>
            </tr>

            <tr>
                <td>Картинка</td>
                <td><img src="{{ Storage::url($news->image) }}"
                         height="240px"></td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection
