<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styles By Mercy</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<style>
  a{
    text-decoration: none;
    color: black;
  }
  div img:hover {
    transform: scale(1.2);
  }
  .pic {
    margin-right: 20px;
  }
  a {
    text-decoration: none;
  }
  @keyframes slideUp {
    0% {
      transform: translateY(50px);
      opacity: 0;
    }

    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }
  .slide-up {
    animation: slideUp 0.7s ease forwards;
    animation-fill-mode: both;
  } 
</style> 

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">STYLES BY MERCY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Best.php">BEST SELLER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ContactUs.php">CONTACT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="NewArrivals.php">NEW ARRIVALS</a>
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
    <div class="row p-2">
      <div class="col col-12 bg-secondary-subtle p-3">
        <div class="d-md-flex flex-md-row d-sm-flex flex-sm-column justify-content-between">
          <div>
            <h5>20% Discount On Your First Order</h5>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
              Ad voluptatum nam ab ut deserunt, reiciendis autem voluptatem <br>
              repellat sint, minus eligendi. Ullam fuga sequi tenetur eveniet, <br>
              nostrum autem illo architecto?</p>
            <button style="background-color: black; color: white;">Shop Now</button>
          </div>

          <div class="mx-4 p-3">
            <img src="image/shopping2.png" style="width: 200px; height: 200px; ">
          </div>

        </div>


      </div>
    </div>

    <div class="row">
      <div class="col col-md-4 col-sm-12 text-center border-end  slide-up" style="animation-delay: 0s;">
        <div class="text-warning">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star-half" aria-hidden="true"></i>
        </div>
        <span style="font-size: 17px;">Present Fitness Cost</span>
        <p style="font-size: 11px;">We offer best service click to select</p>

      </div>

      <div class="col col-md-4 col-sm-12 text-center border-end  slide-up" style="animation-delay: 0.2s;">
        <div class="text-warning">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star-half" aria-hidden="true"></i>
        </div>
        <span style="font-size: 17px;">Croot Brook Wislong Style</span>
        <p style="font-size: 11px;">We offer best service click to select <br> shop for less</p>

      </div>

      <div class="col col-md-4 col-sm-12 text-center border-end  slide-up" style="animation-delay: 0.4s;">
        <div class="text-warning">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
        </div>
        <span style="font-size: 17px;">European Costly Hoods</span>
        <p style="font-size: 11px;">Click here to shop from brand</p>

      </div>

    </div>

    <div class="row text-center mt-3">
      <div class="col col-md-12 col-sm-12">
        <p style="font-size: 25px;">Female Section</p>
      </div>

    </div>

    <div style="display: flex; overflow-x: scroll; width: 98%; white-space: nowrap; scrollbar-width: none; ">

      <a href="display.php"><div class="pic" style="width:200px; height: 250px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/black\ gown.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Hot Black Gown <br> $50</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/denim.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Fashion Denim <br> $35</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/hoodie\ 2.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Cool Hoodies <br> $25</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/orange\ gown.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Fashion Gown <br> $40</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/cargo\ pants.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Fashion Cargo Pants<br> $50</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/lingerie.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Sexy lingerie <br> $25</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/nike.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Nike Canvas <br> $75</p>
        </div>
      </div></a>

     <a href="display.php"> <div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/bags.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Luxury Hermes Bag <br> $100</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/crop\ top.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Fashion Crop Tops <br> $15</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/heels.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Women Heels <br> $50</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/hijab.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Fashion Ladies Hijab <br> $30</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/googlesjpg.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Ladies Googles <br> $20</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/white\ gown.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Ladies Gown <br> $40</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/watchjpg.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Ladies Fashion Watch <br> $50</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/sneakers.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Luxury Sneakers<br> $120</p>
        </div>
      </div></a>

      <a href="display.php"><div class="pic" style="width:250px; height: 200px;flex-shrink: 0;">
        <div
          style="width: 100%;  background-image: url(image/bag.jpg);  background-position: center; background-repeat: no-repeat; background-size: cover;  height: 200px;">
        </div>
        <div>
          <p class="text-center">Ladies Luxury Dior Bag <br> $90</p>
        </div>
      </div></a>
    </div>

    <div>
      Click here to <a href="shopmore.php">Shop More</a>
    </div>

    <div class="row text-center mt-3">
      <div class="col col-md-12 col-sm-12">
        <p style="font-size: 25px;">Male Section</p>
      </div>

    </div>

    <div class="row text-center mt-3 bg-secondary-subtle p-2">
      <div class="col col-md-4 col-sm-12">
        <a href="display.php"><img src="image/tshirt.jpg" width="170px">
        <p>Men T-shirt <br> $150</p></a>
      </div>

      <div class="col col-md-4 col-sm-12">
        <a href="display.php"><img src="image/men cloth.jpg" width="293px">
        <p>Complete Outfits <br> $200</p></a>
      </div>
      <div class="col col-md-4 col-sm-12">
        <a href="display.php"><img src="image/watch.jpg" width="280px">
        <p>Luxury Rolex Men Watch <br> $500</p></a>
      </div>
    </div>

    <div class="row text-center mt-3">
      <div class="col col-md-12 col-sm-12">
        <p style="font-size: 25px;">More Items</p>
      </div>

    </div>

    <div class="row mt-4 text-center bg-secondary-subtle p-2">
      <div class="col col-md-3 col-sm-12">
        <a href="display.php"><img src="image/beltjpg.jpg" width="150px">
        <p> Belt <br> $50</p></a>
      </div>

      <div class="col col-md-3 col-sm-12">
        <a href="display.php"><img src="image/outwear.jpg" width="180px">
        <p>Gucci outwear <br> $80</p></a>
      </div>

      <div class="col col-md-3 col-sm-12">
        <a href="display.php"><img src="image/hoodie.jpg" width="170px">
        <p>Hoodies <br> $30</p></a>
      </div>

      <div class="col col-md-3 col-sm-12">
        <a href="display.php"><img src="image/mini skirt.jpg" width="220px">
        <p>Skirt <br> $20</p></a>
      </div>

    </div>
  </div>

  <div class="row p-3 bg-secondary text-light text-center" style="width: 100%;">
    <div class="col col-md-4 col-sm-12 text-dark">
      <h4>ABOUT</h4>
      <p style="font-size: 14px;"> <a href="Index.php">Home </a> <br> <a href="About.php">About Us</a> <br> <a href="Best.php">Best Seller </a><br> <a href="NewArrivals.php">New Arrivals</a></p>

    </div>
    <div class="col col-md-4 col-sm-12 text-dark">
      <h4>OUR ADDRESS</h4>
      <p style="font-size: 14px;">Shop 20 Garrage Market, <br> Lagos Asaba Road <br> Agbor Delta state</p>

    </div>

    <div class="col col-md-4 col-sm-12 text-dark">
      <h4>Our Channel/Active Hours</h4>
      <span style="font-size: 14px;">Twitter:SBM12 <br>Tiktok:SBM <br>IG:SBMS</span> <br>
      <span style="font-size: 18px;">Monday-Sunday 8am-6pm</span>

    </div>
    <hr>
    <div>
      <p class="text-dark">&copy; 2025 Designed By Mercy.</a></p>
    </div>


  </div>


  </div>

  <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>  

</html>