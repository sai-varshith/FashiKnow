<!DOCTYPE html>

<head>

    <title>Fashiknow</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

</head>

<body>
   
    <div class="product_page">

        <div class="row">

            <div class="col">
           
                 
          
                <div class="slider">

                    <div class="product">

                        <img src="images/k-8-1.png" alt="" onclick="clickme(this)">
                        <img src="images/k-8-2.png" alt="" onclick="clickme(this)">
                        <img src="images/k-8-3.png" alt="" onclick="clickme(this)">
                        <img src="images/k-8-4.png" alt="" onclick="clickme(this)">

                    </div>
                    <div class="preview">
                        <img src="images/k-8-1.png" id="imagebox" alt="">
                    </div>
                </div>

            </div>
            <div class="col">

               <div class="content">
                    
                    <h2 >INDIAN TERRAIN BOYS</h2>
                   <div class="caption">
                     <p>Denim jean shorts</p>
                   </div>
                   <div class="cost">
                       <h3>₹999</h3> 
                        <p>MRP <strike>₹2999</strike> (65% OFF) </p>
                        <p></p>
                   </div>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p class="price">Brand: MAX</p>
                    <p>Size: <select name="size" class="size">

                            <option value="select size">select size</option>
                            <option value="small">small</option>
                            <option value="medium">medium</option>
                            <option value="large">large</option>

                        </select></p>
                        <div class="quantity">
                    <p>Quantity: <input type="number" value="1" min="1" max="5"></p>
                </div>
<!-- 
                 <div class="price">Description: </div> -->
            
           <div class="price">Product Details</div>
           <div class="Pro_details" style="margin-top:10px; margin-bottom: 10px;">
               <ul>
                  
                   <li>Machine Wash cold</li>
                   <li>100% cotton</li>
                   <li>RelaxedFit</li>
                   <li>Product Code: 36484872374</li>
               </ul>
           </div>
                    <button type="button">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart</button>
                         <button type="button" style="margin-left: 10px;">Buy Now</button>
                </div>

            </div>
        </div>


 
        <div class="related">
            <h2 style="font-family: lucidahandwriting; margin-left:550px; color: darkslateblue;">Similar Styles</h2>
            <div class="row">
                <div class="columns">
                    <div class="items">
                          <a href="Product_M_1"><img src="images/k-1.jpg" alt=""> </a>
                        <div class="details">
                            <p>Polo T-shirt with Logo Print</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>

                            <p>INR ₹1000.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                         <a href="Product_M_2"><img src="images/k-3-1.png" alt=""> </a>
                        <div class="details">
                            <p>Polo T-shirt with Logo Print</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>INR ₹610.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                          <a href="Product_M_3"><img src="images/k-5-2.png" alt=""> </a>
                        <div class="details">
                            <p>Polo T-shirt with Logo Print</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>INR ₹1200.00</p>

                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="items">
                           <a href="Product_M_4"><img src="images/k-4-1.png" alt=""> </a>
                        <div class="details">
                            <p>Polo T-shirt with Logo Print</p>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <p>INR ₹700.00</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script>
        function clickme(smallImg) {

            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src;

        }

    </script>



</body>

</html>
