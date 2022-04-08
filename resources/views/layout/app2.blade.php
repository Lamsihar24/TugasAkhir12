<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body style="background-color: #FAFAF7  ">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav me-auto mb-2 mb-lg-0 menu-kiri">
                    <p style="margin: 0px">
                        Ikuti kami di
                        <a href=""><img src="/img/icon/facebook.png" height="25px" width="25px" class="mx-2" alt=""></a>
                        <a href=""><img src="/img/icon/instagram.png" height="25px" width="25px" class="mx-2" alt=""></a>
                    </p>
                </div>
                <form class="d-flex">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Notifikasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Bantuan</a>
                        </li>
                        <li class="nav-item">
                            <!--Google translate JS script-->
                            <div class="nav-link" id='google_translate_element'></div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html"><img src="img/icon/profile.png" width="25px" height="25px" alt=""> Hengki Hutahaean </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    @yield('content')
    {{-- <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright:
          <a class="text-dark" href="#">HKBP Tarbarita Project</a>
        </div>
        <!-- Copyright -->
    </footer> --}}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!--Google translate JS script-->
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    function googleTranslateElementInit() {
            new google.translate.TranslateElement({ layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL }, 'google_translate_element');
    }
</script>
</html>
