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

        <div class="row">
            <div class="col-md-12 second__section_text my-3">
                <h2>Наша продукция</h2>
            </div>

            @foreach($products as $item)
                <div class="col-md-3 mb-2">
                    <div class="column">
                        <div class="product__wrapper py-2">
                            <img src="{{ asset('images/product/1.png') }}" alt="">
                            <a href="{{ route('items.show', $item->id) }}">продукт</a>
                            <h4 class="product__price">
                                {{ $item->price }} сум
                            </h4>
                            @if(true)
                                <form action="{{ route('cart.store') }}" method="post">
                                    @csrf

                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                                    <button type="submit" class="btn btn-info" style="background-color: rgba(255, 92, 41, 1); color: white">
                                        Добавить в корзину
                                    </button>
                                </form>
                            @else
                                <img src="{{ asset('images/product/save.svg') }}" alt="">
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        {{ $products->links() }}
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
