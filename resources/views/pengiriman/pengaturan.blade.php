@extends('layout.app')

@section('content')

    <section class="pengaturan-pencarian" style="background: #F5F5F5">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="background: white;margin: 20px 0px; padding:10px;">
                    <div class="row sidebar">
                        <div class="col-lg-12">
                            <div class="sidebar-menu">
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
                            <h4 class=""> Pengaturan Pengiriman</h4>
                        </div>
                    </div>
                    <hr>
                    <h5><i class="fa fa-gear"> Jasa Kirim</i></h5>
                    <p>Pilih jasa pengiriman</p>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Regular (Cashless)</h5>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="" class="btn btn-light" >Tutup <i class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                            <div class="row my-3" style="background:#EBEBEB; padding:10px 10px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">COD</label>
                                </div>
                            </div>
                            <div class="row">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingPengantaranLangsung">
                                            <h5 class="mb-0">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#pengantaranLangsung" aria-expanded="true" aria-controls="pengantaranLangsung"> Pengantaran Langsung </button>
                                                    </div>
                                                    <div class="col-sm-6 text-right">
                                                        <!-- Rounded switch -->
                                                        <label class="switch m-2">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <i class="fa fa-caret-down mr-3"></i>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <div id="pengantaranLangsung" class="collapse show" aria-labelledby="headingPengantaranLangsung" data-parent="#accordion">
                                            <div class="card-body">
                                                Anteraja Reguler adalah jasa kirim dengan tipe layanan pengiriman Reguler yang menawarkan jasa penjemputan paket (pick up). Wilayah yang didukung oleh Anteraja Reguler adalah Jabodetabek, Jawa Barat, Jawa Timur, Jawa Tengah, D.I. Yogyakarta, Sumatera, Kalimantan, Sulawesi, Bali, Nusa Tenggara, dan Papua.
                                                <br><br>
                                                Anteraja Reguler tidak menerima pengiriman barang-barang berikut: <br>
                                                1. Binatang/tumbuhan hidup<br>
                                                2. Surat berharga<br>
                                                3. Senjata<br>
                                                4. Barang yang mudah meledak<br>
                                                5. Barang akrilik<br>
                                                6. Barang dari marmer<br>
                                                7. Barang dari gelas<br>
                                                8. Alkohol/minuman beralkohol<br>
                                                <br><br>
                                                Berat maks.: 50kg<br>
                                                Dimensi maks.: 50x50x50cm<br>
                                                Kontak: 021-50603333 (Customer Service), atau cs@anteraja.id (email).<br>
                                                Situs: https://anteraja.id/<br>
                                                Batasan<br>
                                                Berat maks: 50000gr<br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingPengambilanLangsung">
                                            <h5 class="mb-0">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapsePengambilanLangsung" aria-expanded="true" aria-controls="collapsePengambilanLangsung"> Pengambilan Langsung </button>
                                                    </div>
                                                    <div class="col-sm-6 text-right">
                                                        <!-- Rounded switch -->
                                                        <label class="switch m-2">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <i class="fa fa-caret-down mr-3"></i>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <div id="collapsePengambilanLangsung" class="collapse" aria-labelledby="headingPengambilanLangsung" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos alias quam facere harum similique provident quo ea quod tenetur. Dolor nobis obcaecati totam, nemo eveniet ipsam adipisci explicabo reiciendis quibusdam.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne"> J&T Express </button>
                                                    </div>
                                                    <div class="col-sm-6 text-right">
                                                        <!-- Rounded switch -->
                                                        <label class="switch m-2">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <i class="fa fa-caret-down mr-3"></i>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut minus beatae dolores deleniti ratione sunt aliquam. Natus doloremque facere, hic molestiae, voluptas aliquam deleniti porro quibusdam minima repellat maxime. Possimus?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row  mt-4">
                                <div class="col-sm-6">
                                    <h5>Hemat</h5>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="" class="btn btn-light" >Tutup <i class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Sicepat Halu </button>
                                                    </div>
                                                    <div class="col-sm-6 text-right">
                                                        <!-- Rounded switch -->
                                                        <label class="switch m-2">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <i class="fa fa-caret-down mr-3"></i>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne"> JNT Economy </button>
                                                    </div>
                                                    <div class="col-sm-6 text-right">
                                                        <!-- Rounded switch -->
                                                        <label class="switch m-2">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <i class="fa fa-caret-down mr-3"></i>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row  mt-4">
                                <div class="col-sm-6">
                                    <h5>Kargo</h5>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="" class="btn btn-light" >Buka <i class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row  mt-4">
                                <div class="col-sm-6">
                                    <h5>Hari Yang Sama</h5>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <a href="" class="btn btn-light" >Tutup <i class="fa fa-caret-down"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">JNT </button>
                                                    </div>
                                                    <div class="col-sm-6 text-right">
                                                        <!-- Rounded switch -->
                                                        <label class="switch m-2">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <i class="fa fa-caret-down mr-3"></i>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla reprehenderit error iste aliquid ex, itaque debitis, quos doloribus reiciendis ullam nesciunt eligendi. A eveniet expedita quasi laboriosam velit! Qui, voluptates?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">Ninja Van ID</button>
                                                    </div>
                                                    <div class="col-sm-6 text-right">
                                                        <!-- Rounded switch -->
                                                        <label class="switch m-2">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <i class="fa fa-caret-down mr-3"></i>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus fugiat exercitationem nobis molestias repellat praesentium illum eum at recusandae! Itaque officiis facere qui veniam porro molestias aut hic ex ipsam.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne"> J&T Express </button>
                                                    </div>
                                                    <div class="col-sm-6 text-right">
                                                        <!-- Rounded switch -->
                                                        <label class="switch m-2">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                        <i class="fa fa-caret-down mr-3"></i>
                                                    </div>
                                                </div>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci tempore illo quis assumenda consectetur odit eius doloremque nemo corrupti laborum aspernatur voluptates soluta quae expedita ea tempora nobis, dicta nisi!
                                            </div>
                                        </div>
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
