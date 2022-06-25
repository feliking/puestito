@extends('layouts.app')
@section('content')
<!--====================  product image slider ====================-->
<div class="product-image-slider-wrapper space-pb--30 space-mb--30">
    @foreach ($product->documents as $document)
        <div class="product-image-single">
            <img src="/{{ $document->path }}" class="img-fluid" alt="">
        </div>
    @endforeach
</div>
<!--====================  End of product image slider  ====================-->
<!--====================  product content ====================-->
<!-- product content header -->
<div class="product-content-header-area border-bottom--thick space-pb--30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-content-header">
                    <div class="product-content-header__main-info">
                        <h3 class="title">{{ $product->name }}</h3>
                        <div class="price">
                            @if (isset($product->price_discount))
                                <span class="main-price">Bs. {{ $product->price }}</span>
                                <span class="discounted-price">Bs. {{ $product->price_discount }}</span>
                            @else
                                <span class="discounted-price">Bs. {{ $product->price }}</span>
                            @endif
                        </div>
                        <div class="rating">
                            <ul class="rating__stars">
                                <li><img src="/img/icons/star.svg" class="injectable" alt=""></li>
                                <li><img src="/img/icons/star.svg" class="injectable" alt=""></li>
                                <li><img src="/img/icons/star.svg" class="injectable" alt=""></li>
                                <li><img src="/img/icons/star.svg" class="injectable" alt=""></li>
                                <li><img src="/img/icons/star.svg" class="injectable" alt=""></li>
                            </ul>
                            {{-- <span class="rating__text">6</span> --}}
                        </div>
                    </div>
                    {{-- <div class="product-content-header__wishlist-info text-center">
                        <img src="/img/icons/heart-dark.svg" class="injectable" alt="">
                        <span class="count">10</span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product content description -->
{{-- <div class="product-content-description border-bottom--thick space-pt--25 space-pb--25">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="space-mb--25">{{ $product->description }}</p>
                <h4 class="space-mb--5">Free Shipping</h4>
                <p>To Bangladesh from seller via china. Shipping <br> method online.</p>
            </div>
        </div>
    </div>
</div> --}}
<!-- product content safety -->
{{-- <div class="product-content-safety border-bottom--thick space-pt--15 space-pb--15">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4><img src="assets/img/icons/security.svg" class="injectable" alt=""> Secure Payment Method.</h4>
            </div>
        </div>
    </div>
</div> --}}
<!-- product color picker -->
<div class="product-color-picker border-bottom--thick space-pt--25 space-pb--25">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="space-mb--20">Colores disponibles</h3>
                <form>
                    <ul class="color-picker">
                        @foreach ($product->colors as $color)
                        <li>
                            <input id="black_{{ $color->id }}" type="radio" name="color" value="{{ $color->id }}">
                            <label class="black" for="black" style="background-color: {{ $color->code }}"></label>
                        </li>
                        @endforeach
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- product content description -->
<div class="product-content-description space-pt--25 space-pb--25">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="space-mb--5">Descripción</h4>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>
</div>
<!-- shop product button -->
{{-- <div class="shop-product-button">
    <button class="cart">ADD TO CART</button>
    <button class="buy">BUY NOW</button>
</div> --}}
<!--====================  End of product content  ====================-->
@endsection
