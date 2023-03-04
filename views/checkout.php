<!DOCTYPE html>
<script>

function hide_div(event) {
    var element = document.getElementById('success_message');
    element.style.visibility = 'hidden';
}



</script>
<?php include '../db_connection.php'; 
$message = "hide";
if(isset($_POST['send_order'])){
    $query = "INSERT INTO fc_order_details(c_title, c_name, c_email,c_telephone,c_address1,c_address2,c_city,c_state,c_zipcode,c_country,c_payment_method, c_captcha) 
    VALUES('".$_POST['title']."','".$_POST['name']."','".$_POST['email'] ."','".$_POST['telephone']."','".$_POST['address1']."','".$_POST['address2'] ."','". $_POST['city']."','".$_POST['state']."','".$_POST['zipcode'] ."','".$_POST['country']."','".$_POST['payment_method']."','".$_POST['captcha'] ."')";
   
   if(!mysqli_query($connection, $query)) echo("<p>Error adding order details.</p>");

    $message = "show";
}

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PHPJabbers.com | Free Shopping Website Template</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="/"><div class="logo">
                            <img src="img/logo.png" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li><a href="/">Home</a></li>

                                <li><a href="/products">Products</a></li>

                                <li class='active'><a href="/checkout">Checkout</a></li>

                                <li>
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/blog">Blog</a></li>
                                        <li><a href="/testimonials">Testimonials</a></li>
                                        <li><a href="/terms">Terms</a></li>
                                    </ul>
                                </li>

                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      
    <section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-1-1920x300.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <section class="featured-places">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 pull-right">
                        <ul class="list-group">
                          <li class="list-group-item">
                            <div class="row">
                                  <div class="col-xs-6">
                                       <em>Sub-total</em>
                                  </div>
                                  
                                  <div class="col-xs-6 text-right">
                                       <strong>$ 128.00</strong>
                                  </div>
                             </div>
                          </li>
                          
                          <li class="list-group-item">
                               <div class="row">
                                    <div class="col-xs-6">
                                         <em>Extra</em>
                                    </div>

                                    <div class="col-xs-6 text-right">
                                         <strong>$ 0.00</strong>
                                    </div>
                               </div>
                          </li>

                          <li class="list-group-item">
                               <div class="row">
                                    <div class="col-xs-6">
                                         <em>Tax</em>
                                    </div>

                                    <div class="col-xs-6 text-right">
                                         <strong>$ 10.00</strong>
                                    </div>
                               </div>
                          </li>

                          <li class="list-group-item">
                               <div class="row">
                                    <div class="col-xs-6">
                                         <em>Total</em>
                                    </div>

                                    <div class="col-xs-6 text-right">
                                         <strong>$ 138.00</strong>
                                    </div>
                               </div>
                          </li>

                          <li class="list-group-item">
                               <div class="row">
                                    <div class="col-xs-6">
                                         <em>Deposit</em>
                                    </div>

                                    <div class="col-xs-6 text-right">
                                         <strong>$ 20.00</strong>
                                    </div>
                               </div>
                          </li>
                        </ul>
                    </div>

                    <div class="col-lg-8 col-md-7">
                         <form id="checkout_form" action="" method="post">
                         <div class="clearfix">
                              <div style="background-color: green;height:30px;padding:2px;" id="success_message" class='<?php echo $message ?>' data-closable>
                                   <h5 style="color:white;display:inline;">The order has been saved successfully! </h5>
                                   <button style="float:right;background-color: green;border:none;" class="close-button" aria-label="Close alert" type="button" onclick="hide_div()" data-close>
                                        <span aria-hidden="true">&times;</span>
                                   </button>                
                              </div>
                              <br/>
                         </div>
                         <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Title:</label>
                                          <select id="title" name="title" class="form-control" data-msg-required="This field is required.">
                                               <option value="">-- Choose --</option>
                                               <option value="1">Dr.</option>
                                               <option value="2">Miss</option>
                                               <option value="3">Mr.</option>
                                               <option value="4">Mrs.</option>
                                               <option value="5">Ms.</option>
                                               <option value="6">Other</option>
                                               <option value="7">Prof.</option>
                                               <option value="8">Rev.</option>
                                          </select>
                                     </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Name:</label>
                                          <input name="name" id="name" type="text" class="form-control">
                                     </div>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Email:</label>
                                          <input name="email" id="email" type="text" class="form-control">
                                     </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Phone:</label>
                                          <input name="telephone" id="telephone" type="text" class="form-control">
                                     </div>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Address 1:</label>
                                          <input name="address1" id="address1" type="text" class="form-control">
                                     </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Address 2:</label>
                                          <input name="address2" id="address2" type="text" class="form-control">
                                     </div>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">City:</label>
                                          <input name="city" id="city" type="text" class="form-control">
                                     </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">State:</label>
                                          <input name="state" id="state" type="text" class="form-control">
                                     </div>
                                </div>
                           </div>
                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Zip:</label>
                                          <input name="zipcode" id="zipcode" type="text" class="form-control">
                                     </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Country:</label>
                                          <select name="country" id="country" class="form-control">
                                               <option value="">-- Choose --</option>
                                               <option value="1">Sweden</option>
                                               <option value="2">Sri Lanka</option>
                                               <option value="3">UK</option>
                                               <option value="4">Canada</option>
                                          </select>
                                     </div>
                                </div>
                           </div>

                           <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Payment method</label>

                                          <select name="payment_method" id="payment_method" class="form-control">
                                               <option value="">-- Choose --</option>
                                               <option value="1">Bank account</option>
                                               <option value="2">Cash</option>
                                               <option value="3">PayPal</option>
                                          </select>
                                     </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                     <div class="form-group">
                                          <label class="control-label">Captcha</label>
                                          <input name="captcha" id="captcha" type="text" class="form-control">
                                     </div>
                                </div>
                           </div>

                           <div class="form-group">
                                <label class="control-label">
                                     <input type="checkbox">

                                     I agree with the <a href="/terms" target="_blank">Terms &amp; Conditions</a>
                                </label>
                           </div>

                           <div class="clearfix">
                                <div class="blue-button pull-left">
                                <input style="background-color:#4883ff;color:white;" name="send_back" class="btn" id="form-submit" type="submit" value="Back" />
                                </div>

                                <div class="blue-button pull-right">
                                   <input style="background-color:#4883ff;color:white;" name="send_order" class="btn" id="form-submit" type="submit" value="Finish" />
                                </div>
                           </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/footer_logo.png" alt="Venue Logo">
                        </div>
                        <p>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellustea dictumst.</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="/"><i class="fa fa-stop"></i>Home</a></li>
                                    <li><a href="/about"><i class="fa fa-stop"></i>About</a></li>
                                    <li><a href="/contact"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="/products"><i class="fa fa-stop"></i>Products</a></li>
                                    <li><a href="/testimonials"><i class="fa fa-stop"></i>Testimonials</a></li>
                                    <li><a href="/blog"><i class="fa fa-stop"></i>Blog</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i> 212 Barrington Court New York, ABC</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">+1 333 4040 5566</a></li>
                            <li><span>Email:</span><a href="#">contact@company.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>