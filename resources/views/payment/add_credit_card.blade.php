@extends('layout.app')

@section('content')

    <section class="profil-section" style="background: #F5F5F5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-0 mt-3">Toko Saya  >  Metode Pembayaran  > Pengaturan Rekening</p>
                </div>
            </div>
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
                                <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Metode Pembayaran</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('payment.saldo') }}">Saldo Penjual </a>
                                    <a class="dropdown-item" href="{{ route('payment.setting') }}">Pengaturan Rekening</a>
                                </div>
                            </div>
                            <div class="sidebar-menu">
                                <a href="" class="dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengiriman</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Jasa Pengiriman</a>
                                    <a class="dropdown-item" href="#">Pengiriman Saya</a>
                                    <a class="dropdown-item" href="{{ route('shipment.setting') }}">Pengaturan Pengiriman</a>
                                </div>
                            </div>
                            <div class="sidebar-menu">
                                <a href="">Analisis Pembeli</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 20px;">

                </div>
                <div class="content" style="background: white;margin: 20px 0px;  padding:20px 40px; width:73%;">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class=""><i></i> Pilih Bank</h4>
                        </div>
                    </div>
                    <hr>
                    <div class="row py-3">
                        <div class="col-md-4">
                            <div class="bank-box p-2">
                                <div class="row">
                                    <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px"></i></a></div>
                                    <div class="col-10">
                                        <img src="{{ asset('img/icon/bank/mandiri.png') }}" alt="">
                                        <p>Bank Mandiri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bank-box p-2">
                                <div class="row">
                                    <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px"></i></a></div>
                                    <div class="col-10">
                                        <img src="{{ asset('img/icon/bank/cimb.png') }}" alt="">
                                        <p>CIMB Niaga</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bank-box p-2">
                                <div class="row">
                                    <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px"></i></a></div>
                                    <div class="col-10">
                                        <img src="{{ asset('img/icon/bank/danamon.png') }}" alt="">
                                        <p>Bank Danamon</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-md-4">
                            <div class="bank-box p-2">
                                <div class="row">
                                    <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px;"></i></a></div>
                                    <div class="col-10">
                                        <img src="{{ asset('img/icon/bank/bni.png') }}" alt="">
                                        <p>Bank Negara Indonesia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bank-box p-2">
                                <div class="row">
                                    <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px"></i></a></div>
                                    <div class="col-10">
                                        <img src="{{ asset('img/icon/bank/permata.png') }}" alt="">
                                        <p>Bank Permata</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bank-box p-2">
                                <div class="row">
                                    <div class="col-2 "><a href=""><i class="fa fa-plus-circle align-middle" style="font-size: 36px"></i></a></div>
                                    <div class="col-10">
                                        <img src="{{ asset('img/icon/bank/bca.png') }}" alt="">
                                        <p>Bank BCA</p>
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
