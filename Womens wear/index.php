<?php
session_start();
if(isset($_SESSION['username']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel = "icon" href = "images/logo.png" type = "image/x-icon">
   <title>FashiKnow</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
  <link rel="stylesheet" href="lightbox.css">
  <link rel="stylesheet" type="text/css" href="deals.css">
 <!--  Jquery CDN -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="script.js"></script>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- custom js file link  -->
   <script src="js/script.js" defer></script>
</head>
<body>
  
<nav>
   
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">FashiKnow</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">FashiKnow</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="http://localhost/webathon/home.php" class="home">Home</a></li>
          <li>
            <a href="#">Shop</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>

            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="http://localhost/webathon/Mens%20Wear/">Mens Wear</a></li>
              <li><a href="http://localhost/webathon/Womens%20Wear/">Womens Wear</a></li>
              <li><a href="http://localhost/webathon/Kids%20Wear/">Kids Wear</a></li>
              
            </ul>

          </li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact us</a></li>
          <li class="profile">
            <?php if(isset($_SESSION['username'])){ ?>
            <a href="#"> <a href="#" style="font-size:1.5rem">Welcome,<span style="margin:5px;"><?php echo $_SESSION['username']?> </span></a></a>
            
              <?php } else { ?>
                <?php } ?>

          </li>

          
        </ul>
      </div>
       <div class="social_media">
         <?php if(isset($_SESSION['username'])){ ?>
      <?php } else { ?>
       <a href="#" data-toggle="modal" data-target="#myModal">Login</a>
       <a href="#"data-toggle="modal" data-target="#myModal1">Sign Up</a>       
      <?php } ?>
        <a href="" ><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="" ><i class="fa fa-facebook" aria-hidden="true"></i></a>
       </div>
       <?php
    $count=0;
    if (isset($_SESSION['cart1']))
     {
      $count=count($_SESSION['cart1']);
      // code...
    }
    ?>
      <div class="search-cart">
        
       <a href="cart.php" style="color: #ffffff;"><i class='bx bx-cart'></i></a> 
        <?php if(isset($_SESSION['username'])){ ?>
                <p><?php echo $count; ?></p>
      <?php } else { ?>
       <?php } ?>   
      </div>   
       <?php if(isset($_SESSION['username'])){ ?>
      <div class="logout" style="border: 1px solid #ffffff;width: 100px;text-align: center;">
         <a href="http://localhost/webathon/logout.php" style="font-size:1.5rem;color: #ffffff;text-decoration: none;">Logout</a>
      </div>  
    <?php } else { ?>
    <?php } ?>      
</div>
</nav>
<section>
   <!-- Login Page -->
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal-box">
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <p class="title">Welcome to FashiKnow</p>
                                <form action="http://localhost/webathon/validation.php" method="POST">
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input type="email" class="form-control" placeholder="Email" required name="email">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fas fa-key"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" required name="password">
                                </div>
                                 <button class="btn" type="submit" name="submit">Login</button>
                             </form>
                                <div class="list">
                                 <ul>
                                <li><a href="">Forgot Password?</a></li>
                                <li><a href="">Create Account</a></li>
                            </ul>
                            </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SignUp Page -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal-box">
                <!-- Modal -->
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <p class="title">Welcome to FashiKnow</p>
                                <form action="http://localhost/webathon/registration.php" method="POST">
                                <div class="form-group">
                                 <span class="input-icon"><i class="fa fa-user"></i></span>

                                    <input type="text" class="form-control" placeholder="Name" required name="username">
                                </div>
                                
                                <div class="form-group">
                                  <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" placeholder="Email" required name="email">
                                </div>
                                <div class="form-group">
                                  <span class="input-icon"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" placeholder="Mobile Number" required name="mobile">
                                </div>
                                <div class="form-group">
                                     <span class="input-icon"><i class="fas fa-key"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" required name="password">
                                </div>
                                 <div class="form-group">
                                     <span class="input-icon"><i class="fas fa-key"></i></span>
                                    <input type="password" class="form-control" placeholder="Confirm Password" required name="cpassword">
                                </div>
                               
                                 <button class="btn" type="submit" name="submit">Create</button>
                             </form>
                                <div class="list">
                                 <ul>
                                
                                <li ><p>Have already an account?</p><a href=""><span>Login</span></a></li>
                            </ul>
                            </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section>
 
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-55px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/c-1.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/c-2.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/c-3.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</section>
<section>
    
  <!-- Header -->
<div class="header-new">

</div>
<img src="images/b-13.png" style="width:100%">
<!-- Photo Grid -->
<div class="row-new"> 
 <!--  <div class="column-new">
    <img src="b-13.png" style="width:100%">
   
  
  </div> -->
  <div class="column-new">
  <img src="images/b-14.png" style="width:150%;margin-left:-50px">
   
    
  </div>  
  <div class="column-new">
  <img src="images/b-15.png" style="width:150% ; margin-left: 80px;">
   
    
  </div>  
  <div class="column-new">
  <img src="images/b-16.png" style="width:150%;margin-left: 185px;">
   
    
  </div>  
  
</div>  
</section>
<div class="component2" style="margin-top:150px;">
<div class="container">
   <div class="products-container">
      <div class="product" data-name="p-1">
         <img src="images/1.png" alt="">
         <h3>Block Print Skirt-Suit Set</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹2,999
         </p>
         <div class="price">₹1,279</div>
      </div>

      <div class="product" data-name="p-2">
         <img src="images/2.png" alt="">
         <h3>Floral Print Flared Kurta with Dupatta</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹2,999
         </p>
         <div class="price">1,200</div>
      </div>

      <div class="product" data-name="p-3">
         <img src="images/3.png" alt="">
         <h3>Solid Straight Kurti</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹1,999
         </p>
         <div class="price">₹999</div>
      </div>

      <div class="product" data-name="p-4">
         <img src="images/4.png" alt="">
         <h3>Military Narrative Printed Crew-Neck T-shirt</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹2,999
         </p>
         <div class="price">₹1099</div>
      </div>

      <div class="product" data-name="p-5">
         <img src="images/5.png" alt="">
         <h3>Toki Doki Print Crew-Neck T-shirt</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹1,200
         </p>
         <div class="price">₹799</div>
      </div>

      <div class="product" data-name="p-6">
         <img src="images/6.png" alt="">
         <h3>Open-Front Shrug with Insert Pockets</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹1,999
         </p>
         <div class="price">₹1,299</div>
      </div>

      <div class="product" data-name="p-7">
         <img src="images/7.png" alt="">
         <h3>Shirt with Roll-Up Sleeves</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹2,999
         </p>
         <div class="price">₹1,250</div>
      </div>

      <div class="product" data-name="p-8">
         <img src="images/8.png" alt="">
         <h3>Bandhani Print Cotton Saree</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹2,999
         </p>
         <div class="price">₹1,999</div>
      </div>

      <div class="product" data-name="p-9">
         <img src="images/9.png" alt="">
         <h3>Floral Print A-line Top with Pintucks</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹2,999
         </p>
         <div class="price">₹1,299</div>
      </div>

      <div class="product" data-name="p-10">
         <img src="images/10.png" alt="">
         <h3>Mid-Rise Green Skinny Jeans For Men</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹1,299
         </p>
         <div class="price">₹999</div>
      </div>

      <div class="product" data-name="p-11">
         <img src="images/11.png" alt="">
         <h3>Leaf Print Mandarin Collar A-Line Tunic</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹2,999
         </p>
         <div class="price">₹1,200</div>
      </div>

      <div class="product" data-name="p-12">
         <img src="images/12.png" alt="">
         <h3>Georgette Party Wear Layered Short Tunic</h3>
         <p style="text-decoration: line-through; color: darkred;">
         ₹2,999
         </p>
         <div class="price">₹1,999</div>
      </div>




   </div>

</div>

<div class="products-preview">
   
   <div class="preview" data-target="p-1">
    <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/1.png" alt="">
      <h3>Block Print Skirt-Suit Set</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>

         <input type="text" name="nameofproduct" value="Lightly Washed Zip-Front Jacket" style="display: none;">
         <input type="number" name="price" value="1999" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹1,279</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>   
      </div>
      
      <script type="text/javascript">
         function addItems(){
            alert('Please Login to add items in to the Cart');
            window.location.replace("index.php");

         }
      </script>
      </form>
       <div class="buttons">
        <a href="Womens Product/Product_W_11.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>

   </div>

   
   <div class="preview" data-target="p-2">
     <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/2.png" alt="">
      <h3>Floral Print Flared Kurta with Dupatta</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
          <input type="text" name="nameofproduct" value="Floral Print Flared Kurta with Dapatta" style="display: none;">
         <input type="number" name="price" value="1200" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹1,200</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>   
     </div>
     </form>
      <div class="buttons">
        <a href="Womens Product/Product_W_1.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>
  </div>
  
   <div class="preview" data-target="p-3">

   <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/3.png" alt="">
      <h3>Solid Straight Kurti</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <input type="text" name="nameofproduct" value="Fullsleeves Slim Fit Shirt" style="display: none;">
         <input type="number" name="price" value="1999" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹1,900</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>
     </div>
      </form>
          <div class="buttons">
        <a href="Womens Product/Product_W_9.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>
    </div>
    
     
   <div class="preview" data-target="p-4">
    <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/4.png" alt="">
      <h3>Military Narrative Printed Crew-Neck T-shirt</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <input type="text" name="nameofproduct" value="Fastdry Active Crew-Neck T-Shirt" style="display: none;">
         <input type="number" name="price" value="1099" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹1099</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>
   </div>
     </form>
      <div class="buttons">
        <a href="Womens Product/Product_W_4.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>
</div>


   <div class="preview" data-target="p-5">
    <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/5.png" alt="">
      <h3>Toki Doki Print Crew-Neck T-shirt</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
       <input type="text" name="nameofproduct" value="Crew Neck T-Shirt" style="display: none;">
         <input type="number" name="price" value="799" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹799</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>
   </div>
   </form>
    <div class="buttons">
        <a href="Womens Product/Product_W_5.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>
</div>


   <div class="preview" data-target="p-6">
    <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/6.png" alt="">
      <h3>Open-Front Shrug with Insert Pockets</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <input type="text" name="nameofproduct" value="Full Sleeves Slim Fit Shirt" style="display: none;">
         <input type="number" name="price" value="1299" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹1,299</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>
   </div>
   </form>
    <div class="buttons">
        <a href="Womens Product/Product_W_6.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>
</div>
   
   <div class="preview" data-target="p-7">

   <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/7.png" alt="">
      <h3>Shirt with Roll-Up Sleeves</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <input type="text" name="nameofproduct" value="Full Sleeve T-Shirt" style="display: none;">
         <input type="number" name="price" value="1250" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹1,250</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>
   </div>
   </form>
     <div class="buttons">
        <a href="Womens Product/Product_W_2.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>
</div>

   <div class="preview" data-target="p-8">

 <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/8.png" alt="">
      <h3>Bandhani Print Cotton Saree</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <input type="text" name="nameofproduct" value="Straight Kurta with Band Collar" style="display: none;">
         <input type="number" name="price" value="1999" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹1,999</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>
   </div>
   </form>
   <div class="buttons">
        <a href="Kids Product/Product_K_9.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>
</div>


   <div class="preview" data-target="p-9">
    <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/9.png" alt="">
      <h3>Floral Print A-line Top with Pintucks</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <input type="text" name="nameofproduct" value="Jeans Jacket For Men" style="display: none;">
         <input type="number" name="price" value="1299" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹1,299</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>
   </div>
      </form>
       <div class="buttons">
        <a href="Womens Product/Product_W_7.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>

</div>
  
   <div class="preview" data-target="p-10">
     <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/10.png" alt="">
      <h3>Mid-Rise Green Skinny Jeans For Men</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <input type="text" name="nameofproduct" value="JMid-Rise Green Skinny Jeans For Men" style="display: none;">
         <input type="number" name="price" value="999" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹999</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>
   </div>
    </form>
     <div class="buttons">
        <a href="Kids Product/Product_K_9.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>
</div>

   <div class="preview" data-target="p-11">
     <form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/11.png" alt="">
      <h3>Leaf Print Mandarin Collar A-Line Tunic</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <input type="text" name="nameofproduct" value="Floral Print Black T-Shirt" style="display: none;">
         <input type="number" name="price" value="1200" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹999</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>
   </div>
  </form>
<div class="buttons">
        <a href="Womens Product/Product_W_8.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>
</div>
   <div class="preview" data-target="p-12">  
<form action="cart.php" method="POST">
      <i class="fas fa-times"></i>
      <img src="images/12.png" alt="">
      <h3>Georgette Party Wear Layered Short Tunic</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      <input type="text" name="nameofproduct" value="Full Sleeves Slim Fit Shirt" style="display: none;">
         <input type="number" name="price" value="1999" id="cart" style="display: none;">
         <input type="number" name="quantity" value="1" id="cart" style="display: none">
      <div class="price">₹1,999</div>
      <div class="buttons">
      <?php if(isset($_SESSION['username'])){ ?>
      <button name="add_to_cart" type="submit" class="cart" >Add to cart</button>
      <?php } else { ?>
      <button class="cart" onclick="addItems()" ><a href="index.php">Add to Cart</a></button>
      <?php } ?>
   </div>
    </form>
    <div class="buttons">
        <a href="Womens Product/Product_W_3.php"><span><p style="color:#ffffff">Quick View</p></span></a>
          
      </div>
</div>
  



</div>
</div>
<footer class="footer" style="margin-top:30px">
            <div class="right">
                <a href="#"><img src="images/facebook.png" width="90%"></a>
                <a href="#"><img src="images/instagram.png" width="90%"></a>
                <a href="#"><img src="images/twitter.png" width="90%"></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
            <div class="left">
               <p class="links">
                    <a class="link-1" href="#" style="text-decoration:none">Home</a>
                    <a href="#" style="text-decoration:none">About us</a>
                    <a href="#" style="text-decoration:none">Contact us</a>
                </p>
                <p>FashiKnow &copy; 2022</p>
            </div>
        </footer>
<!--    script files -->
<script src="lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
$(window).on('load',function(){
    $(".loader").delay(3000).fadeOut("slow");
    $(".mainPage").delay(3000).fadeIn("slow");
})
</script>
</body>
</html>