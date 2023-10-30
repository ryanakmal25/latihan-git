<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TOKO MURAH</title>

    <link rel="stylesheet" href="css/home.css">
  </head>
  <div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
            <nav class="navbar navbar-light bg-light">
              <div class="container-fluid">
                <span class="navbar-brand mb-0 h1">TOKO MURAH </span>
              </div>
              </nav>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="Register.php">Register</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End-->

      <!-- Banner -->
      <div class="slides">
        <div class="slide">
          <img src="image/banner/banner logo.png" alt="">
        </div>
        <div class="slide">
          <img src="image/banner/Untitled design (1).png" alt="">
        </div>
        <div class="navigation">
          <a class = "prev" onclick = "plusSlides(-1)">&#10094;</a>
          <a class = "next" onclick = "plusSlides(-1)">&#10095;</a>
        </div>
      </div>

      <script>
        var slideIndex = 1;
        showSlides(slideIndex);
  
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
  
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("slide");
          if (n > slides.length)
          {
            slideIndex = 1;
          }
          if (n < 1)
          {
            slideIndex = slides.length
          }
          for (i = 0; i < slides.length; i++)
          {
            slides[i].style.display = "none";
          }
          slides[slideIndex-1].style.display = "block";
        }
      </script>
      <!-- Banner End -->

      <!-- Opening -->
      <div class="opening">
        <div class="container">
          <div class="row ai-center">
            <div class="col6">
              <div class="opening-desc">
                <h1>Selamat Datang di TOKO MURAH</h1>
                <p>Disini kami menyediakan T-SHIRT, SHIRT, SHORT PANTS, LONG PANTS
                  dengan harga yang murah dan berkualitas
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Opening End -->

      <!-- Card Kemeja -->
      <div class="container">
        <div class="row">
          <div class="col">
            <h5>Kemeja pendek</h5>
          </div>
          <div class="col">
            <h5>Kemeja Panjang</h5>
          </div>
          <div class="col">
            <h5>Hoodie</h5>
          </div>
          <div class="col">
            <h5>Celana Pendek</h5>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h6>Best Seller</h6>
            <div class="card" style="width: 9rem;">
              <img src="../kemeja/kemeja pendek/kemeja putih pendek.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 0.8rem;">Kemeja Putih Pendek</h5>
                <!---->
                <a href="#" class="btn btn-primary">Cek Disini</a>
              </div>
            </div>
          </div>
          <div class="col">
            <h6>Best Seller</h6>
            <div class="card" style="width: 9rem;">
              <img src="../kemeja/kemeja pendek/kemeja putih pendek.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 0.8rem;">Kemeja Putih Panjang</h5>
                <!---->
                <a href="#" class="btn btn-primary">Cek Disini</a>
              </div>
            </div>
          </div>
          <div class="col">
            <h6>Best Seller</h6>
            <div class="card" style="width: 9rem;">
              <img src="kemeja/hodie putih/pngwing.com (2).png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 0.8rem;">Hoodie Putih Panjang</h5>
                <!---->
                <a href="#" class="btn btn-primary">Cek Disini</a>
              </div>
            </div>
          </div>
          <div class="col">
            <h6>Best Seller</h6>
            <div class="card" style="width: 9rem;">
              <img src="kemeja/celana pendek/celana pendek 1.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 0.8rem;">Celana Pendek Army</h5>
                <!---->
                <a href="#" class="btn btn-primary">Cek Disini</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h6>Best Seller</h6>
              <div class="card" style="width: 9rem;">
                <img src="kemeja/kemeja pendek hitam/kemeja hitam pendek.png" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title" style="font-size: 0.8rem;">Kemeja Hitam Pendek</h5>
                  <!---->
                  <a href="#" class="btn btn-primary">Cek Disini</a>
                </div>
              </div>
            </div>
          <div class="col">
            <h6>Best Seller</h6>
            <div class="card" style="width: 9rem;">
              <img src="kemeja/kemeja panjang/kemeja panjang.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 0.8rem;">Kemeja Hitam Panjang</h5>
                <!---->
                <a href="#" class="btn btn-primary">Cek Disini</a>
              </div>
            </div>
          </div>
          <div class="col">
            <h6>Best Seller</h6>
            <div class="card" style="width: 9rem;">
              <img src="kemeja/hodie hitam/hoodie hitam.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 0.8rem;">Hoodie Hitam Panjang</h5>
                <!---->
                <a href="#" class="btn btn-primary">Cek Disini</a>
              </div>
            </div>
          </div>
          
          <div class="col">
            <h6>Best Seller</h6>
            <div class="card" style="width: 9rem;">
              <img src="kemeja/celana pendek/celana pendek cargo.png" class="card-img-top" alt="">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 0.8rem;">Celana Pendek Cargo</h5>
                <!---->
                <a href="#" class="btn btn-primary">Cek Disini</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card Kemeja End -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>