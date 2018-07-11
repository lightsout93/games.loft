<div class="content-bottom">
    <div class="line"></div>
    <div class="content-head__container">
        <div class="content-head__title-wrap">
            <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
        </div>
    </div>
    <div class="content-main__container">
        <div class="products-columns">
            @foreach ($items as $itemBottom)
                <div class="products-columns__item">
                    <div class="products-columns__item__title-product"><a href="{{route('item.show', $itemBottom->id)}}" class="products-columns__item__title-product__link">{{$itemBottom->title}}</a></div>
                    <div class="products-columns__item__thumbnail"><a href="{{route('item.show', $itemBottom->id)}}" class="products-columns__item__thumbnail__link"><img src="{{$itemBottom->getImage()}}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                    <div class="products-columns__item__description"><span class="products-price">{{$itemBottom->price}}</span><a href="#" class="btn btn-blue">Купить</a></div>
                </div>
            @endforeach
        </div>
    </div>
</div>