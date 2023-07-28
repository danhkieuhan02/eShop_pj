@section('title', 'product list')
@section('main')
    <x-layout-admin title="Trang chủ">
        <div id="wrapper">
            <div class="poster">
                <h3>
                    Paradise of shoes
                </h3>
                <div class="img-poster">
                    <div class="ad-banner">
                        <img src="/img/WCCH_1677842740807.webp" style="width: 1120px;">
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
                </form>
                <ul class="products">
                    @foreach ($data as $item)
                        <li>
                            <div class="product-item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="{{ $item->cover_img }}" style="width: 300px;">
                                    </a>
                                    <a href="/client/order" class="buy-now">Buy now</a>
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
        <div class="footer">
            <div class="text">
                <i>Let we know how satisfied you are with our products</i>
            </div>
            <div class="contct-items">
                <i class="bi bi-geo-alt-fill">&emsp;Can Tho, Viet Nam</i><br>
                <i class="bi bi-telephone-fill">&emsp;Phone: +84945255664</i><br>
                <i class="bi bi-envelope-fill">&emsp;Mail: danhkieuhan135@gmail.com</i><br>
            </div>
        </div>
    </footer>
