<?php include('header.php')?>
<div class="slider-wrapper">
    <div class="homepage-s  owl-carousel owl-theme">
        <div class="item bg-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 slider-ext-wrap">
                       <?php /*  <div class="slider-text">
                        <h1 class="animated flipInX">Technology that suits</h1>
                              <p class="animated fadeInDown">Your child's learning style</p> 
                        </div>
                        */?>
                    </div>
                </div>
            </div>
        </div>
          <div class="item bg-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 slider-ext-wrap">
                       <?php /*  <div class="slider-text">
                        <h1 class="animated flipInX">Technology that suits</h1>
                              <p class="animated fadeInDown">Your child's learning style</p> 
                        </div>
                        */?>
                    </div>
                </div>
            </div>
        </div>
          <div class="item bg-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 slider-ext-wrap">
                       <?php /*  <div class="slider-text">
                        <h1 class="animated flipInX">Technology that suits</h1>
                              <p class="animated fadeInDown">Your child's learning style</p> 
                        </div>
                        */?>
                    </div>
                </div>
            </div>
        </div>
        
        
        <?php /*
        <div class="item bg-11">
            <div class="container">
                <div class="row">
                    <div class="offset-md-3 offset-xl-4 col-xl-7 slider-ext-wrap  animated fadeInUp">
                        <div class="slider-text sldr-two">
                   
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        */ ?>
   </div>
</div>
<!-- Slides end -->

<section class="feature-area-wrapper style-two">
	<div class="container-fluid">
		<div class="row no-gutters justify-content-center">
			<div class="col-xl-10">
				<div class="row justify-content-center">  
                    <div class="col-sm-6 col-xl-3 col-md-3">
						<a href="javascript:void(0)">
							<div class="single-features bg-sky wow fadeInUp" data-wow-delay=".6s">
								<div class="fet-icon">
								    <img src="<?=base_url('assets/bundles/upload/')?>/home/school.png" alt="">
								</div>
								<h3>School</h3>
							</div>
						</a>
					</div>
                    
					<div class="col-sm-6 col-xl-3 col-md-3">
						<a href="#SubjectList">
							<div class="single-features bg-orange wow fadeInUp" data-wow-delay=".4s">
								<div class="fet-icon">
									<img src="<?=base_url('assets/bundles/upload/')?>/home/individual.png" alt="">
								</div>
								<h3>Individual </h3>
							</div>
						</a>
					</div>
                    
					

                    <div class="col-sm-6 col-xl-3 col-md-3">
						<a href="<?=base_url();?>/jr">
							<div class="single-features bg-per wow fadeInUp" data-wow-delay=".8s">
								<div class="fet-icon">
								    <img src="<?=base_url('assets/bundles/upload/')?>/home/jr.png" alt="">
								</div>
								<h3>Junior</h3>
							</div>
						</a>
					</div>
                     
				</div>
			</div>
		</div>
	</div>
</section>
 




<!--Subject area start-->
<section class="kids-care-event-area" id="SubjectList">
        <div class="container-fluid custom-container">
           <div class="row">
              <div class="col-xl-12">
                    <h2 class="area-heading  st-two font-red">Choose Subject</h2>
               </div>
            </div>
            <div class="row justify-content-center">
            <?php  if (is_array($subject) && count($subject) > 0)  { 
              $i=1; foreach ($subject as $getsubject) { ?>
               <div class="col-sm-6 col-xl-2">
                        <?php if($getsubject['sub_coming']==1){ ?>
                        <a href="<?=base_url()?>/subject/<?=$getsubject['slug']?>">
                        <?php }else{ ?>
                        <a href="javascript:void(0)">
                        <?php } ?>
                        <div class="sin-upc-event-two">
                        <?php if($getsubject['sub_coming']==1){ ?>
                        <?php }else{ ?>
                        <div class="price sky-drop">
                        </div>
                        <?php } ?>
                        <div class="sub-image bg-nf">
                        <?php if(!empty($getsubject['sub_cover'])){ ?>
						<img src="<?=MEDIA_UPLOAD_URL;?>uploads/subject/<?php echo $getsubject['sub_cover'];?>" alt="" onmouseover="this.src='<?=MEDIA_UPLOAD_URL;?>uploads/subject/<?php echo $getsubject['sub_cover_gif'];?>'" onmouseout="this.src='<?=MEDIA_UPLOAD_URL;?>uploads/subject/<?php echo $getsubject['sub_cover'];?>'">
						
                        <?php }else{ ?>
                        <img src="<?=MEDIA_UPLOAD_URL;?>/uploads/subject/icon.png"  onmouseover="this.src='<?=MEDIA_UPLOAD_URL;?>/uploads/subject/sub.gif'" onmouseout="this.src='<?=base_url()?>/uploads/subject/icon.png'">
                        <?php } ?> 
                        </div>
                        <div class="sin-up-content">
                          <h6 class="text-center sub_n"><?=$getsubject['sub_name']?></h6>
                        </div>
                    </div>
                   </a>
                </div>
            <?php $i++;} }else{    ?>
            <?php } ?> 
         </div>
    </div>
