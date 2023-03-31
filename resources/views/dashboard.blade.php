<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perpustakan RAFIQ</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
</head>
<body>
    <!--Navbar-->
    <nav class="navbar" style="background-color: #967E76;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Perpustakaan Rafiq</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('list.list') }}">List Buku</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('peminjaman.index') }}">Peminjaman Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('anggota.index') }}">anggota</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('buku.index') }}">buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('kembali.index') }}">pengembalian</a>
              </li>
              <a class="nav-link" href="{{ route('login') }}">Logout</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

      <!--Jumbotron-->
      <section class="jumbotron">
        <div class="jumbotron text-center mt-2 text-white">
          <h1 class="display-4">Selamat Datang di Perpustakaan</h1>
          <p class="lead">HALLO MAS RAFIQ :)</p>
        </div>
      </section>

      <!--container-->
      <div class="container-fluid" style="background-color: #EEE3CB;">
        <div class>
          <li align="center">
          <h2>Manfaat Membaca Buku</h2>
          </li>
        </div>
        <div class="video">
          <li align="center"> 
          <video autoplay muted width="580" controls>
          <source src="images/pus.mp4" type="video/mp4">
          </video>
          </li>
        </div>
       </div>

       @yield('content')
       <div class="container-fluid" style="background-color: #00ffbf;">
       <div class="center-text">   
        <div class="col-md-40" >
            <div class="row mt-1">
            <h3>JIKA ADA YG INGIN DI TANYAKAN SILAHKAN WA SAYA YAH ;) </h3>
          </div>
        <div class="container">
        
         <div class="row mt-3">
           <div class="col-md-3">
             <div class="card border-dark">
               <img src="images/nurdin.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title font-weight-bold">INGAT WA YA JANGAN MALU</h5>
                 <a href="https://wa.me/6289636200813">Hubungi Saya yah ;V</a>
                   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                       <div class="modal-content">
                         <div class="modal-header">



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    -->
</body>
</html>