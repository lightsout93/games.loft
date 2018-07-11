<div class="random-product-container">
    <div class="random-product-container__head">Случайный товар</div>
    <div class="random-product-container__content">
        <div class="item-product">
            <div class="item-product__title-product"><a href="{{route('item.show', $item->id)}}" class="item-product__title-product__link">{{$item->title}}</a></div>
            <div class="item-product__thumbnail"><a href="{{route('item.show', $item->id)}}" class="item-product__thumbnail__link"><img
                            src="/uploads/{{$item->image}}" alt="Preview-image"
                            class="item-product__thumbnail__link__img"></a></div>
            <div class="item-product__description">
                <div class="item-product__description__products-price"><span
                            class="products-price">{{$item->price}}</span></div>
                <div class="item-product__description__btn-block"><a href="/order?id={{$item->id}}"
                                                                     class="btn btn-blue">Купить</a></div>
            </div>
        </div>
    </div>
</div>