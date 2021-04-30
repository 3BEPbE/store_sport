@extends('auth.layouts.master')

@section('title', 'Новости')

@section('content')
    <div class="col-md-12">
        <h1>Новости</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Название
                </th>
                <th>
                    Контент
                </th>
                <th>
                    Дата
                </th>
            </tr>
            @foreach($news as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->desc }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('news.destroy', $item) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('news.show', $item) }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('news.edit', $item) }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Удалить"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $news->links() }}
        <a class="btn btn-success" type="button"
           href="{{ route('news.create') }}">Добавить Новость</a>
    </div>
@endsection
