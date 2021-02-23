<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Viva VOLT">
    <title>Viva - VOLT</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/bundles/')?>/img/favicon.png">
    <!-- === webfont=== -->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"> 
    <!--Font awesome css-->
    <link rel="stylesheet" href="<?=base_url('assets/bundles/')?>/css/font-awesome.min.css">
    <!--Bootstrap-->
    <link href="<?=base_url('assets/bundles/')?>/css/bootstrap.min.css" rel="stylesheet">
     <!--UI css-->
    <link rel="stylesheet" href="<?=base_url('assets/bundles/')?>/css/jquery-ui.css">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/bundles/')?>/css/venobox.css">
    <!--Owl Carousel css-->
    <link href="<?=base_url('assets/bundles/')?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?=base_url('assets/bundles/')?>/css/owl.theme.css" rel="stylesheet">
    <!--Animate css-->
    <link href="<?=base_url('assets/bundles/')?>/css/animate.css" rel="stylesheet">
     <!--Main Stylesheet -->
    <link href="<?=base_url('assets/bundles/')?>/style.css" rel="stylesheet">
    <!--Responsive Stylesheet -->
    <link href="<?=base_url('assets/bundles/')?>/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- === jqyery === -->
    <script src="<?=base_url('assets/bundles/')?>/js/jquery.min.js"></script>
    <script src="<?=base_url('assets/freezeframe.min.js')?>"></script>
    <script src="<?=base_url('assets/publicassets/activity')?>/js/jquery.storage.js"></script>

