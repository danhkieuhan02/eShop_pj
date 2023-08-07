@section('title', 'product list')
@section('main')
    <x-layout-admin title="Trang chủ">
        <div id="wrapper">
            <div class="poster">
                <h3>
                    Paradise of shoes
                </h3>
                <div class="img-poster">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="/img/WCCH_1677842740807.webp" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="/img/banner2.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>
                            <div class="carousel-item">
                                <img src="/img/maxresdefault.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <div class="poster">
                        <img src="/img/poster_sale_2.jpg" style="width: 300px;">
                        <img src="/img/right_banner.jpeg" style="width: 300px;">
                        <img src="/img/sale_banner.jpg" style="width: 300px;">
                    </div>
                </div>
            </div>
            <div class="headline">
                <form method="get" class="form-inline">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="key" placeholder="Search..."
                            aria-label="Search by name" aria-describedby="button-addon2">
                        <button class="btn btn-secondary" type="button" id="button-addon2">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                    <h4>New products</h4>
                </form>
                <ul class="products">
                    @foreach ($data as $item)
                        <li>
                            <div class="product-item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="{{ $item->cover_img }}" style="width: 300px;">
                                    </a>
                                    <a href="{{ route('client.order') }}" class="buy-now">Buy now</a>
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-cat">{{ $item->category->cat_name ?? '' }}</a>
                                    <a href="" class="product-name"> {{ $item->prod_name }}</a>
                                    <a href="" class="product-price">${{ number_format($item->price) }}</a>
                                    <a href="" class="product-content">{{ $item->content }}</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="sale-off-banner">
                    <img src="/img/hinh-banner-sale-cho-ngay-flash-sale.jpg" style="width:1300px; height:300px">
                </div> <br><br>
                <h4>Best sale today</h4>
                <ul class="products">
                    @foreach ($data as $item)
                        <li>
                            <div class="product-item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="{{ $item->cover_img }}" style="width: 300px;">
                                    </a>
                                    <a href="{{ route('client.order') }}" class="buy-now">Buy now</a>
                                </div>
                                <div class="product-info">
                                    <a href="" class="product-cat">{{ $item->category->cat_name ?? '' }}</a>
                                    <a href="" class="product-name"> {{ $item->prod_name }}</a>
                                    <a href="" class="product-price">${{ number_format($item->price) }}</a>
                                    <a href="" class="product-content">{{ $item->content }}</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <x-slot name="css">
            <link rel="stylesheet" href="/css/home.css" />
        </x-slot>
        {{-- giao diện phân trang --}}
        {{ $data->links() }}
    </x-layout-admin>
    <footer>
        <hr>
        <br>
        <div class="info-shop">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="text-center">
                            <img src="/img/phoigiay.jpg" class="card-img-top mt-4" style="width:300px; ">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Pasion</h5>
                            <p class="card-text">We always devote all our enthusiasm and seriousness to each product,
                                with the desire to satisfy
                                and help you find the right fashion style.
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="text-center">
                            <img src="/img/phoigiay.jpg" class="card-img-top mt-4" style="width:300px;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Experience</h5>
                            <p class="card-text">At Paradies of Shoes, you will have endless choices not only of shoes
                                but also of fashion accessories page and other fashion products.
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="text-center">
                            <img src="/img/phoigiay.jpg" class="card-img-top mt-4" style="width:300px;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Quality</h5>
                            <p class="card-text">We affirm and make sure that Paradise Shoes will not disappoint you,
                                because our products are completely environmentally friendly and safe for health.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="footer">
            <div class="text">
                <h4 class="mt-3">Paradies of Shoes</h4>
                <i>Let we know how satisfied you are with our products</i>
                <br>
                <br>
            </div>
            <div class="container text-left">
                <div class="row pb-5">
                    <div class="col-3">
                        <h4>Informations</h4>
                        <p class="mb-1 mt-3"><i class="bi bi-dot"></i>&emsp;Website: pofs.com.vn</p>
                        <p class="mb-1"><i class="bi bi-dot"></i>&emsp;Can Tho, Viet Nam</p>
                        <p class="mb-1"><i class="bi bi-dot"></i>&emsp;Hotline: +84945255664</p>
                        <p class="mb-1"><i class="bi bi-dot"></i>&emsp;Email: danhkieuhan135@gmail.com</p>
                    </div>
                    <div class="col-3">
                        <h4>Introduce</h4>
                        <p class="mb-1 mt-3"><i class="bi bi-dot"></i>&emsp;About us</p>
                        <p class="mb-1"><i class="bi bi-dot"></i>&emsp;News and stores</p>
                        <p class="mb-1"><i class="bi bi-dot"></i>&emsp;How to contact us</p>
                        <p class="mb-1"><i class="bi bi-dot"></i>&emsp;Promotion information</p>
                    </div>

                    <div class="col-3">
                        <h4>Support</h4>
                        <p class="mb-1 mt-3"><i class="bi bi-dot"></i>&emsp;Partner</p>
                        <p class="mb-1"><i class="bi bi-dot"></i>&emsp;Recruitment</p>
                        <p class="mb-1"><i class="bi bi-dot"></i>&emsp;Online support</p>
                        <p class="mb-1"><i class="bi bi-dot"></i>&emsp;Customer service</p>
                    </div>
                    <div class="col-3">
                        <h4>Follow us</h4>
                        <a href="https://www.facebook.com/duongg.tichh.7"><i class="bi bi-facebook"
                                style="font-size:50px"></i>
                        </a>
                        <a href="https://www.instagram.com/handaudaihoc/"><i class="bi bi-instagram"
                                style="font-size:50px"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCmTwkI1MQqUj8a1nhk3L5Pw"><i class="bi bi-youtube"
                                style="font-size:50px"></i>
                        </a>
                        <a href="https://www.tiktok.com/@dkhandayy_" class="text-decoration-line-none"><i
                                class="bi bi-tiktok" style="font-size:50px"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
