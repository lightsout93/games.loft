@extends('layout')
@section('content')
        <div class="main-content">
            <div class="content-top">
                <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
                <div class="image-container"><img src="../img/slider.png" alt="Image" class="image-main"></div>
            </div>
            <div class="content-middle">
                <div class="content-head__container">
                    <div class="content-head__title-wrap">
                        <div class="content-head__title-wrap__title bcg-title">{{$item->title}} в разделе {{$item->category->title}}</div>
                    </div>
                    <div class="content-head__search-block">
                        <div class="search-container">
                            <form class="search-container__form">
                                <input type="text" class="search-container__form__input">
                                <button class="search-container__form__btn">search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="content-main__container">
                    <div class="product-container">
                        <div class="product-container__image-wrap"><img src="{{$item->getImage()}}" class="image-wrap__image-product"></div>
                        <div class="product-container__content-text">
                            <div class="product-container__content-text__title">{{$item->title}}</div>
                            <div class="product-container__content-text__price">
                                <div class="product-container__content-text__price__value">
                                    Цена: <b>{{$item->price}}</b>
                                    руб
                                </div><a href="#" class="btn btn-blue">Купить</a>
                            </div>
                            <div class="product-container__content-text__description">
                                <p>
                                    {{$item->content}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('content-bottom')
        </div>
@endsection