<?php include('header.php') ?>
<style type="text/css">
.joinsec {
    width: 100%;
    height: 250px;
    background-size: cover;
    position: relative;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
}

.joinsec::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: -1;
}

.jointitle {
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    color: #ffffff;
    text-transform: uppercase;
}

@media (max-width: 767px) {
    .joinsec {
        height: 100px;
    }

    .jointitle {
        font-size: 20px;
    }
}
.home-img{
    width: 70%;
    margin: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
<!-- SLIDER  AREA -->
<div class="main-slider-area" id="home">
    <div class="container-fluid">
        <div class="row">
            <div class="em-nivo-slider-wrapper kc-elm kc-css-242493">
                <div id="mainSlider" class="nivoSlider em-slider-image">
                    <img src="<?=base_url('assets/publicassets/')?>/assets/images/slider/bg_home.png" alt=""
                        title="#htmlcaption1_30" />
                    <img src="<?=base_url('assets/publicassets/')?>/assets/images/slider/bg_home.png" alt=""
                        title="#htmlcaption1_28" />
                    <img src="<?=base_url('assets/publicassets/')?>/assets/images/slider/bg_home.png" alt=""
                        title="#htmlcaption1_26" />
                </div>


                <!-- em_slider style-1 start -->
                <div id="htmlcaption1_30" class="nivo-html-caption em-slider-content-nivo">
                    <div class="em_slider_inner container  text-left">

                        <!--slider title 2 -->
                        <div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">
                            <h1 class="em-slider-sub-titles">Discover</h1>
                        </div>
                        <!--slider title 3 -->
                        <div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">
                            <h1 class="em-slider-sub-titles">the joy of learning</h1>
                        </div>
                        <!--slider slde image -->
                        <div class="em_slider_single_img wow bounceInRight" data-wow-duration="4s" data-wow-delay="1s">
                            <img src="<?=base_url('assets/publicassets/')?>/assets/images/slider/slider_2.png" alt=""
                                class="img-slider-1" />
                        </div>

                    </div>
                </div>
                <!-- end slider one -->

                <!-- slider two start -->
                <div id="htmlcaption1_28" class="nivo-html-caption em-slider-content-nivo">
                    <div class="em_slider_inner container  text-right">
                        <!--slider title 2 -->
                        <div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">
                            <h1 class="em-slider-sub-titles">Technology that suits</h1>
                        </div>
                        <!--slider title 3 -->
                        <div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">
                            <h1 class="em-slider-sub-titles">your child's learning style</h1>
                        </div>
                        <!--slider slde image -->
                        <div class="em_slider_single_img wow bounceInLeft" data-wow-duration="3s" data-wow-delay="1s">
                            <img class="img-slider-2"
                                src="<?=base_url('assets/publicassets/')?>/assets/images/slider/slider_1.png" alt="" />
                        </div>

                    </div>
                </div>


                <div id="htmlcaption1_26" class="nivo-html-caption em-slider-content-nivo">
                    <div class="em_slider_inner container  text-right">
                        <!--slider title 2 -->
                        <div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">
                            <h1 class="em-slider-sub-titles">Learn with rich media</h1>
                        </div>
                        <!--slider title 3 -->
                        <div class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0s">
                            <h1 class="em-slider-sub-titles"> and interactive content</h1>
                        </div>
                        <div class="em_slider_single_vid wow bounceInLeft" data-wow-duration="3s" data-wow-delay="1s">
                            <div class="videos_slider">
                                <video class="width55vh" controls>
                                    <source src="assets/publicassets/assets/images/mov_bbb.mp4" type="video/mp4">
                                    <source src="mov_bbb.ogg" type="video/ogg">
                                    Your browser does not support HTML5 video.
                                </video>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- <div class="bg-shape2"></div>
	<div class="bg-shape3"></div> -->

<div class="feature_area feature-style-two" id="about">
    <div class="container">
        
       <div class="row">
           <div class="col-md-6">
				
               <div class="image-home-sec">
                    <img class="home-img" src="<?php echo base_url('assets/publicassets/assets/images/home/home_1.png') ?>" alt="insert image">
                </div>
           </div>
           <div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="single_feature">
								
								<div class="feature_content_wrap">
									<div class="feature_content_inner">
										
										<div class="feature_content">
											<h2>Free book</h2>
											<p>Assess yourself and track your progres </p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="single_feature feature2">
								<div class="feature_content_wrap">
									<div class="feature_content_inner">
										<div class="feature_content">
											<h2>Math teacher</h2>
											<p>Interactive and intelligent learning that understands your learning style </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
              </div>	
         </div> 
              
    </div>
</div>



<div class="ebook_area viva-section viva-section bg-viva-pink">
    <div class="container">
         <div class="row ">
				
				<div class="col-md-6">
					<div class="section_title">
						<div class="section_title_content">
							<div class="section_title_heading">
							
								    <h2>Learn with video lectures,</h2>
								<h2> animations and games</h2>
							</div>
							<div class="section_title_desc about-text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim is nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo uat. Duis aute irure dolor in reprehenderit</p>
							</div>
							<div class="section_title_btn">
							         <a class="link_button" data-toggle="modal" data-target="#modalLRForm">Start Learning</a>
							</div>
						</div>
					</div>
				</div>
             <div class="col-md-6">
					<div class="about_thumb">
					    <img class="home-img" src="/assets/publicassets/assets/images/home/home_3.png" alt="insert image">
					</div>
				</div>
			</div>
    </div>
</div>

<div class="video_area viva-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image-home-sec">
                    <img class="home-img" src="<?=base_url('assets/publicassets/')?>assets/images/home/home_2.png" alt="insert image">
                </div>
            </div>
            
            
            	<div class="col-md-6">
					<div class="section_title">
						<div class="section_title_content">
							<div class="section_title_heading">
							
								    <h2>Classroom, playground, on the commute or at home, VOLT powers the smart student</h2>
							</div>
							<div class="section_title_desc about-text">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim is nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo uat. Duis aute irure dolor in reprehenderit</p>
							</div>
							<div class="section_title_btn">
							         <a class="link_button" data-toggle="modal" data-target="#modalLRForm">Start Learning</a>
							</div>
						</div>
					</div>
				</div>
            
            
        
        </div>
    </div>
</div>

<?php include('footer.php'); ?>