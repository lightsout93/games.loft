@extends('layout')
@section('content')
    <div class="main-content">
        <div class="content-top">
            <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
            <div class="slider"><img src="img/slider.png" alt="Image" class="image-main"></div>
        </div>
        <div class="content-middle">
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">Игры в разделе {{$category}}</div>
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
                <div class="products-category__list">
                    @foreach($items as $item)
                        <div class="products-columns__item">
                            <div class="products-columns__item__title-product"><a href="{{route('item.show', $item->id)}}"
                                                                                  class="products-columns__item__title-product__link">{{$item->title}}</a>
                            </div>
                            <div class="products-columns__item__thumbnail"><a href="{{route('item.show', $item->id)}}"
                                                                              class="products-columns__item__thumbnail__link"><img
                                            src="{{$item->getImage()}}" alt="Preview-image"
                                            class="products-columns__item__thumbnail__img"></a></div>
                            <div class="products-columns__item__description"><span
                                        class="products-price">{{$item->price}}</span><a
                                        href="#" class="btn btn-blue">Купить</a></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="content-footer__container">
                {{$items->links()}}
            </div>
        </div>
        <div class="content-bottom"></div>
    </div>
@endsection