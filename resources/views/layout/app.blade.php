<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
           <a class="navbar-brand" href="#">
           <img src="img/logo.png" height="40px" width="100px" alt="">
           </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu-kiri">
                 <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Pasar</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Komunitas</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="#">Workshop</a>
                 </li>
              </ul>
              <form class="d-flex">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu-kanan">
                    <li class="nav-item">
                       <a class="nav-link" aria-current="page" href="#"><img src="img/icon/chart.png" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#"><img src="img/icon/notification.png" alt=""></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><img src="img/icon/profile.png" alt=""></a>
                     </li>
                 </ul>
              </form>
           </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2022 Copyright:
          <a class="text-dark" href="#">HKBP Tarbarita Project</a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
