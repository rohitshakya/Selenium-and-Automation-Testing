 
 <!--Footer widget area start-->
 <section class="footer-widget style-two style-two">
  <div class="row col-md-8 offset-xl-3">
				 <div class="col-md-4 wd-50">
				 <a  href="<?=base_url()?>">
                <div class="sin-quick-con wow fadeInUp" data-wow-delay=".4s">
                    <div class="ft-quick-con">
                       <div class="sin-co-img" style="background-color: #6f7cbb;">
                           <img src="https://cdn-jr.brainpop.com/assets/jr/images/product_nav-brainpop.svg" alt="">
                       </div>
                    </div>
                        <p class="font-orange">VOLT</p>
                </div>
				</a>
            </div>
           
			
			<div class="col-md-4 wd-50">
			<a  href="<?=base_url()?>">
                <div class="sin-quick-con wow fadeInUp" data-wow-delay=".4s">
                    <div class="ft-quick-con">
                       <div class="sin-co-img" style="background-color: #6f7cbb;">
                           <img src="https://cdn-jr.brainpop.com/assets/jr/images/product_nav-brainpop.svg" alt="">
                       </div>
                    </div>
                        <p class="font-orange">School </p>
                </div>
			</a>
            </div>
            
        </div>
     <div class="container-fluid">
         <div class="row">
         <div class="col-sm-6 col-lg-3 ">
                <div class="single-widget">
                    <h3 class="font-per">About Us</h3>
                    <div class="p10">
                      <img src="<?=base_url('assets/bundles/')?>/img/logo.png" alt="">
                    </div>
                    <p class="footer-about-text">
                        Viva Online Learning Technologies Private Limited is an innovative platform for
                        curricular learning. With video and interactive course modules delivered through web, it turns
                        learning into a fun-filled and engaging experience. <a class="volt-color" href="<?=base_url()?>/about-us">Read More</a>
                     </p>
                    
                </div>
            </div>
           
             <div class="col-sm-6 col-lg-3">
               <div class="single-widget">
                    <h3 class="font-per">Important Links</h3>
                   
                   <div class="sin-twitter">
                        <p><a  href="<?=base_url()?>">VOLT </a></p>
                    </div>
                    <div class="sin-twitter">
                        <p><a  href="<?=base_url()?>/about-us">About Us </a></p>
                    </div>
                    <div class="sin-twitter">
                       <p><a href="<?=base_url()?>/contact-us"> Contact Us</a></p>
                    </div>
                    <div class="sin-twitter">
                       <p><a href="<?=base_url()?>/privacy-policy"> Privacy Policy</a></p>
                    </div>
                     <div class="sin-twitter">
                       <p><a href="<?=base_url()?>/terms-of-service"> Terms of Service</a></p>
                    </div>
                     <div class="sin-twitter">
                       <p><a href="<?=base_url()?>/refund-policy"> Refund Policy</a></p>
                    </div>
                </div>
            </div>
             
              
            <div class="col-sm-6 col-lg-3 "> 
                <div class="single-widget">
                   <h3 class="font-per">Explore</h3>
                   <ul class="footer-tab">
                       <li><a href="<?=base_url()?>/subject">Subjects</a></li>
                       <li><a href="<?=base_url()?>/academic-team">Academic Team</a></li>
                        <li><a href="<?=base_url()?>/gallery">Gallery</a></li>
                    
                       <li><a href="<?=base_url()?>/team">Team</a></li>
                       <li><a href="<?=base_url()?>/testimonials">Testimonials</a></li>
                          <li><a href="javascript:void(0);">Blog</a></li>
                 
          
                 
                   </ul>
                </div>
            </div>
             
            <div class="col-sm-6 col-lg-3">
               <div class="single-widget">
                    <h3 class="font-per">Contact us</h3>
                    <div class="footer-contact">
                        
                        <p><a><strong>Viva Online Learning Technologies<br> Private Limited</strong></a></p>
                        <div class="sin-con">
                            <i class="fa fa-location-arrow"></i>
                            <p>4737/23, Ansari Road, Dariya Ganj, New Delhi, Delhi 110002</p>
                        </div>
                        <div class="sin-con">
                            <i class="fa fa-phone"></i>
                            <a href="tel:01142242200">011 4224 2200</a>
                        </div>
                        <div class="sin-con">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@vivavolt.net">info@vivavolt.net </a>
                        </div>
                    </div>
                </div>
            </div> 
           
        </div>
     </div>
 </section>
 <!--Footer widget area end-->
 <!--Footer area start-->
 <div class="footer-area">
     <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-md-6">
                <p>© 2017-2021 VIVA ONLINE LEARNING TECHNOLOGIES PRIVATE LIMITED | VOLT</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <ul class="social-icon float-right">
                    <li><a href="https://www.instagram.com/viva.volt/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/VIVA_VOLT" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/VOLT.VIVA" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    
              
                    
                </ul>
            </div>
         </div>
     </div>
 </div>
  <script>
