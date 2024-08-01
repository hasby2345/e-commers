@extends('layouts.frontend')
@section('content')
<!--------------- products-info-section--------------->
{{-- <section class="product product-info">
    <div class="container">
        <div class="blog-bradcrum">
            <span><a href="index.html">Home</a></span>
            <span class="devider">/</span>
            <span><a href="product-sidebar.html">Shop</a></span>
            <span class="devider">/</span>
            <span><a href="#">Product Details</a></span>
        </div>
        <div class="product-info-section">
            <div class="row ">
                <div class="col-md-6">
                    <div class="product-info-img" data-aos="fade-right">
                        <div class="swiper product-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide slider-top-img">
                                    <img src="{{asset('/images/produk/' . $produk->gambar)}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-info-content" data-aos="fade-left">
                        <h5>{{$produk->nama_produk}}
                        </h5>
                        <div class="price">

                            <span class="new-price">{{$produk->harga}}</span>
                        </div>
                        <p class="content-paragraph">{{$produk->deskripsi}} <span class="inner-text"></span></p>
                        <hr>
                        <div class="product-availability">
                            <span>Availabillity : </span>
                            <span class="inner-text">{{$produk->stok}}</span>
                        </div>
                        <div class="product-size">

                            <form action="{{ route('keranjang') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $produk->id }}">



                                <p class="heading-text"></p>
                                <div class="quantity">
                                    <a href="#" class="jumlah-minus">-</a>
                                    <input title="Jml" name="jumlah" class="email input-text qty text" type="text" value="1">
                                    <a href="#" class="quantity-plus">+</a>
                                </div>

                                <button type="submit" class="shop-btn">
                                    <span class="text">Add to Cart</span>
                                    <i class="seoicon-commerce"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="product-quantity">

                    </div>

                    <hr>
                    <div class="product-details">
                        <p class="category">Category : <span
                                class="inner-text">{{$produk->kategori->nama_kategori}}</span></p>
                    </div>
                    <hr>
                    <div class="product-report">
                        <!-- modal -->
                        <div class="modal-wrapper action">
                            <div onclick="modalAction('.action')" class="anywhere-away"></div>

                            <!-- change this -->
                            <div class="login-section account-section modal-main">
                                <div class="review-form">
                                    <div class="review-content">
                                        <h5 class="comment-title">Report Products</h5>
                                        <div class="close-btn">
                                            <img src="./assets/images/homepage-one/close-btn.png"
                                                onclick="modalAction('.action')" alt="close-btn">
                                        </div>
                                    </div>
                                    <div class="review-form-name address-form">
                                        <label for="reporttitle" class="form-label">Enter Report Ttile*</label>
                                        <input type="text" id="reporttitle" class="form-control"
                                            placeholder="Reports Headline here">
                                    </div>
                                    <div class="review-form-name address-form">
                                        <label for="reportnote" class="form-label">Enter Report Note*</label>
                                        <textarea name="ticketmassage" id="reportnote" cols="40" rows="3"
                                            class="form-control" placeholder="Type Here"></textarea>
                                    </div>
                                    <div class="login-btn text-center">
                                        <a href="#" onclick="modalAction('.action')" class="shop-btn">Submit
                                            Report</a>
                                    </div>
                                </div>
                            </div>
                            <!-- change this -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section> --}}
<!--------------- products-info-end--------------->

<!--------------- products-details-section--------------->


{{-- add to cart --}}
{{-- <form action="{{ route('keranjang') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $produk->id }}">
    <input type="hidden" value="{{ $produk->nama_produk }}" name="name">
    <input type="hidden" value="{{ $produk->gambar}}" name="gambar">
    <input type="hidden" value="{{  $produk->harga}}" name="harga">

    <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
        <div class="product-details-info">
            <div class="product-details-info-price"><span class="del"> $23.99 </span>Rp {{
                number_format($produk->harga,2,",",".") }}</div>
            <h3 class="product-details-info-title">{{ $produk->nama_produk }}</h3>
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
                <a href="#" class="jumlah-minus">-</a>
                <input title="Jml" name="jumlah" class="email input-text qty text" type="text" value="1">
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
        <a href="#" class="author-name">{{ $produk->Kategori->nama_kategori }}</a>
    </div>
</div>
</div>
</div>
 </form> --}}
<!--------------- products-details-end--------------->

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Lihat Lebih Detail</p>
                    <h1>Detail Produk</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="{{asset('/images/produk/' . $produk->gambar)}}" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <form action="{{ route('keranjang') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $produk->id }}">
                    {{-- <input type="hidden" value="{{ $produk->nama_produk }}" name="name">
                    <input type="hidden" value="{{ $produk->gambar}}" name="gambar">
                    <input type="hidden" value="{{  $produk->harga}}" name="harga"> --}}

                <div class="single-product-content">
                    <h3>{{$produk->nama_produk}}</h3>
                    <p class="single-product-pricing"><span></span>Rp. {{
                ($produk->harga) }}</p>
                    <p>{{$produk->deskripsi}}</p>
                    <div class="single-product-form">
                        <form action="index.html">
                            <input title="Jml" name="jumlah" class="email input-text qty text" type="number" value="1">
                        </form>
                        {{-- <a href="{{url('cekout')}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Buy</a> --}}
                        <button type="submit" class="btn btn-secondary">
                            <span class="text" ><i class="fas fa-shopping-cart"></i> Tambah Ke Keranjang</span>
                        </button>
                        <p><strong>Kategori: </strong>{{$produk->kategori->nama_kategori}}</p>
                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->

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
<script>
    function increment() {
        let jumlah = document.getElementById('jumlah');
        let max = jumlah.max;
        if (parseInt(jumlah.value) < max) {
            jumlah.value = parseInt(jumlah.value) + 1;
        }
    }

    function decrement() {
        let jumlah = document.getElementById('jumlah');
        if (parseInt(jumlah.value) > 1) {
            jumlah.value = parseInt(jumlah.value) - 1;
        }
    }
</script>
<!-- end logo carousel -->
@endsection
