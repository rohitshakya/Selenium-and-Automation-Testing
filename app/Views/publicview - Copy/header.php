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
    <script src="<?=base_url('assets/publicassets/activity')?>/js/jquery.storage.js"></script>

</head>
<body>
<div class="preloader" style="display:none"></div>
<!--Top bar area start-->  
<header class="top-bar ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-xl-5 d-sm-none  d-md-block">
               <?php /* <span class="first-span"><i class="fa fa-map-marker"></i> Viva volt </span>*/?>
               <?php /* <span><i class="fa fa-phone"></i> +1 000 123 456; +91 123 456 7890 </span>*/?>
            </div>
            <div class="col-md-12 col-lg-7 col-xl-7">
            <div class="float-right">  
            <?php if(session('voltAccountUserName')){ ?>
                <div class=" Dashboard-area">
                    <a href="javascript:void(0)"><i class="fa fa-user"></i><span class="hide-sm">Dashbord</span></a>
                </div>  
                <div class=" Dashboard-area">
                    <a href="javascript:void(0)"><i class="fa fa-bell"></i><span class="hide-sm">Notification</span></a>
                </div>  
                <div class=" Dashboard-area">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#CodeMVolt" data-whatever="@mdo"><i class="fas fa fa-barcode"></i><span class="hide-sm">Enter Code</span></a>
                </div>  
                
               <div class="account-area">
                    <a href="javascript:void(0)"><i class="fa fa-user"></i><span class="hide-sm">My Account</span></a>
                    <div class="account-drop">
                        <div class="cart-bottom">
                            <div class="account-bar border-button-1">
                                <p><a href="javascript:void(0)" class="menu-color">Settings</a></p>
                            </div>
                            <div class="account-bar">
                               <p><a href="<?=base_url()?>/logout" class="menu-color">Logout</a></p>
                            </div>
                        </div>
                    </div>
                </div>   
                
                
            <?php }else{ ?>
               
            
                <div class=" account-area-2">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#LoginMVolt" data-whatever="@mdo"><i class="fa fa-user"></i><span class="hide-sm">Login</span></a>
                </div>
                <div class=" account-area-2">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#CodeMVolt" data-whatever="@mdo"><i class="fas fa fa-barcode"></i><span class="hide-sm">Enter Code</span></a>
                 </div>
             <?php } ?>
                </div>  
            </div>   
         </div>
    </div>
</header>
<!--Top bar area end--> 
  <!--Main menu area start--> 
<section class="main-menu-area red-grass">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-2">
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
                        <div class="link font-per"><a href="<?=base_url()?>/subscription">Buy a Course</a></div>
                        </li>  
                         <li>
                        <div class="link font-per"><a href="<?=base_url()?>/subject">Subject</a></div>
                        </li> 
                          
                        <li>
                        <div class="link font-per"><a href="#">For Business</a></div>
                        </li>  
                          
                        <li>
                        <?php if(session('voltAccountUserName')){ ?>    
                       <div class="link font-red">My Account<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu font-red">
                            <li><a href="javascript:void(0)">Settings</a></li>
                              <li><a href="<?=base_url()?>/logout">Logout</a></li>
                        </ul>
                        
                        <?php }else{ ?>
                        <li>
                        <div class="link font-per"><a href="<?=base_url()?>/login"> Sign in</a></div>
                        </li>
                        <?php } ?>   
                      </ul>
                    <!--Mobile Menu end-->
              
                </div>
            </div>
            <!--Main menu start-->
         
            <div class="col-md-9 col-lg-9 col-xl-10">
                <div class="mainmenu float-right">
                   <ul id="navigation">
                    
                   
                       <li class="fc-sky hav-sub"><a href="<?=base_url()?>/subscription">Buy a Course</a></li>
                       <li class="fc-sky hav-sub"><a href="<?=base_url()?>/subject">Subject </a></li>
                       
                       <li class="fc-sky hav-sub">
                        <div class=" align-middle">
                         <a href="javascript:void(0)"><span class="start-learn">For Business </span></a>
                        </div> 
                       </li>
                       
                     
                       
                    </ul>
               </div>
            </div>
            <!--Main menu end-->
          
        </div>
    </div>
</section>
    
    
    
<!-- Start login Modal -->
<div class="modal fade" id="LoginMVolt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LOGIN HERE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      <div class=" contact-page-form modal-body">
        <div class="form-group">
            <div class="toggle-form alert col-xl-12" id="logError">
               </div>
            </div>
          <div class="form-group">
            <label for="recipient-name" class="w100 col-form-label">USERNAME</label>
            <input type="text" id="input_uname" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="w100 col-form-label">PASSWORD</label>
            <input type="password"  id="input_pwd" required>
          </div>
      
 
      <div class="modal-footer">
      <div class="col-md-12">
        <button type="submit" class="kids-care-btn bgc-orange" id="input_submit">Submit</button>
        <?php /* <button type="button" class="kids-care-btn  bg-green ">signUp</button> */ ?>
        <a href="javascript:;" class="float-md-right">Forgot  password?</a>
    </div>
    </div>
  
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
    
  