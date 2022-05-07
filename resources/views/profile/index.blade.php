@extends('layout.app')

@section('content')

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
                            @if (auth()->user()->role=='seller')
                                <div class="sidebar-menu">
                                    <a href="{{ route('my-store') }}" >Toko Saya</a>
                                </div>
                            @endif
                            <div class="sidebar-menu">
                                <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akun Saya</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('profile') }}">Pengaturan Akun</a>
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
                    <h4 class="">Profile saya</h4>
                    <p>Kelola informasi profil untuk menjaga keamanan akun.</p>
                    <hr>
                    <form action="">
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">
                                <h5> Username :</h5>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">
                                <h5> Nama :</h5>
                            </div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">
                                <h5> Gambar :</h5>
                            </div>
                            <div class="col-sm-3">
                                <img src="{{ asset('img/profile.png') }}" alt="">
                            </div>
                            <div class="col-sm-6">
                                <input type="file" class="form-control">
                                <p style="font-size: 12px;">Ukuran gambar: maks: 1 MB <br>Format gambar: .JPEG, .PNG</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">
                                <h5> Email :</h5>
                            </div>
                            <div class="col-sm-9">
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">
                                <h5> Jenis Kelamin :</h5>
                            </div>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                            Laki-laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">
                                <h5> Tanggal Lahir :</h5>
                            </div>
                            <div class="col-sm-9">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-sm-3 text-right">

                            </div>
                            <div class="col-sm-9">
                                <a href="" class="btn btn-primary w-100" >Simpan Perubahan</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
