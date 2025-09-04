<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Page</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<style>
  .pic {
    margin-right: 20px;
  }
  a {
    text-decoration: none;
    color: black;
  }
  .circle {
    width: 120px;
    height: 120px;
    border-radius: 60px;
    background-image: url(image/red\ gown.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .circle1 {
    width: 120px;
    height: 120px;
    border-radius: 60px;
    background-image: url(image/couples\ wear.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .circle2 {
    width: 120px;
    height: 120px;
    border-radius: 60px;
    background-image: url(image/pink\ short.jpeg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .circle3 {
    width: 120px;
    height: 120px;
    border-radius: 60px;
    background-image: url(image/beltjpg.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .circle4 {
    width: 120px;
    height: 120px;
    border-radius: 60px;
    background-image: url(image/accessories.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .circle5 {
    width: 120px;
    height: 120px;
    border-radius: 60px;
    background-image: url(image/bags.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .carousel-item img {
    height: 500px;
    object-fit: cover;
  }
</style>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Styles By Mercy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php">Sign In <i class="fa fa-user"
                  aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cart <i class="fa fa-cart-plus" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Wishlist <i class="fa fa-heart"
                  aria-hidden="true"></i></a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/BfJeans.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/Brown summer outfit .jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/black gown.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="row p-2">
      <div class="col col-md-3 col-sm-12">
        <a href="display.php"> <img src="image/brown gown.jpg" alt="" width="200px">
          <p>CHILDREN <i class="fa fa-cart-plus" aria-hidden="true"></i></p>
        </a>
      </div>
      <div class="col col-md-3 col-sm-12">
        <a href="display.php"> <img src="image/white gown.jpg" alt="" width="210px">
          <p>TEENAGERS <i class="fa fa-cart-plus" aria-hidden="true"></i></p>
        </a>
      </div>
      <div class="col col-md-3 col-sm-12">
        <a href="display.php"> <img src="image/BfJeans.jpg" alt="" width="200px">
          <p>MOMS <i class="fa fa-cart-plus" aria-hidden="true"></i></p>
        </a>
      </div>
      <div class="col col-md-3 col-sm-12">
        <a href="display.php"> <img src="image/sundress.jpg" alt="" width="210px">
          <p>MAMAS <i class="fa fa-cart-plus" aria-hidden="true"></i></p>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col col-md-2 col-sm-12">
        <a href="display.php">
          <div class="circle"></div>
          <p>EVENING</p>
        </a>
      </div>
      <div class="col col-md-2 col-sm-12">
        <a href="display.php">
          <div class="circle1"></div>
          <p>COUPLES</p>
        </a>
      </div>
      <div class="col col-md-2 col-sm-12">
        <a href="display.php">
          <div class="circle2"></div>
          <p>HOMECOMING</p>
        </a>
      </div>
      <div class="col col-md-2 col-sm-12">
        <a href="display.php">
          <div class="circle3"></div>
          <p>BELTS</p>
        </a>
      </div>
      <div class="col col-md-2 col-sm-12">
        <a href="display.php">
          <div class="circle4"></div>
          <p>ACCESSORIES</p>
        </a>
      </div>
      <div class="col col-md-2 col-sm-12">
        <a href="display.php">
          <div class="circle5"></div>
          <p>BAGS</p>
        </a>
      </div>
    </div>

     <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/BfJeans.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/Brown summer outfit .jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/black gown.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> 

        

    <div class="row bg-secondary-subtle p-2">
      <div class="col col-md-12 col-sm-12">
        <p class="text-center">NEW ARRIVALS</p>
      </div>
    </div>

    <div style="display: flex; overflow-x: scroll; width: 98%; white-space: nowrap; scrollbar-width: none; ">

      <a href="display.php">
        <div class="pic" style="width:200px; height: 250px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/black\ gown.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Hot Black Gown <br> $50</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/denim.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Fashion Denim <br> $35</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/hoodie\ 2.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Cool Hoodies <br> $25</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/orange\ gown.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Fashion Gown <br> $40</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/cargo\ pants.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Fashion Cargo Pants<br> $50</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/lingerie.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Sexy lingerie <br> $25</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/nike.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Nike Canvas <br> $75</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/bags.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Luxury Hermes Bag <br> $100</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/crop\ top.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Fashion Crop Tops <br> $15</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/heels.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Women Heels <br> $50</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/hijab.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Fashion Ladies Hijab <br> $30</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/googlesjpg.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Ladies Googles <br> $20</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/white\ gown.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Ladies Gown <br> $40</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/watchjpg.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Ladies Fashion Watch <br> $50</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/sneakers.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Luxury Sneakers<br> $120</p>
          </div>
        </div>
      </a>

      <a href="display.php">
        <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
          <div
            style="width: 100%;  background-image: url(image/bag.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
          </div>
          <div>
            <p class="text-center">Ladies Luxury Dior Bag <br> $90</p>
          </div>
        </div>
      </a>
    </div>






  </div>





  <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>