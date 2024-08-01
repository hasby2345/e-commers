@extends('layouts.frontend')
@section('content')
<!--------------- cart-section---------------->
{{-- @if(empty($cart) || count($cart) ==0)
    Tidak ada produk di keranjang
@else

@endif
<section class="product-cart product footer-padding">
    <div class="container">
        <div class="cart-section">
            <table>
                <tbody>
                    <tr class="table-row table-top-row">
                        <td class="table-wrapper wrapper-product">
                            <h5 class="table-heading">PRODUCT</h5>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">PRICE</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">QUANTITY</h5>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">TOTAL</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">ACTION</h5>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="wishlist-btn cart-btn">
            <a href="empty-cart.html" class="clean-btn">Clear Cart</a>
            <a href="#" class="shop-btn update-btn">Update Cart</a>
            <a href="checkout.html" class="shop-btn">Proceed to Checkout</a>
        </div>
    </div>
</section> --}}
{{-- @foreach ($produk as $product)
    <div>
        <h2>{{ $product->name }}</h2>
        <p>${{ $product->harga }}</p>
        <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="hidden" name="name" value="{{ $product->name }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <input type="number" name="quantity" value="1" min="1">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
@endforeach
@if(@session('keranjang'))
    <ul>
        @foreach (session('keranjang') as $id => $item)
            <li>
                {{$item-$user->name}} -
                {{$item->jumlah}} x ${{$item->harga}}
                <form action="{{'cart.remove', $id}}" method="POST">
                    @csrf
                    <button type="submit">Remove<button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    Your cart kosong
@endif --}}
<!--------------- cart-section-end---------------->
{{-- <form action="{{ route('front.cart') }}" method="post">
    <input type="hidden" name="id" value="{{ $produk->id }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" value="{{ $produk->name }}" name="name">
    <input type="hidden" value="{{ $produk->photo}}" name="gambar">
    <input type="hidden" value="{{  $produk->price}}" name="harga">

    <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
        <div class="product-details-info">
            <div class="product-details-info-price"><span class="del"> $23.99 </span>Rp {{ number_format($produk->price,2,",",".") }}</div>
            <h3 class="product-details-info-title">{{ $produk->name }}</h3>
            <div class="product-details-info-ratings">
                <div class="ratings">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <a href="#" class="reviews">3 customer reviews</a>
            </div>
            <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
                <p class="heading-text"></p>
                    <div class="quantity">
                        <a href="#" class="quantity-minus">-</a>
                        <input title="Qty" name="quantity" class="email input-text qty text" type="text" value="1">
                        <a href="#" class="quantity-plus">+</a>
                    </div>

                    <button type="submit" class="btn btn-medium btn--primary">
                        <span class="text">Add to Cart</span>
                        <i class="seoicon-commerce"></i>
                        <span class="semicircle"></span>
                    </button>
                </form>
        </div>

        <div class="product-details-add-info">
            <div class="author">Category:
                <a href="#" class="author-name">{{ $product->ProductCategory->name }}</a>
            </div>
            <div class="tags">Tags:
                @foreach($tags as $tag)
                <a class="tags-item" href="#">{{ $tag->name }},</a>
                @endforeach
            </div>
            <div class="socials">Share:
                <a href="#" class="social__item">
                    <i class="seoicon-social-facebook"></i>
                </a>
                <a href="#" class="social__item">
                    <i class="seoicon-social-twitter"></i>
                </a>
                <a href="#" class="social__item">
                    <i class="seoicon-social-linkedin"></i>
                </a>
                <a href="#" class="social__item">
                    <i class="seoicon-social-google-plus"></i>
                </a>
                <a href="#" class="social__item">
                    <i class="seoicon-social-pinterest"></i>
                </a>
            </div>
        </div>
    </div>
</form> --}}

{{-- <section class="product-cart product footer-padding">
    <div class="container">
        <div class="cart-section">
            <table>
                <tbody>
                    <tr class="table-row table-top-row">
                        <td class="table-wrapper wrapper-product">
                            <h5 class="table-heading">PRODUK</h5>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">HARGA</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">JUMLAH</h5>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">TOTAL</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="table-heading">AKSI</h5>
                            </div>
                        </td>
                    </tr>
                    @foreach ($keranjang as $item)
                    <tr class="table-row ticket-row">
                        <td class="table-wrapper wrapper-product">
                            <div class="wrapper">
                                <div class="wrapper-img">
                                    <img src="{{asset('/images/produk/' . $item->gambar)}}"
                                        alt="img">
                                </div>
                                <div class="wrapper-content">
                                    <h5 class="heading">{{$item->produk_name}}</h5>
                                </div>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <h5 class="heading">{{ ($item->harga)}}</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <div class="quantity">
                                    <span class="minus">
                                        -
                                    </span>
                                    <span class="number">{{$item->jumlah}}</span>
                                    <span class="plus">
                                        +
                                    </span>
                                </div>
                            </div>
                        </td>
                        <td class="table-wrapper wrapper-total">
                            <div class="table-wrapper-center">
                                <h5 class="heading">{{($item->harga)}}</h5>
                            </div>
                        </td>
                        <td class="table-wrapper">
                            <div class="table-wrapper-center">
                                <span>
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.7 0.3C9.3 -0.1 8.7 -0.1 8.3 0.3L5 3.6L1.7 0.3C1.3 -0.1 0.7 -0.1 0.3 0.3C-0.1 0.7 -0.1 1.3 0.3 1.7L3.6 5L0.3 8.3C-0.1 8.7 -0.1 9.3 0.3 9.7C0.7 10.1 1.3 10.1 1.7 9.7L5 6.4L8.3 9.7C8.7 10.1 9.3 10.1 9.7 9.7C10.1 9.3 10.1 8.7 9.7 8.3L6.4 5L9.7 1.7C10.1 1.3 10.1 0.7 9.7 0.3Z"
                                            fill="#AAAAAA"></path>
                                    </svg>
                                </span>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="wishlist-btn cart-btn">
            <a href="empty-cart.html" class="clean-btn">Clear Cart</a>
            <a href="#" class="shop-btn update-btn">Update Cart</a>
            <a href="{{url('cekout')}}" class="shop-btn">Proceed to Checkout</a>
        </div>
    </div>
</section> --}}


<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Pastikan Pilihan Anda</p>
                    <h1>Keranjang</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- cart -->
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th class="product-image">Gambar Produk</th>
                                <th class="product-name">Nama Produk</th>
                                <th class="product-price">Harga</th>
                                <th class="product-quantity">Jumlah</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        @foreach($keranjang as $item)
                        <tbody>
                            <form action="{{ route('keranjang.delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <tr class="table-body-row">
                                <td><button type="submit">Hapus</button></td>
                            </form>
                                <td class="product-image"><img src="{{asset('/images/produk/' . $item->gambar)}}" alt=""></td>
                                <td class="product-name">{{$item->produk_name}}</td>
                                <td class="product-price">Rp . {{ ($item->harga)}}</td>
                                <td><form action="{{ route('keranjang.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                <input type="number" name="jumlah" value="{{ $item->jumlah }}">
                                <button type="submit" class="boxed-btn">Update</button>
                                </form></td>
                                <td class="product-total">{{ $total = $item->harga * $item->jumlah }} </td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td>$545</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        {{-- <a href="cart.html" class="boxed-btn">Update Cart</a> --}}
                        <a href="{{url('cekout')}}" class="boxed-btn black">Pesan</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end cart -->

<!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/1.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/2.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/3.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/4.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end logo carousel -->
@endsection
