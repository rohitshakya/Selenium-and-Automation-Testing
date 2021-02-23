<?php include('header.php') ?>
<div class="slider-wrapper">
    <div class="homepage-s  owl-carousel owl-theme">
        <div class="item bg-10">
            <div class="container">
                  <div class="row">
                     <div class="col-xl-12 slider-ext-wrap">
                        <div class="slider-text">
                        <h1 class="animated flipInX">Technology that suits</h1>
                              <p class="animated fadeInDown">Your child's learning style</p>
                       
                        </div>

                      </div>
                  </div>
              </div>
        </div>

        <div class="item bg-11">
             <div class="container">
                  <div class="row">
                      <div class="offset-md-3 offset-xl-4 col-xl-7 slider-ext-wrap  animated fadeInUp">
                          <div class="slider-text sldr-two">
                              <h1 class="animated flipInX">Technology that suits</h1>
                              <p class="animated fadeInDown">Your child's learning style</p>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
    </div>
</div>
<!-- Slides end -->




<section class="feature-area-wrapper style-two">
	<div class="container-fluid">
		<div class="row no-gutters justify-content-center">
			<div class="col-xl-10">
				<div class="row">
					<div class="col-sm-6 col-xl-3 col-md-3 offset-md-3">
						<a href="javascript:;">
							<div class="single-features bg-orange wow fadeInUp" data-wow-delay=".4s">
								<div class="fet-icon">
									<img src="<?=base_url('assets/bundles/')?>/img/icon/feature-icon-2.png" alt="">
								</div>
								<h3>Individual </h3>
							</div>
						</a>
					</div>
					<div class="col-sm-6 col-xl-3 col-md-3">
						<a href="javascript:;">
							<div class="single-features bg-sky wow fadeInUp" data-wow-delay=".6s">
								<div class="fet-icon">
								
                                    	<img src="<?=base_url('assets/bundles/')?>/img/icon/feature-icon-1.png" alt="">
								</div>
								<h3>School</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 




<!--Subject area start-->
<section class="kids-care-event-area">
        <div class="container-fluid custom-container">
           <div class="row">
              <div class="col-xl-12">
                    <h2 class="area-heading  st-two font-red">Choose Subject</h2>
               </div>
            </div>
            <div class="row">
            <?php  if (is_array($subject) && count($subject) > 0)  { 
              $i=1; foreach ($subject as $getsubject) { ?>
               <div class="col-sm-6 col-xl-2">
                   
              
                   
                        <?php if($getsubject['sub_coming']==1){ ?>
                        <a href="<?=base_url()?>/subject/<?=$getsubject['slug']?>">
                        <?php }else{ ?>
                        <a href="javascript:void(0)">
                        <?php } ?>
                       
                       
                        
                             
                        <div class="sin-upc-event-two">
                        <?php /*
                          <div class="price red-drop">
                                <p>$15</p>
                            </div>
                        */ ?>
                        <div class="sub-image">
                       
                         <?php if($getsubject['sub_coming']==1){ ?>
                        <?php }else{ ?>
                        <div class="coming">
                                <p>Coming Soon</p>
                            </div>
                        <?php } ?>    
                            
                            
                            
                            
                        <?php if(!empty($getsubject['sub_cover'])){ ?>
						<img src="<?=base_url()?>/master/uploads/subject/<?php echo $getsubject['sub_cover'];?>" alt="">
                        <?php }else{ ?>
                        <img src="<?=base_url()?>/master/uploads/subject/icon.png">
                        <?php } ?> 
                        </div>
                   
                        <div class="sin-up-content">
                          <h6 class="text-center"><?=$getsubject['sub_name']?></h6>
                        </div>
                    </div>
                   </a>
                </div>
            <?php $i++;} }else{    ?>
            <?php } ?> 
                
               <div class="col-sm-6 col-xl-2">
                 <a href="<?=base_url()?>/subject"> 
                    <div class="sin-upc-event-two">
                        <div class="sub-image">
                         <img src="<?=base_url()?>/master/uploads/subject/plus.png" alt="">
                        </div>
                        <div class="sin-up-content">
                        <h6 class="text-center">Another</h6>
                        </div>
                    </div>
                  </a>
                </div>   
             </div>
        </div>
