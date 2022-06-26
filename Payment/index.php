<?php
session_start();
if(isset($_SESSION['username']));
if ($_SERVER['REQUEST_METHOD']=='POST')
 {
    if (isset($_POST['add_to_cart'])) 
    {
        if (isset($_SESSION['cart1'])) {
            $myitems=array_column($_SESSION['cart1'], 'nameofproduct');
            if (in_array($_POST['nameofproduct'], $myitems)) {
                
                echo "<script>
                alert('Item is already added');
                window.location.href='index.php';

                </script>";
                // code...
            }
            else
            {
            $count=count($_SESSION['cart1']);
            $_SESSION['cart1'][$count]=array('nameofproduct' =>$_POST['nameofproduct'],'price' =>$_POST['price'],'quantity' =>1 );
             echo "<script>
                alert('Item is  added');
                window.location.href='index.php';

                </script>";
        
        }
    }
        else{
            $_SESSION['cart1'][0]=array('nameofproduct' =>$_POST['nameofproduct'],'price' =>$_POST['price'],'quantity' =>1 );
             echo "<script>
                alert('Item is added');
                window.location.href='index.php';

                </script>";
        
        }


        // code...
    }
            if (isset($_POST['remove_item']))
             {
                foreach ($_SESSION['cart1'] as $key => $value)
                 {
                    if($value['nameofproduct']==$_POST['nameofproduct']){
                    unset($_SESSION['cart1'][$key]);
                    $_SESSION['cart1']=array_values($_SESSION['cart1']);
                    echo "<script>
                    alert('Item removed');
                window.location.href='index.php';


                    </script>";
                }
            }
                // code...
            }



}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payment</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link rel = "icon" href = "images/logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <div class="back_icon" style="margin-top:-550px;">
    <a href="http://localhost/webathon/">
                <img src="leftarrow.png" width="7%">
              </a>    
    </div>
    <div class="header" style="margin-left:-400px">
    <div class="container">
      <header>Payment</header>
      <div class="progress-bar">
        <div class="step">
          <p>DELIVERY ADDRESS</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Order Summary</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>MODES OF PAYMENT</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>FINAL PAYMENT</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <div class="details">
          <div class="page slide-page login">
           <div class="container">
            <form>
            <div class="login_page">
               <?php if(isset($_SESSION['username'])){ ?>
              <input type="text" name="email" placeholder="Email" value="<?php echo $_SESSION['username']  ?>" readonly><br>
              <input type="text" name="password" placeholder="State" required><br>
              <input type="text" name="flat" placeholder="Flat Address" required><br>
              <input type="text" name="landmark" placeholder="Landmark" required><br>
              <input type="text" name="pincode" placeholder="Pincode" required><br>
              <button class="firstNext next btn"name="submit" type="submit" >Next</button> 
               <?php } else { ?>
               <?php } ?>
              </form>

            </div>
            </div>
          </div>

          <div class="page">
           <div class="content" style="margin-top: 50px;">
            <table class="table">
              <thead>
              <hr>
             <tr style="color:#000000;">
             <th scope="col">Item</th>
             <th scope="col">Price</th>
             <th scope="col">Quantity</th>
             <th scope="col">Total</th>
            </tr>
           </thead>
           <tbody>
            <?php
             $total=0;
           if(isset($_SESSION['cart1'])){
          foreach ($_SESSION['cart1'] as $key => $value) {
        echo "
        <tr style='margin-top:10px;'>
        <td style='font-size:18px'>$value[nameofproduct]</td>
        <td style='font-size:18px;margin:15px;'>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
        <td><input type='number'class='iquantity' onchange='subtotal()' value='$value[quantity]' min='1' max='10' readonly></td>
        <td class='itotal'></td>
        <td> 
        <input type='hidden' name='nameofproduct' value='$value[nameofproduct]'>
       
        </td>

         </tr>
        ";
    }
}
    ?>
  </tbody>
</table>   
           </div>
           <div style="margin-top: 30px;"> 
            <p style="margin-left:250px;line-height:40px;font-weight: 0;"><i class="fa fa-truck" aria-hidden="true" style="font-size:28px;margin:10px"></i>Expected Delivery on 15th May 2022</p>
            <p style="margin-left:180px;margin-top:0px;"><i class="fa fa-money" aria-hidden="true" style="font-size:28px;margin:10px"></i>
            Payable Amount -   ₹ <span id="gtotal"></span></p>
            </div>
            <button class="next-1 next btn"name="submit" type="submit" style="margin-top:30px">Next</button>
          </div>

          <div class="page" style="margin-top:50px">
            <form style="margin-left: -300px">
           <input type="radio" id="cod1" name="cod" value="30" required>
            <label for="cod1">Cash On Delivery</label><br>
            </form>
            <p style="margin-left:-70px">Currently, We're providing on Cash on Delivery</p>
            <button class="next-2 next btn"name="submit" type="submit" style="margin-top:30px">Next</button>
          </div>

          <div class="page">
            <div class="container">
            <div class="title" style="margin-top:30px">
              <p>You are ready to place the Order.</p>          
            </div>
              <button class="submit btn" style="margin-top:30px;margin-left: -100px;">Place the Order</button>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <script src="script.js"></script>
<script type="text/javascript">
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal')

    function subtotal()
    {
        gt=0;
        for (i =0;i<iprice.length;i++)
         {

        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
           gt=gt+(iprice[i].value)*(iquantity[i].value);

            
        }
        gtotal.innerText=gt;
    }


    subtotal();
</script>
  </body>
</html>
