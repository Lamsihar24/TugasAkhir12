@extends('layout.seller')

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
                    <div class="row sidebar">
                        <div class="col-lg-12">
                            <div class="sidebar-menu">
                                <a href="" >Produk Saya</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Pesanan</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" >Kelola Lelang</a>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pembayaran</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Jasa Pengiriman</a>
                                    <a class="dropdown-item" href="#">Pengiriman Saya</a>
                                    <a class="dropdown-item" href="{{ route('penjual.pengaturan-pengiriman') }}">Pengaturan Pengiriman</a>
                                </div>
                            </div>
                            <div class="sidebar-menu">
                                <a href="">Analisis Pembeli</a>
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
                            <h4 class=""><i></i> Pengiriman Pesanan</h4>
                        </div>
                    </div>
                    <hr>
                    <div class="row my3 text-right">
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <h5>Waktu Pesanan Dibuat</h5>
                        </div>
                        <div class="col-md-5"> <input type="date" class="form-control"></div>
                    </div>
                    <div class="row my-3">
                        <div style="width: 30%">
                            <select id="inputGroupSelect01">
                                <option selected>No. Pesanan</option>
                                <option value="1">102</option>
                                <option value="2">105</option>
                                <option value="3">107</option>
                            </select>
                        </div>
                        <div style="width: 55%">
                            <input type="text" class="form-control" placeholder="Masukkan No. Pesanan">
                        </div>
                        <div style="width: 15%; padding:0px 10px;">
                            <a href="" class="btn btn-primary w-100">Cari</a>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-lg-12">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="table-title my-4">
                                        <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                                    </div>
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">No Pemesanan</th>
                                            <th scope="col">Harga Total</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Jasa Kirim</th>
                                            <th scope="col">Aksi</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>139321</td>
                                                <td>Rp.200.000</td>
                                                <td>Dalam pengiriman</td>
                                                <td>Si Cepat REG</td>
                                                <td>
                                                    <a href="" class="btn btn-sm">edit</a>
                                                    <a href="" class="btn btn-sm">hapus</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>139321</td>
                                                <td>Rp.200.000</td>
                                                <td>Dalam pengiriman</td>
                                                <td>Si Cepat REG</td>
                                                <td>
                                                    <a href="" class="btn btn-sm">edit</a>
                                                    <a href="" class="btn btn-sm">hapus</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>139321</td>
                                                <td>Rp.200.000</td>
                                                <td>Dalam pengiriman</td>
                                                <td>Si Cepat REG</td>
                                                <td>
                                                    <a href="" class="btn btn-sm">edit</a>
                                                    <a href="" class="btn btn-sm">hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="table-title my-4">
                                        <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                                    </div>
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">No Pemesanan</th>
                                            <th scope="col">Harga Total</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Jasa Kirim</th>
                                            <th scope="col">Aksi</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>139321</td>
                                                <td>Rp.200.000</td>
                                                <td>Dalam pengiriman</td>
                                                <td>Si Cepat REG</td>
                                                <td>
                                                    <a href="" class="btn btn-sm">edit</a>
                                                    <a href="" class="btn btn-sm">hapus</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>139321</td>
                                                <td>Rp.200.000</td>
                                                <td>Dalam pengiriman</td>
                                                <td>Si Cepat REG</td>
                                                <td>
                                                    <a href="" class="btn btn-sm">edit</a>
                                                    <a href="" class="btn btn-sm">hapus</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>139321</td>
                                                <td>Rp.200.000</td>
                                                <td>Dalam pengiriman</td>
                                                <td>Si Cepat REG</td>
                                                <td>
                                                    <a href="" class="btn btn-sm">edit</a>
                                                    <a href="" class="btn btn-sm">hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="table-title my-4">
                                        <h5>3 Pesanan <a href="" class="btn btn-light float-right" >Urutkan</a></h5>
                                    </div>
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">No Pemesanan</th>
                                            <th scope="col">Harga Total</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Jasa Kirim</th>
                                            <th scope="col">Aksi</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>139321</td>
                                                <td>Rp.200.000</td>
                                                <td>Dalam pengiriman</td>
                                                <td>Si Cepat REG</td>
                                                <td>
                                                    <a href="" class="btn btn-sm">edit</a>
                                                    <a href="" class="btn btn-sm">hapus</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>139321</td>
                                                <td>Rp.200.000</td>
                                                <td>Dalam pengiriman</td>
                                                <td>Si Cepat REG</td>
                                                <td>
                                                    <a href="" class="btn btn-sm">edit</a>
                                                    <a href="" class="btn btn-sm">hapus</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>139321</td>
                                                <td>Rp.200.000</td>
                                                <td>Dalam pengiriman</td>
                                                <td>Si Cepat REG</td>
                                                <td>
                                                    <a href="" class="btn btn-sm">edit</a>
                                                    <a href="" class="btn btn-sm">hapus</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
