@extends('auth.layouts.master')

@isset($news)
    @section('title', 'Редактировать новость ' . $news->title)
@else
    @section('title', 'Создать новость')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($news)
            <h1>Редактировать Новость <b>{{ $news->title }}</b></h1>
        @else
            <h1>Добавить Новость</h1>
        @endisset

        <form method="POST" enctype="multipart/form-data"
              @isset($news)
              action="{{ route('news.update', $news) }}"
              @else
              action="{{ route('news.store') }}"
            @endisset
        >
            <div>
                @isset($news)
                    @method('PUT')
                @endisset
                @csrf
                <div class="input-group row">
                    <label for="title" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="title" id="title"
                               value="{{ old('title', isset($news) ? $news->title : null) }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="desc" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        @include('auth.layouts.error', ['fieldName' => 'desc'])
                        <textarea name="desc" id="desc" cols="72"
                                  rows="7">@isset($news){{ $news->desc }}@endisset</textarea>
                    </div>
                </div>
                <br>

                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
@endsection

