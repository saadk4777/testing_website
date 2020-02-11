
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-12 footer-info text-center" data-aos="fade-down">
            <h1><a href="#main">SHAWF<!-- <span>o</span> --></a></h1>
            <p>SHAWF is a Mobile Value Added SMS Services Provider and Digital Engagement Agency in Pakistan. Our mission is to progress with technology and introduce new possibilities. We strongly believe that the collaboration between digital service and mobile communications brings association with the right audience and keep them engaged with the brand.</p>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -->
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 footer-contact text-center">
            <!-- <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p> -->
             <h4 data-aos="fade-down">Follow Us</h4>
            <div class="social-links">
              <a href="#" class="twitter" data-aos="fade-up" data-aos-duration="200"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook" data-aos="fade-up" data-aos-duration="400"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram" data-aos="fade-up" data-aos-duration="600"><i class="fa fa-instagram"></i></a>
              <a href="#" class="linkedin" data-aos="fade-up" data-aos-duration="800"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        
       &copy; Copyright <strong>Shawf</strong>. All Rights Reserved 
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        <!-- Designed by <a href="https://bootstrapmade.com/">ITS</a> -->
      </div>
    </div>
  </footer><!-- #footer -->


  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script> 
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>

 <script type="text/javascript">
  

     $("#contactus").submit(function ( event ) {
      // var spinner = $('#gif');
        // $('#gif').css('visibility', 'visible');
        event.preventDefault();
        var formData = new FormData($(this)[0]);
        var url = 'sendemail.php';
        // var link = '<?php //echo BASEURL;?>post/';
        // var delay = 1000;
       
      
    //spinner.show(); 
        $.ajax({
          type: 'post',
          url: url,
          contentType: false,
          processData: false,
          data: formData,
          beforeSend : function()
          {
            //$("#preview").fadeOut();
            $("#errors").fadeOut("fast");
          },
          success: function(value) {
            console.log(value);
            if(value != 'false')  {
              $("#errors").html(value).fadeIn("fast");
              setTimeout(function () {
                $("#errors").html(value).hide();
              }, 9000);
            } 
            this.reset();
           // spinner.hide();
            //   else {
            //     setTimeout(function(){ window.location = link; }, delay);                   
            // }//else main
          },
          error: function(e) 
          {
            if(value !='false') {
              $("#errors").html(e).fadeIn("fast");
              setTimeout(function () {
                $("#errors").html(value).hide();
              }, 9000);
              
            } 
           // spinner.hide();
          }
        });
       
      });  
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
      loop:true,
      navigation : false, // Show next and prev buttons
      autoplay:true,
      autoplaySpeed: 1000,
      slideSpeed :300,
 
      responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
 
  });
 
});
    </script>
</body>

</html>
