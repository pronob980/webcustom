<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>tech Blog</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href ="newcss/style.css" rel="sylesheet">

  <!-- =======================================================
  * Template Name: Multi - v2.1.0
  * Template URL: https://bootstrapmade.com/multi-responsive-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'include/header.php';?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/1.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Tech Blog</span></h2>
              <p class="animate__animated animate__fadeInUp">Tech marketers are largely aware of the need to educate prospects, which is why this industry is considered the most savvy in regards to content creation</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/2.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Office Our </h2>
              <p class="animate__animated animate__fadeInUp">DESCRIPTION: Your website represents your company to millions every day. It establishes your identity to the world 365 days a year.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/3.png)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Our Team Workers</h2>
              <p class="animate__animated animate__fadeInUp">Teamwork is the concept of people working together cooperatively, as in a sports team. Aside from any required technical proficiency,</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section>
  <!-- End Hero -->
  <main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Mirpur-1,Dhaka</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@techblog.com<br>contact@techblog.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+8801701073715<br>++8801701073715</p>
                </div>
              </div>
            </div>

          </div>
             
         <div  class="col-lg-6">
            <form id="msg_form" method="post" >
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="fullname" id="fullname" placeholder="Your Name" />
                 <div class="validate" id="err_name" style="display:none"><p class="text-danger">Please fillup this field</a></div>
                </div>
               <div class="col form-group">
                  <input type="text"  name="email" id="email" placeholder="Your Email" />
                  <div class="validate" id="err_email" style="display:none"><p class="text-danger">Please fillup this field</a></div>
                </div>
              </div>
         <div class="form-row">
                <div class="col form-group">
        <div></div>
                  <input type="text" name="phone"  id="phone" placeholder="Your phone number" />
                  <div class="validate" id="err_phone" style="display:none"><p class="text-danger">Please fillup this field</a></div>
                </div>
                <div class="col form-group">
                  <input type="text"  name="address" id="address" placeholder="Your address"  />
                  <div class="validate" id="err_address" style="display:none"><p class="text-danger">Please fillup this field</a></div>
                </div>
              </div>
        
              <div class="form-group">
                <input type="text"  name="subject" id="subject" placeholder="Subject"  />
                <div class="validate" id="err_subject" style="display:none"><p class="text-danger">Please fillup this field</a></div>
              </div>
              <div class="form-group">
                <textarea  name="message" id="message"  placeholder="Message" ></textarea>
                <div class="validate" id="err_msg" style="display:none"><p class="text-danger">Please fillup this field</a></div>
              </div>
                
              <div class="text-center"><button type="button" class="btn btn-primary" onclick="submit_form()">Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
	

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include'include/footer.php';?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  function submit_form(){
	var datastr = $("#msg_form").serialize();
	var fullname = $("#fullname").val();
	var Email = $("#email").val();
	var phone= $("#phone").val();
	var address = $("#address").val();
	var subject = $("#subject").val();
	var message = $("#message").val();
	if(fullname==""){
		//alert('Inter Your full_name');
		$("#err_name").show();
		$("#fullname").focus();
		return false;
	 }
   else{
    $("#err_name").hide();
   }
	   if(Email==""){
			//alert('Please enter your email');
      $("#err_email").show();
			$("#email").focus();
			return false;
		}
    else{
      $("#err_email").hide();
    }
		 if(phone==""){
			//alert('Please enter your phone');
      $("#err_phone").show();
			$("#phone").focus();
			return false;
		}
    else{
      $("#err_phone").hide();
    }
	 if(address==""){
			//alert('Please enter your address');
      $("#err_address").show();
			$("#address").focus();
			return false;
		}
    else{
      $("err_address").hide();
    }
		if(subject==""){
			//alert('Please enter your subject');
			$("#err_subject").show();
      $("#subject").focus();
			return false;
		}
    else{
      $("#err_subject").hide();
    }
		 if(message==""){
			//alert('Please enter your message');
      $("#err_msg").show();
			$("#message").focus();
			return false;
		}
		
		else{
			$("#err_msg").hide(); 
		   $.ajax({
				url: 'http://localhost/task/web/forms/contact.php', // point to server-side PHP script
				//cache: false,
				processData: false,
				data: datastr,
				type: 'POST',
				success: function(return_msg){
				  
				 // alert(return_msg);
				  $('form')[0].reset();
				 

		     }
		  });	  	  
		}
}
</script>
</body>

</html>