$(document).ready(function(){
    $("#input_submit").click(function(){
        var username = $("#input_uname").val().trim();
        var password = $("#input_pwd").val().trim();
        var base_url =  '<?=base_url()?>';
        if( username != "" && password != "" ){
           $.ajax({
                url: base_url + '/loginckeck',
                type:'post',
                data:{accountid:username,accountpassword:password},
                beforeSend: function() {
                $('#logError').addClass('alert-warning');
                $('#logError').html("please wait..");
                $('#logError').css('display', 'block');
            },
            success: function(response) {
               // alert(response);
                if (response == 'Veryfied') {
                      $('#logsuccess').html("success");
                      $('#logError').css('display', 'none');
                      $('#logError').removeClass('alert-warning');
                      $('#logsuccess').addClass('alert-success').delay(7000).fadeOut(500);
                      location.reload().delay(2000).fadeOut(500);;
                } else {
                    $('#logError').removeClass('alert-warning');
                    $('#logError').addClass('alert-danger');
                    $('#logError').html(response);
                    $('#logError').css('display', 'block').delay(7000).fadeOut(500);
                }
            }
            });
        }
    });
});
</script>
<!--Footer area end-->
<!-- === bootsrap-min === -->
<script src="<?=base_url('assets/bundles/')?>/js/bootstrap.min.js"></script>
<!-- === Scroll up min js === -->
<script src="<?=base_url('assets/bundles/')?>/js/jquery.scrollUp.min.js"></script> 
<!-- === Waypoint js === -->
<script src="<?=base_url('assets/bundles/')?>/js/jquery.waypoints.js"></script>
<!-- === Venobox js === -->
<script src="<?=base_url('assets/bundles/')?>/js/venobox.min.js"></script>
<!-- === filterizr filter  js === -->
<script src="<?=base_url('assets/bundles/')?>/js/jquery.filterizr.min.js"></script>
<!-- === Owl Carousel js === -->
<script src="<?=base_url('assets/bundles/')?>/js/owl.carousel.min.js"></script>
<!-- === WOW js === -->
<script src="<?=base_url('assets/bundles/')?>/js/wow.js"></script>
<!-- === Image loaded js === -->
<script src="<?=base_url('assets/bundles/')?>/js/imageloaded.pkgd.min.js"></script>
<!-- === Mobile menu  js === -->
<script src="<?=base_url('assets/bundles/')?>/js/mobile-menu.js"></script>
<!-- === Main  js === -->
<script src="<?=base_url('assets/bundles/')?>/js/main.js"></script>
<script>
$(document).ready(function() {
  $('#gallery').imagesLoaded(function() {
  var filterizd = $('.filtr-container').filterizr({});
  $('.filters .filtr').click(function() {
  $('.filters .filtr').removeClass('filtr-active');
  $(this).addClass('filtr-active');
  });
  });
});  
</script>
<script>
new Freezeframe();
</script>
</body>
</html>