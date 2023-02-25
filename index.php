<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="icons/css/all.css">
    <link rel="stylesheet" href="Index.css">
    <title>Adegold</title>
</head>
<body>



  <nav class="navbar fixed-top navbar-expand-lg nav1">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="brand1.png" class="rounded" width="80px">ADEGOLD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
       aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search Products, Brands and Categories" aria-label="Search">
        <button class="search-btn" type="submit">Search</button>
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
             aria-expanded="false">
             <i class="fa-solid fa-user ac"></i>Account
            </a>
            <ul class="dropdown-menu h">
              <li><hr class="dropdown-divider"></li>
              <a href="Sign.html"><button class="btn btn-primary ch">Sign In</button></a>
              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user ic"></i>My Account</a></li>
              <li><a class="dropdown-item" href="Order.html"><i class="fa-solid fa-basket-shopping ic"></i>Order</a></li>
              <li><a class="dropdown-item" href="Save.html"><i class="fa-solid fa-heart ic"></i>Saved Items</a></li>
            </ul>
          </li>
        </ul>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-circle-question ac"></i>Help
            </a>
            <ul class="dropdown-menu h help-cart">
              <li><a class="dropdown-item" href="Help.html">Help Center</a></li>
              <li><a class="dropdown-item" href="Place.html">Place & track order</a></li>
              <li><a class="dropdown-item" href="cancel.html">Order cancellation</a></li>
              <li><a class="dropdown-item" href="Return.html">Returns & Refunds</a></li>
              <li><a class="dropdown-item" href="Payment.html">Payment & Adegold account</a></li>
              <li><hr class="dropdown-divider"></li>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary ch" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-solid fa-message"></i>Live Chat
            </button>
            </ul>
          </li>
        </ul>

        <ul class="cart">
          <li class="nav-item list-unstyled ca">
            <a class="nav-link active" aria-current="page" href="Cart.html">
                <i class="fa-solid fa-cart-plus ac"></i>Cart <span class="cartnumber"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>








  
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Live Help</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <label for="Name">First Name</label><br>
      <input type="text" placeholder="First Name"><br>
      <label for="Name">Last Name</label><br>
      <input type="text" placeholder="Last Name"><br>
      <label for="Name">Email</label><br>
      <input type="text" placeholder="Email address"><br>
      <label for="Name">Phone</label><br>
      <input type="number" placeholder="Phone Number"><br>
      <label for="Number">Other Number</label><br>
      <input type="number" placeholder="Other Number"><br>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary start">Start</button>
    </div>
  </div>
