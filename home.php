<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel = "icon" href = "images/logo.png" type = "image/x-icon">

	<!-- Icons link -->
	<title>FashiKnow</title>
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  
  <link rel="stylesheet" href="lightbox.css">
 <!--  Jquery CDN -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

   <!-- 	Css file -->
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="deals.css">
</head>
<body>
    <div class="loader"></div>
	<div class="header">
		<div class="tag_line">
			<h2>Meet our new<br>limited Collections</h2>
                  <button style="margin-left:650px">Explore Now</button>

		</div>
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
          <li><a href="#" class="home">Home</a></li>
          <li>
            <a href="#">Shop</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>

            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="Mens Wear/">Mens Wear</a></li>
              <li><a href="Womens Wear/">Womens Wear</a></li>
              <li><a href="kids wear/">Kids Wear</a></li>
              
            </ul>

          </li>
          <li><a href="about/">About us</a></li>
          <li><a href="Contact Us/">Contact us</a></li>
          <li class="profile">
            <a href="#"> <a href="#" style="font-size:1.5rem">Welcome,<span style="margin:5px;"><?php echo $_SESSION['username']?> </span></a></a>
          </li>

          
        </ul>
      </div>
       <div class="social_media">
        
       
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
         
         

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
        <p><?php echo $count; ?></p>
      </div>
      
      <div class="logout" style="border: 1px solid #ffffff;width: 100px;text-align: center;">
         <a href="logout.php" style="font-size:1.5rem;color: #ffffff;text-decoration: none;">Logout</a>
          
      </div>    
      
     
    </div>
  </nav>
</div>
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
                                <form action="validation.php" method="POST">
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
                                <form action="registration.php" method="POST">
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
<div class="component2">
<div class="container">
	<div class="row">
		<div class="col-sm-6 sacrifice" data-aos="fade-right" data-aos-duration="3000">
			<p>Never Sacrifice <br>your style for <br>anyone.</p>			
		</div>
		<div class="col-sm-6 home_image1" data-aos="fade-left" data-aos-duration="3000" >
			<img src="https://images.pexels.com/photos/1485781/pexels-photo-1485781.jpeg" width="85%" height="80%">
		</div>		
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-6 home_image2" data-aos="fade-right" data-aos-duration="3000">
			<img src="https://images.pexels.com/photos/1964970/pexels-photo-1964970.jpeg" width="65%" height="45%">
		</div>
		<div class="col-sm-6 home_txt" data-aos="fade-left" data-aos-duration="3000">
			<p>The simultaneous introduction and display of many new styles, the selections made by the innovative consumer, and the notion of the expression of the spirit of the times provide impetus for fashion. Central to any definition of fashion is the relationship between the designed product and how it is distributed and consumed.Though fashion was first created for the privileged few, in the late nineteenth and twentieth century mass production made fashion accessible to the majority. In the nineteenth century the distinguishing feature of fashion was its imposition of an overall standard that nevertheless left room for the display of personal taste.</p>			
		</div>
				
	</div>
</div>
<section data-aos="fade-up" data-aos-duration="3000">
 

  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:20px;margin-bottom: -15px;">
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
<!-- Image Carousel -->
<div class="image_carousel" id="fashion" style="margin-top: -50px" data-aos="fade-up" data-aos-duration="3000">
        <div class="gallery">
            <a href="images/img1.jpg" data-lightbox="Latest Styles" data-title="Latest Dress">
                <img src="images/img1.jpg">    
            </a>
            <a href="images/img2.jpg" data-lightbox="Latest Styles" data-title="Latest Dress">
                <img src="images/img2.jpg">    
            </a>
            <a href="images/img3.jpeg" data-lightbox="Latest Styles" data-title="Latest Dress">
                <img src="images/img3.jpeg">    
            </a>
            <a href="images/img4.jpeg" data-lightbox="Latest Styles" data-title="Latest Dress">
                <img src="images/img4.jpeg">    
            </a>
            <a href="images/img5.jpeg" data-lightbox="Latest Styles" data-title="Latest Dress">
                <img src="images/img5.jpeg">    
            </a>
            <a href="images/img6.jpeg" data-lightbox="Latest Styles" data-title="Latest Dress">
                <img src="images/img6.jpeg">    
            </a>
            <a href="images/img7.jpeg" data-lightbox="Latest Styles" data-title="Latest Dress">
                <img src="images/img7.jpeg">    
            </a>
            <a href="images/img8.jpeg" data-lightbox="Latest Styles" data-title="Latest Dress">
                <img src="images/img8.jpeg">    
            </a>
           
    </div>
