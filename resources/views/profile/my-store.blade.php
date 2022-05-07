@extends('layout.app')

@section('content')

    <!-- Breadcrumb Section Begin -->
    {{-- <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Breadcrumb Section End -->

    <section class="pencarian">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
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
                                <a href="">
                                    <h5>Keranjang Saya</h5>
                                    <span>17 Barang dalam keranjang</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="profil-section" style="background: #F5F5F5">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="background: white;margin: 20px 0px; padding:10px;">
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <img src="{{ asset('img/profile.png') }}" alt="">
                            <h4>Seller</h4>
                            <h5 style="color: #ABA7A7"><i class="fa fa-edit"></i>&nbsp;Ubah Profile</h5>
                        </div>
                    </div>
                    <div class="row sidebar">
                        <div class="col-lg-12">
                            <div class="sidebar-menu">
                                <a href="" >Toko Saya</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akun Saya</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                    <a class="dropdown-item" href="#">Pengaturan Akun</a>
                                </div>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Pesanan Saya</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Favorit</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Notifikasi</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Komunitas</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Tentang HKBP</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 20px;">

                </div>
                <div class="content" style="background: white;margin: 20px 0px;  padding:20px 40px; width:73%;">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class=""><i class="fa fa-file-text-o"></i> Penjualan Saya</h4>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="" style="font-weight: 400; font-size: 18px; line-height: 28px; color: #878787;">Lihat Riwayat penjualan >></a>
                        </div>
                    </div>
                    <hr>
                    <div class="row my3">
                        <div class="status-penjualan text-center">
                            <img src="{{ asset('img/icon/penjualan/icon1.png') }}" width="50px" height="50px" alt="">
                            <p>Pesanan</p>
                        </div>
                        <div class="status-penjualan text-center">
                            <img src="{{ asset('img/icon/penjualan/icon2.png') }}" width="50px" height="50px" alt="">
                            <p>Dikemas</p>
                        </div>
                        <div class="status-penjualan text-center">
                            <img src="{{ asset('img/icon/penjualan/icon3.png') }}" width="50px" height="50px" alt="">
                            <p>Dikirim</p>
                        </div>
                        <div class="status-penjualan text-center">
                            <img src="{{ asset('img/icon/penjualan/icon4.png') }}" width="50px" height="50px" alt="">
                            <p>Pesanan Dibatalkan</p>
                        </div>
                        <div class="status-penjualan text-center">
                            <img src="{{ asset('img/icon/penjualan/icon5.png') }}" width="50px" height="50px" alt="">
                            <p>Pengembalian <br>Dana/Barang</p>
                        </div>
                    </div>

                    <div class="row my-3" style="">
                        <div class="col-10">
                            <h4 style="font-size: 21px;"><i class="fa fa-file-text-o"></i>&nbsp;&nbsp; Produk Saya</h4>
                        </div>
                        <div class="col-2 text-right">
                            <h4 style="font-size: 21px;">></h4>
                        </div>
                    </div>
                    <div class="row my-3" style="">
                        <div class="col-10">
                            <h4 style="font-size: 21px;"><i class="fa fa-truck"></i>&nbsp;&nbsp;<a href="{{ route('add-product') }}" style="color: black"> Tambah Produk Baru</a></h4>
                        </div>
                        <div class="col-2 text-right">
                            <h4 style="font-size: 21px;">></h4>
                        </div>
                    </div>
                    <div class="row my-3" style="">
                        <div class="col-10">
                            <h4 style="font-size: 21px;"><i class="fa fa-handshake-o"></i>&nbsp;&nbsp; Kelola Lelang</h4>
                        </div>
                        <div class="col-2 text-right">
                            <h4 style="font-size: 21px;">></h4>
                        </div>
                    </div>
                    <div class="row my-3" style="">
                        <div class="col-10">
                            <h4 style="font-size: 21px;"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;<a href="{{ route('payment.saldo') }}" style="color: black"> Metode Pembayaran</a></h4>
                        </div>
                        <div class="col-2 text-right">
                            <h4 style="font-size: 21px;">></h4>
                        </div>
                    </div>
                    <div class="row my-3" style="">
                        <div class="col-10">
                            <h4 style="font-size: 21px;"><i class="fa fa-truck"></i>&nbsp;&nbsp;<a href="{{ route('shipment') }}" style="color: black"> Jasa Pengiriman</a></h4>
                        </div>
                        <div class="col-2 text-right">
                            <h4 style="font-size: 21px;">></h4>
                        </div>
                    </div>
                    <br>
                    <div class="row my-3" style="">
                        <div class="col-10">
                            <h4 style="font-size: 21px;"><i class="fa fa-dollar"></i>&nbsp;&nbsp;Saldo Penjualan</h4>
                        </div>
                        <div class="col-2 text-right">
                            <h4 style="font-size: 21px;">></h4>
                        </div>
                    </div>
                    <div class="row my-3" style="">
                        <div class="col-10">
                            <h4 style="font-size: 21px;"><i class="fa fa-line-chart"></i>&nbsp;&nbsp;<a href="{{ route('store-monitoring') }}" style="color:black"> Analisis Pembeli </a> </h4>
                        </div>
                        <div class="col-2 text-right">
                            <h4 style="font-size: 21px;">></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
