@extends('layout.app')

@section('content')

    <!-- Breadcrumb Section Begin -->
    {{-- <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6>
                </div>
            </div> --}}
            <div class="checkout__form">
                <h4>Detail Pemesanan</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Depan<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Belakang<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Alamat<span>*</span></p>
                                <input type="text" placeholder="Nama jalan" class="checkout__input__add">
                                <input type="text" placeholder="Nama Bangunan">
                            </div>
                            <div class="checkout__input">
                                <p>Kota/Kabupaten<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Kode Pos<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>No Telepon<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Catatan pemesanan<span>*</span></p>
                                <input type="text"
                                    placeholder="Catatan tentang pesanan anda, paket jangan di banting">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Buat akun?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Buat akun dengan mengisi informasi di bawah</p>
                            <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="password">
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Pemesanan</h4>
                                <div class="checkout__order__products">Produk <span>Total</span></div>
                                <ul>
                                    <li>Peket Buah dan Sayur <span>Rp.225.000</span></li>
                                    <li>Diskon 20% <span>-Rp.45.000</span></li>
                                </ul>
                                {{-- <div class="checkout__order__subtotal">Subtotal <span>Rp.225.000</span></div> --}}
                                <div class="checkout__order__total">Total <span>Rp.180.000</span></div>
                                <button type="submit" class="site-btn">Buat Pemesanan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

@endsection