</div>
 
<div class="component3" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
        <div class="component3_content">
            <p>What's the Real<br> Never Washes Away</p>
            <button><a href="#">Shop Now</a></button>
            
        </div>
        
    </div>
    
</div>
<section style="margin-top:20px" data-aos="fade-up-right" data-aos-duration="3000">
    <img src="images/b-20.png" >
    
    <div class="header-new">

</div>

<!-- Photo Grid -->
<div class="row-new"> 
  <div class="column-new">
    <img src="images/b-1.png" style="width:100%">
    <img src="images/b-2.png" style="width:100%">
    <img src="images/b-3.png" style="width:100%">
  
  </div>
  <div class="column-new">
  <img src="images/b-4.png" style="width:100%">
    <img src="images/b-5.png" style="width:100%">
    <img src="images/b-6.png" style="width:100%">
    
  </div>  
  <div class="column-new">
    <img src="images/b-7.png" style="width:100%">
    <img src="images/b-8.png" style="width:100%">
    <img src="images/b-9.png" style="width:100%">
   
  </div>
  <div class="column-new">
  <img src="images/b-10.png" style="width:100%">
    <img src="images/b-11.png" style="width:100%">
    <img src="images/b-12.png" style="width:100%">
    
  </div>
</div>
</section>


<!-- NewsLetter -->
<div class="newsletter" data-aos="fade-up-right" data-aos-duration="3000">
<div class="container">
    <div class="row">
        
        <div class="col-sm-6 newsletter_img">
        <img src="images/newsletter.jpg" alt="" width="80%">

            
        </div>
        <div class="col-sm-6 subscribe">
                
                    <h1>Stay in The Loop </h1>
                        <p>We always believe in quality rather than quantity of the products.Connect with us to explore the more things about Fashion.</p>
                    <div class="alert">
                        <div class="message">
                            <p>Thanks for Subscribing.</p>
                        </div> 
                    </div>
                    <form>
                    <div class="email">
                    <i class="fa fa-envelope"></i>
                    <input class="tbox" type="email" name="" placeholder="Enter your Email" required>
                    <button class="btn" type="submit" name="button" onclick="alertWindow()">Subscribe </button>
                    </div>
                    </form>
            
            
        </div>
        
    </div>
    
     
 </div>
</div>
<footer class="footer">
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
</div>
 <!--    script files -->
<script src="lightbox-plus-jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script>
   $(window).on('scroll',function(){
      if($(window).scrollTop()){
      	$('nav').addClass('mainNav_sticky');
      }
      else{
      	$('nav').removeClass('mainNav_sticky');
      }

   });
   $(window).on('scroll',function(){
   if($(window).scrollTop()){
   $('htmlCss-sub-menu').addClass('mainNav_sticky');
   }
else{
	 $('htmlCss-sub-menu').removeClass('mainNav_sticky');

}

   	});

   $(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});
   
   $(window).on('load',function(){
    $(".loader").delay(1500).fadeOut("slow");
    $(".mainPage").delay(1500).fadeIn("slow");
})
   function alertWindow(){
        document.querySelector('.alert').style.display = 'block';
        setTimeout(function(){
        document.querySelector('.alert').style.display = 'none';
      },3000);

    }
</script>
</script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>