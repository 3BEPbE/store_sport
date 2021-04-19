@extends('custom.layouts.app')

@section('title', __('main.title'))

<div class="header__wrapper">
    <div class="container">
        <div class="row header__content__wrapper">
            <div class="col-md-4">
                <a href="#" class="logo__text">
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

@section('content')

<div class="row wrapper__second__column">
    <div class="col-md-3 orange__button__wrapper">
        <a class="btn orange__button">
            Категории
        </a>
    </div>

    <div class="col-md-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" aria-label="Поиск" aria-describedby="button-addon2">
            <button class="btn orange__button" type="button" id="button-addon2">Поиск</button>
        </div>
    </div>
    <div class="col-md-3 grey_button__wrapper">
        <a class="btn grey_button">
            <img style="height: 15px" src="{{ asset('images/vector.svg') }}" alt="">
            Сортировка
        </a>
    </div>
</div>

{{-- слайдер   --}}

<div id="carouselExampleSlidesOnly" class="carousel slide mt-3" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/slider/1.png') }}" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slider/1.png') }}" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/slider/1.png') }}" class="d-block w-100" alt="">
        </div>
    </div>
</div>


{{-- конец слайдера --}}
    <div class="main__container_wrapper">
        <div class="row">
            <div class="col-md-12 second__section_text my-5">
                <h2>Цель</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 wrapper__block_mass mb-4">
                <a class="block__mass">
                    <img src="{{ asset('images/category/1.svg') }}" alt="">
                    Набор массы
                </a>
            </div>
            <div class="col-md-4 wrapper__block_mass mb-4">
                <a href="#" class="block__mass">
                    <img src="{{ asset('images/category/2.svg') }}" alt="">
                    Восстановление
                </a>
            </div>
            <div class="col-md-4 wrapper__block_mass mb-4">
                <a href="#" class="block__mass">
                    <img src="{{ asset('images/category/3.svg') }}" alt="">
                    Снижение веса
                </a>
            </div>

            <div class="col-md-4 wrapper__block_mass mb-4">
                <a class="block__mass">
                    <img src="{{ asset('images/category/4.svg') }}" alt="">
                    Иммунитет
                </a>
            </div>
            <div class="col-md-4 wrapper__block_mass mb-4">
                <a href="#" class="block__mass">
                    <img src="{{ asset('images/category/5.svg') }}" alt="">
                    Сила и стойкость
                </a>
            </div>
            <div class="col-md-4 wrapper__block_mass mb-4">
                <a href="#" class="block__mass">
                    <img src="{{ asset('images/category/6.svg') }}" alt="">
                    Энергия
                </a>
            </div>
        </div>

{{--   раздел продуктов     --}}

        <div class="row">
            <div class="col-md-12 second__section_text my-3">
                <h2>Хит продаж</h2>
            </div>

            <div class="col-md-3 mb-2">
                <div class="column">
                    <div class="product__wrapper py-2">
                        <img src="{{ asset('images/product/1.png') }}" alt="">
                        <p>Optimum Nutrition, Gold Standard 100% Whey</p>
                        <h4 class="product__price">
                            156 250 сум
                            <img src="{{ asset('images/product/save.svg') }}" alt="">
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="column">
                    <div class="product__wrapper py-2">
                        <img src="{{ asset('images/product/1.png') }}" alt="">
                        <p>Optimum Nutrition, Gold Standard 100% Whey</p>
                        <h4 class="product__price">
                            156 250 сум
                            <img src="{{ asset('images/product/save.svg') }}" alt="">
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="column">
                    <div class="product__wrapper py-2">
                        <img src="{{ asset('images/product/1.png') }}" alt="">
                        <p>Optimum Nutrition, Gold Standard 100% Whey</p>
                        <h4 class="product__price">
                            156 250 сум
                            <img src="{{ asset('images/product/save.svg') }}" alt="">
                        </h4>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="column">
                    <div class="product__wrapper py-2">
                        <img src="{{ asset('images/product/1.png') }}" alt="">
                        <p>Optimum Nutrition, Gold Standard 100% Whey</p>
                        <h4 class="product__price">
                            156 250 сум
                            <img src="{{ asset('images/product/save.svg') }}" alt="">
                        </h4>
                    </div>
                </div>
            </div>

        </div>



{{--        конец продукта  --}}
        <div class="wrapper__main__review">
            <div class="row">
                <div class="col-md-12 second__section_text my-3">
                    <h2>Новости спорта</h2>
                </div>

                <div class="col-md-4">
                    <div class="wrapper__review">
                        <img class="news__img" src="{{ asset('images/product/3.png') }}" alt="">
                        <a href="#">
                            Спорт и карантин как мы живём теперь
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="wrapper__review">
                        <img class="news__img" src="{{ asset('images/product/3.png') }}" alt="">
                        <a href="#">
                            Спорт и карантин как мы живём теперь
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="wrapper__review">
                        <img class="news__img" src="{{ asset('images/product/3.png') }}" alt="">
                        <a href="#">
                            Спорт и карантин как мы живём теперь
                        </a>
                    </div>
                </div>

            </div>
        </div>
        {{--    конец спорта --}}



        {{--Отзывы начало--}}
        <div class="row my-5">
            <div class="col-md-12 second__section_text">
                <h2>Отзывы</h2>
            </div>

            <div class="col-md-3 my-5">
                <div class="column">
                    <div class="review__wrapper py-2">
                        <img class="review__img_1" src="{{ asset('images/product/review.svg') }}" alt="">
                        <p>Равным образом, граница обучения кадров позволяет выполнить важные задания по разработке анализа существующих паттернов поведения</p>
                        <div class="review__star">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-5">
                <div class="column">
                    <div class="review__wrapper py-2">
                        <img class="review__img_1" src="{{ asset('images/product/review.svg') }}" alt="">
                        <p>Равным образом, граница обучения кадров позволяет выполнить важные задания по разработке анализа существующих паттернов поведения</p>
                        <div class="review__star">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-5">
                <div class="column">
                    <div class="review__wrapper py-2">
                        <img class="review__img_1" src="{{ asset('images/product/review.svg') }}" alt="">
                        <p>Равным образом, граница обучения кадров позволяет выполнить важные задания по разработке анализа существующих паттернов поведения</p>
                        <div class="review__star">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-5">
                <div class="column">
                    <div class="review__wrapper py-2">
                        <img class="review__img_1" src="{{ asset('images/product/review.svg') }}" alt="">
                        <p>Равным образом, граница обучения кадров позволяет выполнить важные задания по разработке анализа существующих паттернов поведения</p>
                        <div class="review__star">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                            <img src="{{ asset('images/product/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Отзывы конец--}}

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

