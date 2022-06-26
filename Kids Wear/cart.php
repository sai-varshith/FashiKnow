<?php
session_start();
// session_destroy();
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
<!-- //indexpage -->
<!-- put this cod ein the cart page -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Your Cart</title>

</head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;

}
html{
  scroll-behavior:smooth;
}
body{
    
    background-image: url("https://images5.alphacoders.com/547/547188.jpg");

}
table {
  width: 200%;
}
td, th {
  text-align: left;
  padding: 20px;
}
.container{
    margin-top: 50px;
}
.table{
    margin-top: 25px;
}
</style>
<body>
 

</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 " >
                <h2 style="color:white;margin-left: 0px;margin-top: 0px;">Your Cart <i class="fa fa-shopping-cart" aria-hidden="true" ></i></h2>                
            </div>
            <div class="col-lg-8">
                <table class="table">
  <thead>
    <tr style="color:#ffffff">
      <th scope="col">Item</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
     <?php
    $total=0;
    if(isset($_SESSION['cart1'])){
    foreach ($_SESSION['cart1'] as $key => $value) {
        // print_r($value);

        // code...
        echo "
        <tr>
        <td style='color:white;font-size:15px;'>$value[nameofproduct]</td>
        <td style='color:white;font-size:15px;'>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
        <td style='color:white;font-size:15px;outline:0px;'><input type='number'class='iquantity' onchange='subtotal()' value='$value[quantity]' min='1' max='10'></td>
        <td class='itotal' style='color:white;font-size:17px;'></td>
        <td>
        <form action='cart.php' method='POST'>
        <button class='btn btn-outline-primary btn-sm' name='remove_item'style='color:white;font-size:15px;'>remove</button>
        <input type='hidden' name='nameofproduct' value='$value[nameofproduct]'>
        </form>
        </td>

         </tr>
        ";
    }
}
    ?>
   
  </tbody>
</table>

                
            </div>
                       
            
        </div>
        
    </div>
   
          <div style="margin-top:auto;margin-left: 600px;" class="container">
                <h3 style="color:white;font-size:24px">Subtotal: ₹ <span id="gtotal"></span></h3>
                <a href="http://localhost/devstarters/webathon/payment/" class="btn btn-outline-danger btn-lg" style="font-size: 17px;margin-top: 12px;" target="_blank">Checkout</a>

            </div>
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
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}



var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
</body>
</html>
