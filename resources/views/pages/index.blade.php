@extends('layouts.app')
@section('content')
    <!--====================  hero slider ====================-->
    {{-- <div class="hero-slider bg-color--grey space-y--10">
        <div class="container">
            <div class="row row-10">
                <div class="col-12">
                    <div class="hero-slider-wrapper">
                        <div class="hero-slider-item d-flex bg-img" data-bg="assets/img/hero-slider/slider-1.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- hero slider content -->
                                        <div class="hero-slider-content">
                                            <h1 class="hero-slider-content__title space-mb--10">Most popular <br> Hand Bag</h1>
                                            <p class="hero-slider-content__text">GET 30% OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-slider-item d-flex bg-img" data-bg="assets/img/hero-slider/slider-2.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- hero slider content -->
                                        <div class="hero-slider-content">
                                            <h1 class="hero-slider-content__title space-mb--10">New Arrival <br> Sport Shoes</h1>
                                            <p class="hero-slider-content__text">GET 40% OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-slider-item d-flex bg-img" data-bg="assets/img/hero-slider/slider-3.jpg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- hero slider content -->
                                        <div class="hero-slider-content">
                                            <h1 class="hero-slider-content__title space-mb--10">Featured Product <br> Summer Clothes</h1>
                                            <p class="hero-slider-content__text">GET 50% OFF</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--====================  End of hero slider  ====================-->
    <!--====================  category slider ====================-->
    <div class="category-slider-area bg-color--grey space-pb--25 space-mb--25">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <h2 class="section-title space-mt--10 space-mb--20">Marcas</h2>
                    <!-- category slider -->
                    <div class="category-slider-wrapper">
                        @foreach ($categories as $category)
                            <div class="category-item">
                                <div class="category-item__image">
                                    <a href="{{ route('category_products', ['category_id' => $category->id])}}">
                                        <img src="/img/icons/category/cat1.svg" class="injectable" alt="">
                                    </a>
                                </div>
                                <div class="category-item__title">
                                    <a href="{{ route('category_products', ['category_id' => $category->id])}}">{{ $category->name }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of category slider  ====================-->
    <!--====================  featured product ====================-->
    {{-- <div class="featured-product-area space-mb--25">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <h2 class="section-title space-mb--20">Best Sale <a href="shop.html">VIEW ALL <span><img
            src="assets/img/icons/arrow-right.svg" class="injectable" alt=""></span></a></h2>
                    <!-- featured products -->
                    <div class="featured-product-wrapper space-mb-m--15">
                        <div class="row row-5">
                            <div class="col-6">
                                <div class="featured-product space-mb--15">
                                    <div class="featured-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/featured/product2.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-product__content">
                                        <div class="price">
                                            <span class="main-price">$460</span>
                                            <span class="discounted-price">$320</span>
                                        </div>
                                        <div class="icon">
                                            <button><img src="assets/img/icons/heart.svg" class="injectable" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="featured-product space-mb--15">
                                    <div class="featured-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/featured/product3.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="featured-product__content">
                                        <div class="price">
                                            <span class="main-price">$460</span>
                                            <span class="discounted-price">$320</span>
                                        </div>
                                        <div class="icon">
                                            <button><img src="assets/img/icons/heart.svg" class="injectable" alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--====================  End of featured product  ====================-->
    <!--====================  products area ====================-->
    <div class="products-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    @if (isset($name_category))
                        <h2 class="section-title space-mb--20">{{ $name_category }}</h2>
                    @else
                        <h2 class="section-title space-mb--20">Todos nuestros productos</h2>
                    @endif
                    <!-- all products -->
                    <div class="all-products-wrapper space-mb-m--20">
                        <div class="row row-10">
                            @foreach ($products as $product)
                                <div class="col-6">
                                    <div class="grid-product space-mb--20">
                                        <div class="grid-product__image">
                                            <a href="{{route('product_detail', ['id' => $product->id])}}">
                                                <img src="{{asset($product->documents[0]->path)}}" class="img-fluid" alt="">
                                            </a>
                                            <button class="icon"><img src="/img/icons/heart-dark.svg" class="injectable" alt=""></button>
                                        </div>
                                        <div class="grid-product__content">
                                            <h3 class="title"><a href="{{route('product_detail', ['id' => $product->id])}}">{{ $product->name }}</a></h3>
                                            <span class="category">{{ $product->description }}</span>
                                            <div class="price">
                                                @if (isset($product->price_discount))
                                                    <span class="main-price">Bs. {{ $product->price }}</span>
                                                    <span class="discounted-price">Bs. {{ $product->price_discount }}</span>
                                                @else
                                                    <span class="discounted-price">Bs. {{ $product->price }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of products area  ====================-->
@endsection
