<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Pay Page</title>
</head>
<body>
  <div class="container">
    <h2 class="my-4 text-center">Payment</h2>
    <form action="charge.php" method="post" id="payment-form">
      <div class="form-row">
       <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name">
       <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name">
       <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address">
		<input type="number" name="amountToPay" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Amount to Pay">  
       <?php /*?><?php
       //$FUCKER = 6900;
       echo '
       <input type="number" name="amountToPay" value="'.$FUCKER.'" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address" readonly>';
       ?><?php */?>
        <div id="card-element" class="form-control">
          <!-- a Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors -->
        <div id="card-errors" role="alert"></div>
      </div>

      <button>Submit Payment</button>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="js/charge.js"></script>
	
	<br><br><br><br><br><br><br><br><br><br>
</body>

<!-- Footer section
================================================== -->
	
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.footer{
  background: #152F4F;
	color:white; }
  
.links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
    }
 }  

a:hover{
        text-decoration:none;
        color: #949494;
        }
	
.about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#949494;}
    }
} 
	
.location{
    i{font-size: 18px;}
}
	
.copyright p{border-top:1px solid rgba(255,255,255,.1);} 
	
</style>

<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row"><br><br>
    <div class="col-lg-5 col-xs-12 about-company">
      <h2 style="font-size: 27px; font-weight: 600; letter-spacing: 0.1rem">FOOD AT IKEA</h2>
      <p class="pr-5 text-white-50" style="font-size: 16px; font-weight: 300; color: #dedede">We want to offer food that’s delicious, sustainable and nutritionally balanced. That’s why we include a variety of more sustainable options at our IKEA Restaurants, IKEA Swedish Food Markets, and IKEA Café. </p><br>
      <p><a href="https://www.facebook.com/IKEAMalaysia"><i class="fab fa-facebook" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.instagram.com/ikeamalaysia/"><i class="fab fa-instagram" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.linkedin.com/company/ikea-southeast-asia/"><i class="fab fa-linkedin" style="font-size: 20px">&nbsp;&nbsp;</i></a><a href="https://www.youtube.com/user/ikeamalaysia"><i class="fab fa-youtube" style="font-size: 20px">&nbsp;&nbsp;</i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-4" style="font-size: 20px; font-weight: 400; letter-spacing: 0.1rem">Our Company</h4>
        <ul class="m-0 p-0">
          <li><a href="../IKEA E-Restaurant/about-dynamic.html" style="font-size: 17px; font-weight: 300; color: #e6e6e6; letter-spacing: 0.5px">About us</a></li>
          <li><a href="../feedback/feedback-dynamic.html" style="font-size: 17px; font-weight: 300; color: #e6e6e6; letter-spacing: 0.5px">Feedback</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4" style="font-size: 20px; font-weight: 400; letter-spacing: 0.1rem">Location</h4>
      <p style="font-size: 16px; font-weight: 300; ">2A, Jalan Cochrane, Maluri, 55100 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur, Malaysia.</p>
      <p class="mb-0" style="font-size: 16px; font-weight: 300; color: #e6e6e6; line-height: 4"><i class="fas fa-phone-alt">&nbsp;</i><a href="tel:+60379527575">+603-7952 7575</a></p>
      <p style="font-size: 16px; font-weight: 300; color: #e6e6e6; line-height: 1"><i class="fas fa-envelope">&nbsp;</i><a href="mailto:customerservice.ikeamy@ikano.asia">customerservice.ikeamy@ikano.asia</a></p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright"><br>
      <p class="" style="color: #dedede"><small class="text-white-50">© Inter IKEA Systems B.V. 1999-2020</small></p>
    </div>
  </div>
</div>
</div>
</div>
</html>