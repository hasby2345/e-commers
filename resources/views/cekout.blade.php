@extends('layouts.frontend')
@section('content')
<!--------------- blog-tittle-section---------------->
{{-- <section class="blog about-blog">
    <div class="container">
        <div class="blog-bradcrum">
            <span><a href="index.html">Home</a></span>
            <span class="devider">/</span>
            <span><a href="#">Checkout</a></span>
        </div>
        <div class="blog-heading about-heading">
            <h1 class="heading">Checkout</h1>
        </div>
    </div>
</section>
<!--------------- blog-tittle-section-end---------------->
<!--------------- checkout-section---------------->
<section class="checkout product footer-padding">
    <div class="container">
        <div class="checkout-section">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="checkout-wrapper">
                        <a href="login.html" class="shop-btn">Log into Your Account</a>
                        <div class="account-section billing-section">
                            <h5 class="wrapper-heading">Billing Details</h5>
                            <div class="review-form">
                                <div class=" account-inner-form">
                                    <div class="review-form-name">
                                        <label for="fname" class="form-label">First Name*</label>
                                        <input type="text" id="fname" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="review-form-name">
                                        <label for="lname" class="form-label">Last Name*</label>
                                        <input type="text" id="lname" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class=" account-inner-form">
                                    <div class="review-form-name">
                                        <label for="email" class="form-label">Email*</label>
                                        <input type="email" id="email" class="form-control"
                                            placeholder="user@gmail.com">
                                    </div>
                                    <div class="review-form-name">
                                        <label for="phone" class="form-label">Phone*</label>
                                        <input type="tel" id="phone" class="form-control"
                                            placeholder="+880388**0899">
                                    </div>
                                </div>
                                <div class="review-form-name">
                                    <label for="country" class="form-label">Country*</label>
                                    <select id="country" class="form-select">
                                        <option>Choose...</option>
                                        <option>Bangladesh</option>
                                        <option>United States</option>
                                        <option selected>United Kingdom</option>
                                    </select>
                                </div>
                                <div class="review-form-name address-form">
                                    <label for="address" class="form-label">Address*</label>
                                    <input type="text" id="address" class="form-control"
                                        placeholder="Enter your Address">
                                </div>
                                <div class=" account-inner-form city-inner-form">
                                    <div class="review-form-name">
                                        <label for="city" class="form-label">Town / City*</label>
                                        <select id="city" class="form-select">
                                            <option>Choose...</option>
                                            <option>Newyork</option>
                                            <option>Dhaka</option>
                                            <option selected>London</option>
                                        </select>
                                    </div>
                                    <div class="review-form-name">
                                        <label for="number" class="form-label">Postcode / ZIP*</label>
                                        <input type="number" id="number" class="form-control" placeholder="0000">
                                    </div>
                                </div>


                                <div class="review-form-name checkbox">
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="account">
                                        <label for="account" class="form-label">
                                            Create an account?</label>
                                    </div>
                                </div>
                                <div class="review-form-name shipping">
                                    <h5 class="wrapper-heading">Shipping Address</h5>
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="remember">
                                        <label for="remember" class="form-label">
                                            Create an account?</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="checkout-wrapper">
                        <a href="#" class="shop-btn">Enter Coupon Code</a>
                        <div class="account-section billing-section">
                            <h5 class="wrapper-heading">Order Summary</h5>
                            <div class="order-summery">
                                <div class="subtotal product-total">
                                    <h5 class="wrapper-heading">PRODUCT</h5>
                                    <h5 class="wrapper-heading">TOTAL</h5>
                                </div>
                                <hr>
                                <div class="subtotal product-total">
                                    <ul class="product-list">
                                        <li>
                                            <div class="product-info">
                                                <h5 class="wrapper-heading">Apple Watch X1</h5>
                                                <p class="paragraph">64GB, Black, 44mm, Chain Belt</p>
                                            </div>
                                            <div class="price">
                                                <h5 class="wrapper-heading">$38</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-info">
                                                <h5 class="wrapper-heading">Beats Wireless x1</h5>
                                                <p class="paragraph">64GB, Black, 44mm, Chain Belt</p>
                                            </div>
                                            <div class="price">
                                                <h5 class="wrapper-heading">$48</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-info">
                                                <h5 class="wrapper-heading">Samsung Galaxy S10 x2</h5>
                                                <p class="paragraph">12GB RAM, 512GB, Dark Blue</p>
                                            </div>
                                            <div class="price">
                                                <h5 class="wrapper-heading">$279</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="subtotal product-total">
                                    <h5 class="wrapper-heading">SUBTOTAL</h5>
                                    <h5 class="wrapper-heading">$365</h5>
                                </div>
                                <div class="subtotal product-total">
                                    <ul class="product-list">
                                        <li>
                                            <div class="product-info">
                                                <p class="paragraph">SHIPPING</p>
                                                <h5 class="wrapper-heading">Free Shipping</h5>

                                            </div>
                                            <div class="price">
                                                <h5 class="wrapper-heading">+$0</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="subtotal total">
                                    <h5 class="wrapper-heading">TOTAL</h5>
                                    <h5 class="wrapper-heading price">$365</h5>
                                </div>
                                <div class="subtotal payment-type">
                                    <div class="checkbox-item">
                                        <input type="radio" id="bank" name="bank">
                                        <div class="bank">
                                            <h5 class="wrapper-heading">Direct Bank Transfer</h5>
                                            <p class="paragraph">Make your payment directly into our bank account.
                                                Please use
                                                <span class="inner-text">
                                                    your Order ID as the payment reference.
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="radio" id="cash" name="bank">
                                        <div class="cash">
                                            <h5 class="wrapper-heading">Cash on Delivery</h5>
                                        </div>
                                    </div>
                                    <div class="checkbox-item">
                                        <input type="radio" id="credit" name="bank">
                                        <div class="credit">
                                            <h5 class="wrapper-heading">Credit/Debit Cards or Paypal</h5>

                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="shop-btn">Place Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--------------- checkout-section-end---------------->

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Lakukan Pembayaran</p>
                    <h1>Check Out Produk</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- check out section -->
<div class="checkout-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-accordion-wrap">
                    <div class="accordion" id="accordionExample">
                      <div class="card single-accordion">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Billing Address
                            </button>
                          </h5>
                        </div>


                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="billing-address-form">
                                <form action="index.html">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="billing_address" required placeholder="Address *">
                                    </div>
                                    <div class="heading_s1">
                                        <h4>Additional Information</h4>
                                    </div>
                                    <div class="form-group mb-0">
                                        <textarea rows="5" class="form-control" name="order_notes" placeholder="Order notes"></textarea>
                                    </div>

                                    <p><input type="text" placeholder="Name"></p>
                                    <p><input type="email" placeholder="Email"></p>
                                    <p><input type="text" placeholder="Address"></p>
                                    <p><input type="tel" placeholder="Phone"></p>
                                    <p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea></p>
                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('place.order') }}" method="post">
                @csrf
            <div class="col-lg-4">
                <div class="order-details-wrap">
                    <table class="order-details">
                        <thead>
                            <tr>
                                <th>Your order Details</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody class="order-details-body">
                            <tr>
                                <td>Product</td>
                                <td>Total</td>
                            </tr>
                            <tr>
                                <td>Nama Produk</td>
                                <td>$85.00</td>
                            </tr>
                        </tbody>
                        <tbody class="checkout-details">
                            <tr>
                                <td>Subtotal</td>
                                <td>$190</td>
                            </tr>
                            <tr>
                                <td>Shipping</td>
                                <td>$50</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>$240</td>
                            </tr>
                        </tbody>
                    </table>

                    <button type="submit"  class="boxed-btn">Place Order</button>
                </div>
            </div>
           
            </form>

        </div>
    </div>
</div>
<!-- end check out section -->

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