</section>

<!--Subject area end-->
<section class="wellcome-video-area bg-volt-2 bg-volt-d">
       <div class="container-fluid">
           <div class="row justify-content-center">
               
              
                <div class="row col-md-10 col-lg-10 col-xl-10">
               <div class="offset-xl-1 col-md-7 col-lg-6 col-xl-5 bg-2a no-padding">
                  <div class="wellcome-content style-two">
                      <h2 class="font-per area-heading">Welcome to VOLT</h2>
                      <p>Comprehensive educational programme taking care of the school curriculum, learning at school, self-learning, and assessment. High-quality content developed by the best academic minds is delivered through video lessons by skilled presenters and accomplished teachers. Animations and graphical representations make lessons and key concepts come alive.</p> <a href="<?=base_url()?>about-us" class="kids-care-btn bg-red">Why VOLT?</a>
                     
                  </div>
               </div>
                <div class="col-xl-5 col-md-5 col-lg-6 no-padding">
                    <div class="video_content text-center d-flex align-items-center">
                          <?php /*    
                   <video class="aboutvid" loop="true" preload="none" controls="controls" id="vid" muted>
                      <source src="<?=base_url('assets/bundles/upload/')?>/promotion_video.mp4" type="video/mp4">
                      <source src="<?=base_url('assets/bundles/upload/')?>/promotion_video.ogg" type="video/ogg">
                      Your browser does not support the video tag.
                   </video>
                  */?>
             
                    <a class="about_video vbox-item" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=GmPsSKDsLd8&t=1s">
                        <img src="<?=base_url('assets/bundles/')?>/img/icon/youtube-play.png" alt=""></a>
                    </div>
                </div>
                  </div>
               
               
               
               
           </div>
       </div>
</section>
    
    
<div class="service-area s-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="area-heading st-two font-sky">Features</h1>
				<p class="heading-para ">VOLT transforms the learning experience with an array of features</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="offset-md-0 col-md-12 col-lg-10">
				<div class="row">
                    
                  <div class=" col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".1s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/upload/')?>/home/video.png" alt="Video Learning">
							<div class="ser-det">
								<h2>Video Lessons</h2>
								<p>Recorded lessons by expert presenters</p>
							</div>
						</div>
					</div>
                    
					<div class="col-sm-6  col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".3s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/upload/')?>/home/smart_interactivity.png" alt="Smart Interactivity">
							<div class="ser-det">
								<h2>Smart Interactivity</h2>
								<p>Practice and track your progress</p>
							</div>
						</div>
					</div>
                    
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".5s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/upload/')?>/home/gamified_learning.png" alt="Gamified Learning">
							<div class="ser-det">
								<h2>Gamified Learning</h2>
								<p>Acquire skills with engaging games</p>
							</div>
						</div>
					</div>
                    
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".7s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/upload/')?>/home/e_book.png" alt="Ebooks">
							<div class="ser-det">
								<h2>Ebooks</h2>
								<p>Read to succeed</p>
							</div>
						</div>
					</div>
					
                    <div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".9s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/upload/')?>/home/online_worksheets.png" alt="Online Worksheets">
							<div class="ser-det">
								<h2>Online Worksheets</h2>
								<p>More practice, stronger skills</p>
							</div>
						</div>
					</div>
					
                    <div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".99s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/upload/')?>/home/progress_tracker.png" alt="Progress Tracker">
							<div class="ser-det">
								<h2>Progress Tracker</h2>
								<p>Smart assessment data for faster progress</p>
							</div>
						</div>
					</div>
					
                    <div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".99s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/upload/')?>/home/nep.png" alt="NEP Focus">
							<div class="ser-det">
								<h2>NEP Focus</h2>
								<p>Compliance with the NEP recommendations</p>
							</div>
						</div>
					</div>
					
                    <div class="col-sm-6 col-md-6 col-lg-3">
						<div class="sin-ser wow fadeInUp" data-wow-delay=".99s">
							<img class="viva-activity" src="<?=base_url('assets/bundles/upload/')?>/home/online_support.png" alt="Online Support">
							<div class="ser-det">
								<h2>Online Support</h2>
								<p>Quick assistance to learners and educators</p>
							</div>
						</div>
					</div>
                    
				</div>
			</div>
		</div>
	</div>
</div>

    
    
    
    
    
    
