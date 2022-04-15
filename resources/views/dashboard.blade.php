@extends('layout.app')

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
                                <button type="submit" class="site-btn">CARI</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <a href="">
                                    <h5>Keranjang Saya</h5>
                                    <span>17 Barang dalam keranjang</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
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
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <h5><a href="#">Buah-buahan</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                            <h5><a href="#">Hasil Panen</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                            <h5><a href="#">Sayuran</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/product/kebaya.png">
                            <h5><a href="#">Pakaian</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                            <h5><a href="#">Bahan Makanan</a></h5>
                        </div>
                    </div>
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
                    <div class="section-title">
                        <h2>Produk Terlaris</h2>
                    </div>
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/product-13.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/batik.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/rinso.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/sabub-cair.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/rok.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/sunlight.jpeg">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/tisu-basah.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/telon.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/switsal.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/tepung.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/wpc.jpeg">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/sikat-gigi.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/sun-cream.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/kebaya.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/garam.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/kara.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/mama-lemon.png">
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
                        <div class="featured__item__pic set-bg" data-setbg="img/product/jeans.png">
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

    <!-- Latest Product Section Begin -->
    {{-- <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-2.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-3.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>Rp20.000</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    {{-- <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Blog Section End -->
@endsection