</div>
</div>
      <div class="container contyear">
          <h1 class="ten text-center">Adegold Latest Products</h1>
          <div class="row">
            <?php 
              $extract = "SELECT *FROM `latest`";
              $extracting = mysqli_query($conn, $extract);

              if(mysqli_num_rows($extracting)>0){
                while($extract_row = mysqli_fetch_assoc($extracting)){
              
            ?>
              <div class="col col-lg-2 col-md-3 col-sm-6 xs-6">
                <div class="card" style="width: 10rem; height: 230px;">
                    <img src="./latest-image/<?php echo $extract_row['pimage'] ?>" class="card-img-top" height="172px" alt="...">
                    <div class="card-body">
                      <p class="card-text text-center"><?php echo $extract_row['pname'] ?></p>
                    </div>
                  </div>
              </div>
              <?php
                }
              }
              ?>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-12 col-sm-12 xs-12">
                <div class="cate">
                    <h1 class="cate1">CATEGORY</h1>
                    <p>Products</p>
                    <hr>
                    <h1 class="cate1">BRAND</h1><br>
                    <input type="text" placeholder="Search" class="inp">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div class="overflow-auto auto-checkbox">
                        <input type="checkbox"><label for="Detol" class="Detol">Detol</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Vintage</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Shirt</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Wig</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Stands</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Office Stand</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Bodycon</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Skirt</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Roundneck</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Turtle neck</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Palm sandals</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Shoe</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Sneakers</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Handbags</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Phone Holders</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Phone Magnifer</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Glow stickers</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Wall hook</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Bralet</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Gown</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Jeans</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Packing shirt</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Towel</label>
                        <input type="checkbox"><label for="Detol" class="Detol">Singlet</label>
                    </div>
                </div>
                <hr>
                <h1 class="pr">PRICE (₦)</h1>
                <h1 class="or">ORDER</h1>
                <hr>
                <h1 class="ra">RATING</h1>
                <h1 class="re">RESET</h1>
                <h1 class="ab"><input type="checkbox">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    & Above
                </h1>
                <h1 class="ab"><input type="checkbox">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    & Above
                </h1>
                <h1 class="ab"><input type="checkbox">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    & Above
                </h1>
                <h1 class="ab"><input type="checkbox">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    & Above
                </h1>
                <h1 class="ab"><input type="checkbox">
                    <i class="fa-solid fa-star"></i>
                    & Above
                </h1>
                <hr>
                <h1 class="ge">GENDER</h1>
                <h1 class="un"><input type="checkbox"> Unisex</h1>
                <hr>
                <h1 class="se">SELLER`S SCORE</h1>
                <h1 class="or1"><input type="checkbox">80% or More</h1>
                <h1 class="or1"><input type="checkbox">60% or More</h1>
                <h1 class="or1"><input type="checkbox">40% or More</h1>
                <h1 class="or1"><input type="checkbox">20% or More</h1>
                <hr>
                <h1 class="ex">EXPRESS DELIVERY</h1>
                <h1 class="eg"><input type="checkbox">Adegold Express</h1>
                <hr>
                <h1 class="sh">SHIPPED FROM</h1>
                <h1 class="hi"><input type="checkbox">Shipped from Nigeria</h1>
              </div>
              
              <div class="col col-lg-9 col-md-12 col-sm-12 xs-12">
                <div class="container">
                    <div class="row">
                    <?php 
              $extract = "SELECT *FROM `whole`";
              $extracting = mysqli_query($conn, $extract);
              if(mysqli_num_rows($extracting)>0){
                while($extract_row = mysqli_fetch_array($extracting)){
                  
              ?>
                        <div class="col col-lg-4 col-md-4 col-sm-6 xs-4 gene">
                            <div class="card">
                                <img src="latest-image/<?php echo $extract_row['pimage']; ?>" class="card-img-top" height="172px" alt="...">
                                <div class="card-body">
                                  <p class="card-text p1">Official Store</p><br>
                                  <h2 class="diff text-center"><?php echo $extract_row['pname']; ?><br> Sizes</h2><br>
                                  <p class="p3">₦<?php echo $extract_row['pprice']; ?></p><br>
                                  <h1 class="fa">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                  </h1>
                                  <h2 class="coll">ADEGOLD COLLECTIONS</h2>
                                  <h3 class="old">Adegold Collection in your order will be
                                       delivered for free(Lagos, Oyo & kwara State)
                                        Excluding large items</h3>
                                        <button type="button" id="cart-sub" class="btn button-hidden addCart">ADD TO CART</button>  
                                        <form id="myForm">
                                          <input type="hidden" id="pid" value="<?= $extract_row['id'] ?>">
                                          <input type="hidden" id="pname" value="<?= $extract_row['pname'] ?>">
                                          <input type="hidden" id="dprice" value="<?= $extract_row['dprice'] ?>">
                                          <input type="hidden" id="pprice" value="<?= $extract_row['pprice'] ?>">
                                          <input type="hidden" id="pimage" value="<?= $extract_row['pimage'] ?>">
                                          <input type="hidden" id="tprice" value="<?= $extract_row['tprice'] ?>">
                                        </form>
                                </div>
                              </div>
                        </div>
                        <?php
                            }
                          }
                          ?>
                    </div>
                </div>
              </div>
                        
          </div>
      </div>
      <section class="fl">
      <div class="container">
          <div class="flex">
              <div class="flex1">
                  <h1 class="gol">ADEGOLD<img src="brand1.png" width="70px"></h1>
                <h1>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram-square"></i>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-solid fa-envelope"></i>
                </h1>
              </div>
              <div class="flex2">
                  <h1 class="inq">INQUIRY ABOUT ADEGOLD?</h1>
                  <p class="inqp">Subscribe to Our newsletterto get updated</p>
                  <input type="text" placeholder="Enter E-mail Address">
                  <button class="ma1">SUBMIT</button>
              </div>
              <div class="flex3">
                  <h1 class="app"><img src="brand1.png" width="70px">
                    DOWNLOAD ADEGOLD APP<br>
                </h1>
                <p class="down2"><i class="fa-brands fa-apple"></i>AppStore</p>
                <p class="down3"><i class="fa-brands fa-google-play"></i>Google Play</p>
                <p class="papp">Get access to exclusive offers!</p>
              </div>
          </div>
      </div>
      </section>


      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" 
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"></script>


        <script>
          let addButtons = document.querySelectorAll(".addCart");
          addButtons.forEach(function(button) {
            button.addEventListener('click', start);
          });

          function start(){

          var xhr = new XMLHttpRequest();

          var form = document.getElementById('myForm');

          var formData = new FormData(form);

          // var pid = document.getElementById('pid').value;
          // var pname = document.getElementById('pname').value;
          // var dprice = document.getElementById('dprice').value;
          // var pprice = document.getElementById('pprice').value;
          // var pimage = document.getElementById('pimage').value;
          // var tprice = document.getElementById('tprice').value;

          xhr.open('POST', 'Admin_pro.php', true);
          xhr.send(formData);

          // xhr.send(pid,pname,dprice,pprice,pimage,tprice);

          // xhr.onreadystatechange = function(){
          //   if(this.readyState == 4 && this.status == 200){
          //     alert("Done")
          //   }else{
          //     alert("Not done")
          //   }
          // }



          // var pid ="pid"+pid;
          // var pname ="pname"+pname;
          // var dprice ="dprice"+dprice;
          // var pprice ="pprice"+pprice;
          // var pimage ="pimage"+pimage;
          // var tprice ="tprice"+tprice;

          

          
          // pick.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          // pick.onreadystatechange = function (){
          //   if(this.readyState ==4 && this.status == 200){
          //     console.log("Proceeding")
          //   }
          // }
          // pick.send(pid,pname,dprice,pprice,pimge,tprice);
          }
      </script>
</body>
</html>