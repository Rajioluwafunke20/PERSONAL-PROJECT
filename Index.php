<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBM</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>

<body>
    <style>
        div img:hover {
            transform: scale(1.2);
        }

        .circle {
            background-image: url(image/BfJeans.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100px;
            height: 100px;
            border-radius: 55px;
        }

        .circle1 {
            background-image: url(image/sundress.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100px;
            height: 100px;
            border-radius: 55px;
        }

        .circle2 {
            background-image: url(image/shirt2.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100px;
            height: 100px;
            border-radius: 55px;
        }

        .circle3 {
            background-image: url(image/shorts.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100px;
            height: 100px;
            border-radius: 55px;
        }

        .circle4 {
            background-image: url(image/outwear2jpg.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100px;
            height: 100px;
            border-radius: 55px;
        }

        .circle5 {
            background-image: url(image/accessories.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100px;
            height: 100px;
            border-radius: 55px;
        }

        a {
            text-decoration: none;
            color: black;
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
            animation: slideUp 0.8s ease forwards;
        }

        @keyframes slideLeft {
            0% {
                transform: translateX(-50px);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-left {
            animation: slideLeft 0.7s ease forwards;
            animation-fill-mode: both;
        }
    </style> 

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">STYLES BY MERCY</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
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
            <div class="col col-12 bg-secondary-subtle p-2">
                <div class="d-md-flex flex-md-row d-sm-flex flex-sm-column justify-content-between">
                    <div>
                        <h5>20% Discount On Your First Order</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                            Ad voluptatum nam ab ut deserunt, reiciendis autem voluptatem <br>
                            repellat sint, minus eligendi. Ullam fuga sequi tenetur eveniet, <br>
                            nostrum autem illo architecto?</p>
                        <button style="background-color: rgb(38, 37, 37); color: white;">Shop Now</button>
                    </div>

                    <div class="mx-4 p-2">
                        <img src="image/smiling girl.png" style="width: 200px; height: 200px; ">
                    </div>

                </div>
            </div>
        </div>

        <div class="row p-3 text-center">
            <div class="col col-md-3 col-sm-12 slide-up" style="animation-delay: 0s;">
                <i style="color: brown;" class="fa fa-truck " aria-hidden="true"></i><br>
                <span style="font-size: 13px;"><b>FREE DELIVERIES</b></span> <br>
                <span style="font-size: 12px;">Uk Orders Only</span>
            </div>
            <div class="col col-md-3 col-sm-12 slide-up" style="animation-delay: 0.2s; ">
                <i class="fa fa-phone-alt text-success" aria-hidden="true"></i> <br>
                <span style="font-size: 13px;"><b>24\7 SUPPORT</b></span> <br>
                <span style="font-size: 12px;">Dedicated Support</span>
            </div>
            <div class="col col-md-3 col-sm-12 slide-up" style="animation-delay: 0.4s;">
                <i class="fa fa-archive" aria-hidden="true"></i> <br>
                <span style="font-size: 13px;"><b>EASY AND FAST RETURN</b></span> <br>
                <span style="font-size: 12px;">Shop With Confidence</span>
            </div>
            <div class="col col-md-3 col-sm-12 slide-up" style="animation-delay: 0.6s;">
                <i class="fa fa-credit-card text-danger" aria-hidden="true"></i> <br>
                <span style="font-size: 13px;"><b>SECURED PAYMENT</b></span> <br>
                <span style="font-size: 12px;">100% Secured Payment</span>
            </div>

        </div>

        <div class="row p-3 text-center bg-secondary-subtle mt-3">
            <div class="col col-md-2 col-sm-12 slide-left">
                <a href="display.php">
                    <div class="circle"></div>
                    <span>Jeans</span>
                </a>
            </div>
            <div class="col col-md-2 col-sm-12 slide-left" style="animation-delay: 0.1s;">
                <a href="display.php">
                    <div class="circle1"></div>
                    <span>Dress</span>
                </a>
            </div>
            <div class="col col-md-2 col-sm-12 slide-left" style="animation-delay: 0.2s;">
                <a href="display.php">
                    <div class="circle2"></div>
                    <span>Tshirts</span>
                </a>
            </div>
            <div class="col col-md-2 col-sm-12 slide-left" style="animation-delay: 0.3s;">
                <a href="display.php">
                    <div class="circle3"></div>
                    <span>Shorts</span>
                </a>
            </div>
            <div class="col col-md-2 col-sm-12 slide-left" style="animation-delay: 0.4s;">
                <a href="display.php">
                    <div class="circle4"></div>
                    <span>Outwear</span>
                </a>
            </div>
            <div class="col col-md-2 col-sm-12 slide-left" style="animation-delay: 0.5s;">
                <a href="display.php">
                    <div class="circle5"></div>
                    <span>Accessories</span>
                </a>
            </div>
            <div class="slide-left" style="font-size: 30px; animation-delay: 0.6s;">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </div>
        </div>

        <div class="row text-center mt-3">
            <div class="col col-md-12 col-sm-12">
                <p style="font-size: 25px; color: gray;">FREE SHOPPING TODAY!</p>
                <button style="border: none; background-color: gray; border-radius: 15px; width: 100px; height: 30px;">
                    <a href="">Gift Card</a></button>
            </div>

        </div>

        <div class="row bg-secondary-subtle mt-3 text-center p-3">
            <p class="text-center p-2">Best Seller</p>
            <div class="col col-md-3 col-sm-12">
                <a href="display.php"><img src="image/hoodie.jpg" width="170px">
                    <p> <b>Sweatshirt</b> <br>Black Cotton <br> $20  <i class="fa fa-cart-plus" aria-hidden="true"></i></p> 
                 
                     </a>
            </div>
            <div class="col col-md-3 col-sm-12">
                <a href="display.php"><img src="image/BfJeans.jpg" width="170px"> <br>
                    <span><b>Boyfriend Jeans</b></span> <br>
                    <span>Blue Jeans<br> $35</span></a>
            </div>
            <div class="col col-md-3 col-sm-12">
                <a href="display.php"><img src="image/shirt.jpg" width="155px"> <br>
                    <span><b>Shirt & Jeans</b></span> <br>
                    <span>Blue & Army Green<br> $40</span></a>
            </div>
            <div class="col col-md-3 col-sm-12">
                <a href="display.php"> <img src="image/mini skirt2.jpg" width="150px"> <br>
                    <span><b>Mini Skirt</b></span> <br>
                    <span>Light Pink <br> $28</span></a>
            </div>
        </div>

        <div class="row text-center mt-3">
            <div class="col col-md-12 col-sm-12">
                <span style="font-size: 25px;">GET 20% OFF ON YOUR FIRST ORDER</span> <br>
                <span style="font-size: 13px;">Suscribe to get special offers, free giveaways, and once-in-a lifetime
                    deals.</span> <br>

                <!-- <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input
                        type="email"
                        class="form-control"
                        name=""
                        id=""
                        aria-describedby="emailHelpId"
                        placeholder="Enter Email abc@mail.com"/>
                    <button style="border: none; background-color: gray; color: white;">SUBSCRIBE</button>
                </div> -->

                <label for="" class="form-label">Email</label>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Enter Your Email" aria-label="Search" />
                    <button class="btn btn-outline-secondary" type="submit">SUBSCRIBE</button>
                </form>


            </div>

        </div>

        <div class="row bg-secondary-subtle mt-3 p-2">
            <div class="col col-md-3 col-sm-12">
                <p><b>Corporate</b></p>
                <p> <a href="">Shipping and Returns</a> <br> <a href="About.php">About Us</a> <br> <a
                        href="Best.php">Best Seller</a> <br> <a href="Index.php">Home</a> <br> <a href="dashboard.php">Dashboard</a></p>
            </div>
            <div class="col col-md-3 col-sm-12">
                <p><b>Support</b></p>
                <p> <a href="ContactUs.php">Contact Us</a> <br> <a href="">FAQ</a> <br> <a href="view.php">View Privacy Policy</a>
                    <br> Submit & Return
                </p>
            </div>
            <div class="col col-md-3 col-sm-12"></div>
            <div class="col col-md-3 col-sm-12">
                <p class="mt-5"><b>Language | Currency</b></p>
            </div>
            <hr>
            <p class="text-center">2025 Designed By Mercy.</p>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.js"></script> 
</body> 

</html>