<!--Teachers area start-->
<section class="kids-care-teachers-area  bg-volt-2 instructors-area bg-volt-d">
    <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="area-heading st-two font-sky">Academic Team</h2>
                  
                </div>
            </div>
            <div class="inner-container">
                <div class="row ">
                    <div class="teacher-car-start-two owl-carousel owl-theme"> 
                       
                        
                         <div class="single-teacher col-xl-12 item">
                        <div class="single-teacher style-b">
                            <a href="<?=base_url();?>/academic-team">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/upload/instructors/instructors-3.jpg" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4> Esha</h4>
                                <p>Instructor</p>
                           
                            </div>
                            </a>
                        </div>
                    </div>  
                        
                        
                    <div class="single-teacher col-xl-12 item">
                        <div class="single-teacher style-b">
                        <a href="<?=base_url();?>/academic-team">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/upload/instructors/instructors-6.jpg" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4>Zohra Lawrence</h4>
                                <p>Instructor</p>
                               
                            </div>
                            </a>
                        </div>
                    </div>
                        
                        
                     <div class="single-teacher col-xl-12 item">
                        <div class="single-teacher style-b">
                          <a href="<?=base_url();?>/academic-team">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/upload/instructors/instructors-5.jpg" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4>Ritu Saxena</h4>
                                <p>Instructor</p>
                               
                            </div>
                            </a>
                        </div>
                    </div>

                        
                        
                   

                    <div class="col-xl-12 item">
                        <div class="single-teacher style-b">
                           <a href="<?=base_url();?>/academic-team">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/upload/instructors/instructors-2.jpg" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4> Divya</h4>
                                <p>Instructor</p>
                             
                            </div>
                            </a>
                        </div>
                    </div>

                    <!--Single teacher-->

                

                    <!--Single teacher-->

                    <div class="single-teacher col-xl-12 item">
                        <div class="single-teacher style-b">
                            <a href="<?=base_url();?>/academic-team">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/upload/instructors/instructors-4.jpg" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4>Nidhi</h4>
                                <p>Instructor</p>
                               
                            </div>
                            </a>
                        </div>
                    </div>

                        
                   
                       <!--Single teacher-->
                    <div class="col-xl-12 item">
                        <div class="single-teacher style-b">
                            <a href="<?=base_url();?>/academic-team">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/upload/instructors/instructors-1.jpg" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4>Apoorva Vasishtha</h4>
                                <p>Instructor</p>
                               
                            </div>
                            </a>
                        </div>
                    </div>
                    <!--Single teacher-->  
                
                       <!--Single teacher-->
                    <div class="col-xl-12 item">
                        <div class="single-teacher style-b">
                            <a href="<?=base_url();?>/academic-team">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/upload/instructors/instructors-8.png" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4>Akanksha Dudpuri</h4>
                                <p>Instructor</p>
                               
                            </div>
                            </a>
                        </div>
                    </div>
                    <!--Single teacher-->     
                        
                        
                           <!--Single teacher-->
                    <div class="col-xl-12 item">
                        <div class="single-teacher style-b">
                        <a href="<?=base_url();?>/academic-team">
                            <div class="teacher-img">
                                <img src="<?=base_url('assets/bundles/')?>/upload/instructors/instructors-7.png" alt="">
                            </div>
                            <div class="teacher-detail">
                                <h4>Sreetilak Sambhand</h4>
                                <p>Instructor</p>
                               
                            </div>
                            </a>
                        </div>
                    </div>
                    <!--Single teacher-->   


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
    			        <p class="counter">36298</p>
    				<span>Students</span>
    			    </div>
    			</div>
    			<div class="col-6 col-md-3 col-lg-2">
    			
    				<div class="sin-counter">
    			        <p class="counter">1417</p>
    				<span>School</span>
    			    </div>
    			</div>
    			<div class="col-6 col-md-3 col-lg-2">
    			
    				<div class="sin-counter">
    			        <p class="counter">16931</p>
    				    <span>Teachers</span>
    			    </div>
    			</div>
    			<div class="col-6 col-md-3 col-lg-2">
    			
    				<div class="sin-counter">
    			        <p class="counter">1022231</p>
    				    <span>Total Visitors</span>
    			    </div>
    			</div>
    			
    		</div>
    	</div>
    </div>

    <!--Popular testimonial area start-->
    <section class="tes-popular bol-bol-bg default-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="area-heading font-red st-two">What they say</h2>
                   
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

<section class="bgbottom-wrappers-home mt-minus"></section>

    
<!--Call to action area start-->
<section class="call-to-action-area">
        <div class="container-fluid ">
             <div class="row justify-content-center">
                   <div class="row col-sm-12 col-lg-10">
               
                   <div class="col-sm-12 col-lg-9">
                     <h4>Book a VOLT demo at your school.</h4>
                   
                 </div>
                 <div class="col-sm-12 col-lg-3 text-right">
                     <a href="<?=base_url();?>/book-a-demo" class="kids-care-btn bg-red">Book a Demo</a>
                 </div>
                        </div>
             </div>
         </div>
</section>
     <!--Call to action area end-->
<script>
$(document).ready(function(){
var largest = 0; //start with 0
$(".sub_n").each(function(){ //loop through each section
   var findHeight = $(this).height(); //find the height
   if(findHeight > largest){ //see if this height is greater than "largest" height
      largest = findHeight; //if it is greater, set largest height to this one 
   }  
});
$(".sub_n").css({"height":largest+"px"});        
});    
</script> 
<?php include('footer.php'); ?>