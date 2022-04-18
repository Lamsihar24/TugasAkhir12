@extends('layout.seller')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Pilih Kategori</span>
                        </div>
                        <ul>
                            <li><a href="#">Daging Segar</a></li>
                            <li><a href="#">Bahan Pokok</a></li>
                            <li><a href="#">Buah-buahan</a></li>
                            <li><a href="#">Pakaian</a></li>
                            <li><a href="#">Ulos</a></li>
                            <li><a href="#">Peralatan Elektronik</a></li>
                            <li><a href="#">Peralatan Dapur</a></li>
                            <li><a href="#">Makanan & Minuman</a></li>
                            <li><a href="#">Perabot</a></li>
                            <li><a href="#">Kebaya</a></li>
                            <li><a href="#">Buku</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Semua Kategori
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Apa yang sedang anda cari?">
                                <a type="submit" class="site-btn">CARI</a>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <a href="{{ route('keranjang') }}">
                                    <h5>Keranjang Saya</h5>
                                    <span>17 Barang dalam keranjang</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>Selamat Datang Di</span>
                            <h2>HKBP Store<br /></h2>
                            <p>Berbagai kebutuhan dapat anda temukan di sini</p>
                            <a href="#" class="primary-btn">Belanja sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-1.png') }}" alt="">
                    <p>Bahan Pokok & Perlengkapan Dapur</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-2.png') }}" alt="">
                    <p>Pakaian Wanita</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-3.png') }}" alt="">
                    <p>Kebersihan Rumah</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-4.png') }}" alt="">
                    <p>Perlengkapan Bayi</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-5.png') }}" alt="">
                    <p>Makanan Instan</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-6.png') }}" alt="">
                    <p>Minuman</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-7.png') }}" alt="">
                    <p>Sendal Pria</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-8.png') }}" alt="">
                    <p>Susu Bayi</p>
                </div>
            </div>
            <div class="row">
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-9.png') }}" alt="">
                    <p>Sepatu Anak</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-10.png') }}" alt="">
                    <p>Pakaian Pria</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-11.png') }}" alt="">
                    <p>Jam Tangan</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-12.png') }}" alt="">
                    <p>Bunga Altar</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-13.png') }}" alt="">
                    <p>Menu Sarapan </p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-14.png') }}" alt="">
                    <p>Makanan Ringan</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-15.png') }}" alt="">
                    <p>Hiasan Dinding</p>
                </div>
                <div class="kategori text-center" style="width: 12.5%; border:solid 1px rgb(173, 167, 167); padding:5px 0px;">
                    <img src="{{ asset('img/categories/kategori-16.png') }}" alt="">
                    <p>Penutup Altar</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Semua</li>
                            <li data-filter=".sembako">Bahan Pokok</li>
                            <li data-filter=".pakaian">Pakaian</li>
                            <li data-filter=".buah-buahan">Buah-buahan</li>
                            <li data-filter=".lain-lain">Lain-lain</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges sembako">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/product-13.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Ikan Teri</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp25.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges pakaian">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/batik.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Batik Wanita</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(120)</p>
                            </div>
                            <h5>Rp280.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges bahan-pokok">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/rinso.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Rinso</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(20)</p>
                            </div>
                            <h5>Rp5.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges sembako">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/sabub-cair.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Sabun Cair</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(93)</p>
                            </div>
                            <h5>Rp18.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges pakaian">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/rok.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Rok</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(33)</p>
                            </div>
                            <h5>Rp80.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges sembako">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/sunlight.jpeg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Sunlight</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp10.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges lain-lain">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/tisu-basah.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Tisu basah</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/telon.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Minyak Telon</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/switsal.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Switsal</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/tepung.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Daging Segar</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/wpc.jpeg') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Daging Segar</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/sikat-gigi.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Daging Segar</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/sun-cream.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Daging Segar</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/kebaya.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Daging Segar</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/garam.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Daging Segar</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('img/product/kara.png')}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Daging Segar</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/mama-lemon.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Daging Segar</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/product/jeans.png') }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <a href="#">
                        <div class="featured__item__text text-left">
                            <h6>Daging Segar</h6>
                            <div>
                                <p style="margin: 0px">
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                <i class="fa fa-star" style="color: #F0D25A;"></i>
                                 &nbsp;(220)</p>
                            </div>
                            <h5>Rp20.000</h5>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
@endsection
