@extends('layout.app')

@section('content')
    <section class="search">
        <div class="container">
            <div class="row m-2 search-form">
                <div class="col-sm-2 text-center">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="col-sm-7">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                    </div>
                    <div class="search-item">
                        <ul>
                            <li><a href="">Detergen</a></li>
                            <li><a href="">Sembako</a></li>
                            <li><a href="">Minyak Goreng</a></li>
                            <li><a href="">Perlengkapan Dapur</a></li>
                            <li><a href="">Bahan Pokok</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 mt-3">
                    <a href="" style="color: black; text-decoration:none;"><img src="img/icon/chart.png" class="ms-4" style="width: 25px; height:25px;" alt=""> Keranjang Saya</a>
                </div>
            </div>
        </div>
    </section>
    <section class="banner">
        <div class="container">
            <div class="row m-2">
                <div class="col-sm-6">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/welcome.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>First slide label</h5>
                              <p>Some representative placeholder content for the first slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">

                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
