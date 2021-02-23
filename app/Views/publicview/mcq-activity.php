<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=2">

  <?php
		echo link_tag('assets/publicassets/assets/css/bootstrap.min.css');
		echo link_tag('assets/publicassets/assets/css/font-awesome.min.css');	
    echo link_tag('assets/publicassets/style-activity2.css');
    echo link_tag('assets/publicassets/animate.css'); ?>
	
</head>


<body class="kids-bg">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div class="container">
          <div class="center-box slideInLeft animated">              
            <div class="q-area">
              <div class="q-text">
              <h1 class="bounceIn animated"><?php if(empty($allqns[0]->question)){ echo 'Data not found'; }else{ echo $allqns[0]->question;} ?></h1>
              </div>
              <?php if(!empty($allqns[0])){ ?>
              <div class="optn-area">               
              <?php foreach(array_filter(json_decode($allqns[0]->mcq)) as $mcq_opt){ ?>
              <div class="col-md-6">
                  <a href="#">
                    <div class="optn-box zoomIn animated">
                    <?= $mcq_opt; ?>
                  </div>
                </a>
                </div>
                <?php } ?>    
                
              <?php foreach(array_filter(json_decode($allqns[0]->myans)) as $mcq_opt){ ?>
              <div class="col-md-6">
                  <a href="#">
                    <div class="optn-box zoomIn animated">
                    <?= $mcq_opt; ?>
                  </div>
                </a>
                </div>
                <?php } ?>   

              </div>
              <?php } ?>  
            </div>
           
          </div>

          <div class="tool-area">
          <?php if(!empty($allqns[0])){ ?>
          <div class="col-md-5">
            <div class="btn-nxt">
              <a href="#"><img src="<?=base_url('assets/publicassets/')?>assets/images/nxt-btn.png"></a>
            </div>
          </div>
          <?php } ?>  
          <div class="col-md-2"></div>
          <div class="col-md-5">
            <div class="btn-nxt">
              <a href="#"><img src="<?=base_url('assets/publicassets/')?>assets/images/help.png"></a>
            </div>
            </div>
          </div>

          </div>

        </div>

	
	</body>

</html>