</head>
<body>
<div class="preloader" style="display:none"></div>
<!--Top bar area start-->  
<!--Main menu area start--> 
<section class="main-menu-area red-grass">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-3 col-xl-2">
                <div class="logo">
                    <a href="<?=base_url()?>">
                        <img src="<?=base_url('assets/bundles/')?>/img/logo.png" alt="">
                    </a>
                </div>
                
                
                
                
                
                
                <div class="accordion-wrapper hide-sm-up">
                    <a href="#" class="mobile-open"><i class="fa fa-bars" ></i></a> 
                    <!--Mobile Menu start-->
                    <ul id="mobilemenu" class="accordion">
                        <li class="mob-logo"><a href="<?=base_url()?>">
                        <img src="<?=base_url('assets/bundles/')?>/img/logo.png" alt="">
                        </a>
                        </li>
                        <li ><a class="closeme" href="javascript:void(0)"><i class="fa fa-times" ></i></a>
                        </li>
                         <li>
                        <div class="link font-per"><a href="<?=base_url()?>/subject">Subjects</a></div>
                        </li> 
                        <li>
                        <div class="link font-per"><a href="<?=base_url()?>/subscription">Buy a Course</a></div>
                        </li> 
                        <li>
                        <div class="link font-per"><a href="<?=base_url();?>/book-a-demo">Book a Demo</a></div>
                        </li>  
                          

                        <?php if(session('voltAccountUserName')){ ?>  
                           <?php if(session('voltAccountType')=='admin'){ 
                            $dashbard = '/school';
                            $notification = '/school/notification';
                            $setting = '/school/settings';
                            $myorder ='';
                            }else if(session('voltAccountType')=='teacher'){
                            $dashbard = '/teacher';
                            $notification = '/teacher/notification';
                            $setting = '/teacher/settings';
                            $myorder ='';
                            }else{
                            $dashbard = '/student';
                            $notification = '/student/notification';
                            $setting = '/student/settings';
                            $myorder = '/student/subscription/myorder';
                            } ?>
                        <li>        
                        <div class="link font-red">Hi <?php echo session('voltAccountName'); ?><i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu font-red">
                        <li><a href="<?=base_url()?><?=$dashbard;?>">Dashboard</a></li>
                             <li><a href="<?=base_url()?><?=$notification;?>">Notification</a></li>
                             
                            
                        <?php if($myorder){ ?>
                        <li><a href="<?php echo base_url() ?><?=$myorder;?>" class="menu-color">My Order</a></li>    
                        <?php } ?>
                        <li><a href="<?=base_url()?>/logout">Logout</a></li>
                        </ul>
                        </li>
                        <?php }else{ ?>
                        <li>
                        <div class="link font-per"><a href="<?=base_url()?>/login"> Login</a></div>
                        </li>
                        <?php } ?>   
                      </ul>
                    <!--Mobile Menu end-->
                </div>
            </div>
            
            <!--Main menu start-->
            <div class="col-md-9 col-lg-9 col-xl-8">
                <div class="mainmenu float-right style-4">
                   <ul id="navigation">
                       <li class="fc-sky hav-sub">  <i class="fa  fa-cart-plus"></i>  <a href="<?=base_url()?>/subscription">Buy a Course</a></li>
                       
                        <li class="fc-sky hav-sub">
                          <i class="fa fa-book"></i> 
                            <a href="<?=base_url()?>/subject">Subjects </a></li>
                         <li class="fc-sky hav-sub">
                        <i class="fas fa fa-barcode"></i>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#CodeMVolt" data-whatever="@mdo"><span class="hide-sm">Enter Code</span></a>
                        </li> 
                        <?php if(session('voltAccountUserName')){ ?>  
                           <?php if(session('voltAccountType')=='admin'){ 
                            $dashbard = '/school';
                            $notification = '/school/notification';
                            $setting = '/school/settings';
                            $myorder = '';
                            }else if(session('voltAccountType')=='teacher'){
                            $dashbard = '/teacher';
                            $notification = '/teacher/notification';
                            $setting = '/teacher/settings';
                            $myorder = '';
                            }else{
                            $dashbard = '/student';
                            $notification = '/student/notification';
                            $setting = '/student/settings';
                            $myorder = '/student/subscription/myorder';
                            } ?>  
                        <li class="fc-orange">
                             <i class="fas fa fa-user"></i>
                            <a href="javascript:void(0)">Hi <?php echo session('voltAccountName'); ?></a>
                           <ul class="sub-menu">
                                <li><a href="<?=base_url()?><?=$dashbard;?>"><span class="hide-sm">Dashboard</span></a></li>
                                <li><a href="<?=base_url()?><?=$notification;?>"><span class="hide-sm">Notification</span></a></li>
                                <?php if($myorder){ ?>
                                <li><a href="<?php echo base_url() ?><?=$myorder;?>" class="menu-color">My Order</a></li>    
                                <?php } ?>
                                <li><a href="<?=base_url()?>/logout" class="menu-color">Logout</a></li>
                              
                            </ul>
                        </li>
                        <?php }else{ ?>
                        <li class="fc-sky hav-sub">
                        <i class="fa fa-user"></i>
                        <a href="#myModal" class="trigger-btn" data-toggle="modal"><span class="hide-sm">Login</span></a>
                        </li>
                         <?php } ?>   
                       
                      
                    </ul>
               </div>
            </div>
            
            
            
            <div class="col-lg-3 col-xl-2">
                <div class="serch-wrapper float-left hide-sm">
                 
                    <div class="top-contact-btn align-middle">
                     <a href="<?=base_url();?>/book-a-demo"><span class="start-learn">Book a Demo</span></a>
                    </div>
                </div>
            </div>
            <!--Main menu end-->
          
        </div>
    </div>
</section>
    
    

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="<?=MEDIA_UPLOAD_URL;?>uploads/users/userlogin.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Member Login</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<div>
                  <div class="form-group" id="logError">
                   
                  </div>
                  <div class="form-group" id="logsuccess">
                   
                  </div>
                    
                    
					<div class="form-group">
						<input type="text" class="form-control"  id="input_uname" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="input_pwd" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" id="input_submit">Login</button>
					</div>
				</div>
                <div class="d-flex justify-content-center">
				<a href="forgot-password">Forgot Password?</a>
			</div>
			</div>
            
			<div class="modal-footer">
				<a href="registration">Register Here</a>
			</div>
		</div>
	</div>
</div> 
    
    
    
<!-- End login Modal --> 
        
<!--Start Code Modal-->

<div class="modal fade" id="CodeMVolt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">  
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Code HERE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class=" contact-page-form modal-body">
          <div class="form-group">
            <label for="recipient-name" class="w100 col-form-label">Enter Code</label>
            <input type="text"  id="username" required>
          </div>

      <div class="modal-footer">
      <div class="col-md-12">
        <button type="button" class="kids-care-btn bgc-orange ">Submit</button>
        <?php /* <button type="button" class="kids-care-btn  bg-green ">signUp</button> */ ?>
        <a href="javascript:;" class="float-md-right">Request Code?</a>
    </div>
    </div>        
    </div>
      </div>
    </div>
  </div>
<!--End Code Modal-->
    
  