</section>
<!--Subject area end-->






<!--Wellcome area start-->
<section class="wellcome-area-wrapper ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-xl-6">
				<div class="wellcome-content wow fadeInUp" data-wow-delay=".5s">
					<h2 class="font-orange area-heading">Welcome  to<br>Viva VOLT!</h2>
					<p>Lorem ipsum dolor sit amet, consectetur Excepteur sint occaecat cupidatat non proident, sunt in cuculpa qui officiacuculpa qui officiacuculpa qui officiaLorem ipsum dolor sit amet,cuculpa qui officiacuculpa qui officiacuculpa qui officiaLorem ipsum dolor sit amet</p> <a href="<?=base_url()?>about-us" class="kids-care-btn bg-red">Why Viva volt?</a>
				</div>
			</div>
		</div>
	</div>
</section>
 


<div class="service-area mt-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="area-heading st-two font-sky">Features</h1>
				<p class="heading-para ">We promised you that, we always try to take care of your childdren. Early child care is a very important and often overlooked compaonent of child development</p>
			</div>
		</div>
		<div class="row">
			<div class="offset-md-0 col-md-12 offset-lg-1 col-lg-10">
				<div class="row">
					<div class=" col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".1s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/')?>/img/icon/ser-b-1.png" alt="">
							<div class="ser-det">
								<h2>Video Lessons</h2>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6  col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".3s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/')?>/img/icon/ser-b-2.png" alt="">
							<div class="ser-det">
								<h2>Gamified Learning</h2>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".5s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/')?>/img/icon/ser-b-3.png" alt="">
							<div class="ser-det">
								<h2>Smart Interactivity </h2>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".7s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/')?>/img/icon/ser-b-4.png" alt="">
							<div class="ser-det">
								<h2>Ebooks</h2>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".9s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/')?>/img/icon/ser-b-4.png" alt="">
							<div class="ser-det">
								<h2>Progredd Tracker</h2>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".99s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/')?>/img/icon/ser-b-6.png" alt="">
							<div class="ser-det">
								<h2>Smart Report</h2>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".99s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/')?>/img/icon/ser-b-7.png" alt="">
							<div class="ser-det">
								<h2>Online Worksheets</h2>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".99s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/')?>/img/icon/ser-b-8.png" alt="">
							<div class="ser-det">
								<h2>Online Support</h2>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



     <!--Teachers area start-->
     <section class="kids-care-teachers-area style-3">
         <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="area-heading st-two font-sky">Online Instructors</h2>
                  
                </div>
            </div>
            <div class="inner-container">
                <div class="row ">
                    <div class="teacher-car-start-two owl-carousel owl-theme"> 
                    
                    <!--Single teacher-->
                    <div class="  col-xl-12 item">
                        <div class="single-teacher style-b">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/img/teacher/team-1.jpg" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4>Lily Carter</h4>
                                <p>Active Learning Teacher</p>
                               
                            </div>

                        </div>
                    </div>
                    <!--Single teacher-->

                    <div class="col-xl-12 item">
                        <div class="single-teacher style-b">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/img/teacher/team-1.jpg" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4>Ryan Austin</h4>
                                <p>Active Learning Teacher</p>
                             
                            </div>
                        </div>
                    </div>

                    <!--Single teacher-->

                    <div class="single-teacher col-xl-12 item">
                        <div class="single-teacher style-b">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/img/teacher/team-1.jpg" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4>Lisa Gutierrez</h4>
                                <p>Preschool Teach</p>
                           
                            </div>
                        </div>
                    </div>

                    <!--Single teacher-->

                    <div class="single-teacher col-xl-12 item">
                        <div class="single-teacher style-b">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/img/teacher/team-1.jpg" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4>Rose Wagner</h4>
                                <p>Creative Director</p>
                               
                            </div>
                        </div>
                    </div>


                    </div>
                </div>
            </div>
        </div>
     </section>
     <!--Teachers area end-->



