<?PHP
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url('assets')?>/schoolassets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=base_url('assets')?>/schoolassets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Volt Teacher</title>
    <!--Tachyons style-->
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
  <!-- konpa icon stylesheets  <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css"><link href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css" rel="stylesheet">
  -->
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/schoolassets/css/flag-icon.css">
  <!-- Prism css-->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/schoolassets/css/prism.css">
  <!-- Chartist css -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/schoolassets/css/chartist.css">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/schoolassets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="<?=base_url('assets')?>/schoolassets/css/admin.css">
</head>
<body>
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none">
                    <div class="logo-wrapper"><a href="<?=base_url()?>"><img class="blur-up lazyloaded" src="<?=base_url('assets')?>/bundles/img/logo.png" alt=""></a></div>
                </div>
                <div class="mobile-sidebar">
                    <div class="media-body text-right switch-sm">
                        <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
              
                        
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>

                            
                        <li class="onhover-dropdown">
                            <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="<?=base_url('assets')?>/schoolassets/images/usericon.png" alt="header-user">
                                <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                                <li><a href="<?=base_url();?>/logout"><i data-feather="log-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="<?=base_url()?>"><img class="blur-up lazyloaded" src="https://lite.volt.development.vivadevops.com/assets/bundles/img/logo.png" alt=""></a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <div class="sidebar-user text-center">
                        <div><img class="img-60 rounded-circle lazyloaded blur-up" src="<?=base_url('assets')?>/schoolassets/images/usericon.png" alt="#">
                        </div>
                        <h6 class="mt-3 f-14"><?php echo session('voltAccountName'); ?></h6>
                        
                    </div>
                    <ul class="sidebar-menu">
                        <li><a class="sidebar-header" href="<?=base_url();?>/student"><i data-feather="home"></i><span>Dashboard</span></a></li>
                        <li><a class="sidebar-header" href="<?=base_url();?>/student/profile"><i data-feather="camera"></i><span>Profile</span></a></li>
                        <li><a class="sidebar-header" href="<?=base_url();?>/student/period"><i data-feather="archive"></i><span>My Classes</span></a></li>

                        <li><a class="sidebar-header" href="<?=base_url();?>/student/subscription"><i data-feather="archive"></i><span>My Subscription</span></a></li>
                        <li><a class="sidebar-header" href="<?=base_url();?>/logout"><i data-feather="log-in"></i><span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->


            <div class="page-body">

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3><?php 
                                    date_default_timezone_set("ASIA/Kolkata");
                                    echo date("l")." ".date("d/m/y");?>
                                    <small>Student Dashboard</small>
                                </h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>