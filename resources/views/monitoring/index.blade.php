@extends('layout.app')

@section('content')

    <section class="profil-section" style="background: #F5F5F5">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Toko Saya  >  Analisis Pembeli</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3 px-2">
                    <div class="sidebar bg-white py-3">
                        <div class="sidebar-menu ">
                            <a href="" >Produk Saya</a>
                        </div>
                        <div class="sidebar-menu">
                            <a href="{{ route('sale') }}" >Pesanan</a>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" >Kelola Lelang</a>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Metode Pembayaran</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('payment.saldo') }}">Saldo Penjual </a>
                                <a class="dropdown-item" href="{{ route('payment.setting') }}">Pengaturan Rekening</a>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengiriman</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('shipment') }}">Jasa Pengiriman</a>
                                <a class="dropdown-item" href="{{ route('shipment') }}">Pengiriman Saya</a>
                                <a class="dropdown-item" href="{{ route('shipment.setting') }}">Pengaturan Pengiriman</a>
                            </div>
                        </div>
                        <div class="sidebar-menu">
                            <a href="{{ route('store-monitoring') }}">Analisis Pembeli</a>
                        </div>
                    </div>
                </div>
                <div class="col-9 px-2">
                    <div class="content bg-white p-3">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class=""><i></i> Analisis Pembeli</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="chartContainer" style="height: 300px; width: 100%;"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <p>Total Pegunjung</p>
                                        <h4>100</h4>
                                        <span>vs.kemarin 10% +</span>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <p>Produk Dilihat</p>
                                        <h4>30</h4>
                                        <span>vs.kemarin 5% -</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <p>Pesanan</p>
                                        <h4>200</h4>
                                        <span>vs.kemarin 11% +</span>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <p>Tingkat Konversi</p>
                                        <h4>50,6%</h4>
                                        <span>vs.kemarin 10% -</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
