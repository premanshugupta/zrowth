<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Zrowth</title> 

<!-- Favicons -->
<link rel="shortcut icon" href="Zrowth333_fevi.png">
<link rel="apple-touch-icon" href="Zrowth333_fevi.png">
<link rel="apple-touch-icon" sizes="72x72" href="Zrowth111.png">
<link rel="apple-touch-icon" sizes="114x114" href="Zrowth222.png">

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" media="screen">





<?php include('connection.php'); 
if (isset($_POST['submit'])) {
    

   $name = $_POST['name'];

  $email = $_POST['email'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
 $message = $_POST['message'];
 

 $q ="INSERT INTO footerinfo(name,email,phone,address,message)
   VALUES ('$name','$email','$phone','$address','$message')";
  $query =mysqli_query($con,$q);
}
  

?>



<section class="contacts section">
        <div class="container">
          <header class="section-header">
            <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
            <strong class="fade-title-right">contacts</strong>
          </header>
          <div class="section-content">
            <div class="row-base row">
              <div class="col-address col-base col-md-4">
                <a href="tel:+91 8817048007" style="color: #fff;">+91 8817048007</a><br>
                <a href="mailto:zrowthpkr@gmail.com" style="color: #fff;">zrowthpkr@gmail.com</a><br>
                <h5 style="color: #fff;">Near Phoolbagh,Lashkar Gwalior(MP)</h5>
              </div>
              <div class="col-base  col-md-8">
                <form class="" method="POST" action="" enctype="" >
                  <div class="row-field row">
                    <div class="col-field col-sm-6 col-md-4">
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" required placeholder="Email *">
                      </div>
                    </div>
                    <div class="col-field col-sm-6 col-md-4">
                      <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                      </div>
                    </div>
                    <div class="col-field col-sm-12 col-md-4">
                      <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-message col-field col-sm-12">
                      <div class="form-group">
                        <div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
                        <div class="error-message">We're sorry, but something went wrong</div>
                      </div>
                    </div>
                  </div>
                  <div class="form-submit text-right"><button type="submit" class="btn btn-shadow-2 wow swing" name="submit">Send <i class="icon-next"></i></button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->

      <footer id="footer" class="footer">     
        <div class="container">
          <div class="row-base row">
            <div class="col-base text-left-md col-md-4">
                <h2>Zrowth</h2>
            </div>
            <div class="text-center-md col-base col-md-4">
              <a href="https://themeforest.net/user/murren20" class="author-link">
                ©Zrowth 2019. All Rights Reserved.
              </a>
            </div>
            <!-- <div class="text-right-md col-base col-md-4">
              © go.arch 2016. All Rights Reserved.
            </div> -->
          </div>
        </div>
      </footer>

      <!-- Lines -->

      <div class="page-lines">
        <div class="container">
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
          </div>
          <div class="col-line col-xs-4">
            <div class="line"></div>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- SCRIPTS -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/owl.carousel.min.js"></script>

<!-- SLIDER REVOLUTION -->
<script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS   -->
<script src="js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="js/rev-slider/revolution.extension.video.min.js"></script>
<script src="js/interface.js"></script> 