@extends('custom.layouts.app')

@section('title', __('main.title'))

@section('content')

    <div class="header__wrapper">
        <div class="container">
            <div class="row header__content__wrapper">
                <div class="col-md-4">
                    <a href="{{ route('index') }}" class="logo__text">
                        WHEY SPORT
                    </a>
                </div>
                <div class="col-md-4 link__header__wrapper">
                    <a href="#">Продукция</a>
                    <a href="#">Доставка</a>
                    <a href="#">Контакты</a>
                </div>
                <div class="col-md-4 header__phone">
                    <a>+998 90 999 99 99</a>
                    <img style="height: 20px" src="{{ asset('images/star.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="main__container_wrapper my-3">

        <div class="row">
            <div class="col-md-12 second__section_text my-5">
                <h2>Список категорий</h2>
            </div>
        </div>

        <div class="row">

            <div class="row">
                @foreach($categories as $item)
                    <div class="col-md-4 wrapper__block_mass my-3">
                        <a href="{{ route('category', $item->code) }}" class="block__mass">
                            <img src="{{ asset('images/category/1.svg') }}" alt="">
                            {{ $item->name }}
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{ $categories->links() }}
@endsection