<div class="counter-area d-flex align-items-center">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-6 offset-md-0 col-md-3 offset-lg-2 col-lg-2">
    			    <div class="sin-counter">
    			        <p class="counter">11521</p>
    				<span>Students</span>
    			    </div>
    			</div>
    			<div class="col-6 col-md-3 col-lg-2">
    			
    				<div class="sin-counter">
    			        <p class="counter">3851</p>
    				<span>School</span>
    			    </div>
    			</div>
    			<div class="col-6 col-md-3 col-lg-2">
    			
    				<div class="sin-counter">
    			        <p class="counter">150</p>
    				    <span>Moduls</span>
    			    </div>
    			</div>
    			<div class="col-6 col-md-3 col-lg-2">
    			
    				<div class="sin-counter">
    			        <p class="counter">40352</p>
    				    <span>Total Visitors</span>
    			    </div>
    			</div>
    			
    		</div>
    	</div>
    </div>

    <!--Popular testimonial area start-->
    <section class="tes-popular bol-bol-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="area-heading font-red st-two">What they say !</h2>
                   
                </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-12 col-xl-10">
                   <div class="row srart-popular-tes owl-carousel owl-theme  no-gutters">
                       <!--Single popular testimonial-->
                        <div class="col-xl-12 item">
                            <div class="sin-pop-tes color-per">
                                <div class="con-part">
                                    <h6>Active Learning</h6>
                                    <p>Lorem ipsum dolor sit amsectet urExcepteur sint occaecat cupidatat non proident, sunt in cuculpa qu officiaulpa qui officiacuculpa qui officiaLorem ipsum dolor </p>
                                </div>
                                <div class="img-part">
                                    <div class="pt-img">
                                        <img src="<?=base_url('assets/bundles/')?>/img/icon/tes-c3.png" alt="">
                                    </div>
                                    <div class="pt-intro">
                                        <h6 class="font-green">Kevin Boyd</h6>
                                        <p>UI / UX Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single popular testimonial-->
                        <div class="col-xl-12 item">
                            <div class="sin-pop-tes color-red">
                                <div class="con-part">
                                    <h6>Active Learning</h6>
                                    <p>Lorem ipsum dolor sit amsectet urExcepteur sint occaecat cupidatat non proident, sunt in cuculpa qu officiaulpa qui officiacuculpa qui officiaLorem ipsum dolor </p>
                                </div>
                                <div class="img-part">
                                    <div class="pt-img">
                                        <img src="<?=base_url('assets/bundles/')?>/img/icon/tes-c2.png" alt="">
                                    </div>
                                    <div class="pt-intro">
                                        <h6 class="font-green">Angela Estrada</h6>
                                        <p>UI / UX Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Single popular testimonial-->
                        <div class="col-xl-12 item">
                            <div class="sin-pop-tes">
                                <div class="con-part">
                                    <h6>Ebook</h6>
                                    <p>Lorem ipsum dolor sit amsectet urExcepteur sint occaecat cupidatat non proident, sunt in cuculpa qu officiaulpa qui officiacuculpa qui officiaLorem ipsum dolor </p>
                                </div>
                                <div class="img-part">
                                    <div class="pt-img">
                                        <img src="<?=base_url('assets/bundles/')?>/img/icon/tes-c1.png" alt="">
                                    </div>
                                    <div class="pt-intro">
                                        <h6 class="font-green">Catherine Hayes</h6>
                                        <p>UI / UX Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
               </div>
            </div>
        </div>
    </section>
    <!--Popular testimonial area end-->



    
    <!--Call to action area start-->
     <section class="call-to-action-area">
         <div class="container-fluid ">
             <div class="row ">
                 <div class="col-sm-12 col-lg-9">
                     <h4>Get Volt for you school</h4>
                   
                 </div>
                 <div class="col-sm-12 col-lg-3">
                     <a href="#" class="kids-care-btn bg-red">Get Admission</a>
                 </div>
             </div>
         </div>
     </section>
     <!--Call to action area end-->
  

  


  




<?php include('footer.php'); ?>