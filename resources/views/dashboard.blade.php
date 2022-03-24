@extends('layout.app')

@section('content')
    <section class="search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 search-filter" style="padding: 0px">
                    <div class="devider judul">
                        <h5>Filter</h5>
                    </div>
                    <div class="devider kategori">
                        <h5>Kategori</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                            <label class="form-check-label" for="flexCheckDefault">
                            Sembako
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                            Hasil Panen
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                            Fashion
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                            Buah dan Sayur
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                            Buah dan Sayur
                            </label>
                        </div>
                    </div>
                    <div class="devider harga">

                    </div>
                    <div class="devider rating">

                    </div>
                </div>
                <div class="col-sm-9 search-result">

                </div>
            </div>
        </div>
    </section>
@endsection
