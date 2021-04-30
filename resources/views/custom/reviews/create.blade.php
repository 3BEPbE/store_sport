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
                    <a href="{{ route('items.index') }}">Продукция</a>
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

        <div class="row py-5">
            <div class="col-md-12 second__section_text my-3">
                <h2>Оставить отзыв</h2>
            </div>



            <form action="{{ route('review.user.store') }}" method="post">
                @csrf

                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                <div class="mb-3">
                    <label for="text" class="form-label">Оставить отзыв</label>
                    @error('text')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <textarea class="form-control" id="text" rows="3" name="text"></textarea>
                </div>

                <button class="btn btn-success" type="submit">Сохранить</button>


            </form>




        </div>

    </div>



    {{--Начало футера и тамже конец--}}

    <div class="row my-3">
        <div class="col-md-3 my-3">
            <div class="footer__content_wrapper">
                <a href="#" class="logo__text">
                    WHEY SPORT
                </a>

                <p>©2021 WHEYSPORT. Все права защищены</p>
            </div>
        </div>

        <div class="col-md-3 my-3">
            <div class="footer__content_wrapper">
                <a href="#">Акции</a>
                <a href="#">Контакты</a>
                <a href="#">Производители</a>
            </div>
        </div>

        <div class="col-md-3 my-3">
            <div class="footer__content_wrapper">
                <a href="#">Отзывы</a>
                <a href="#">Доставка</a>
                <a href="#">Продукция</a>
            </div>
        </div>

        <div class="col-md-3 my-4">
            <div class="footer__content_wrapper_icons">
                <img src="{{ asset('images/instagram.png') }}" alt="">
                <img src="{{ asset('images/facebook.png') }}" alt="">
                <img src="{{ asset('images/telegram.png') }}" alt="">
                <img src="{{ asset('images/share.png') }}" alt="">
            </div>
        </div>
    </div>




@endsection
