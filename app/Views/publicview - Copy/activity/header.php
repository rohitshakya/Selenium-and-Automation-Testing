<?php #include("function.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>VIVA Volt Activity</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?= base_url('assets/publicassets/activity/'); ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/publicassets/activity/'); ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/publicassets/activity/'); ?>lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/publicassets/activity/'); ?>css/style.css" rel="stylesheet">
  <link href="<?= base_url('assets/publicassets/activity/'); ?>css/custom.css" rel="stylesheet">
  <link href="<?= base_url('assets/publicassets/activity/'); ?>css/animate.css" rel="stylesheet">
  <link href="<?= base_url('assets/publicassets/activity/'); ?>css/slider.css" rel="stylesheet">
  <link href="<?= base_url('assets/publicassets/activity/'); ?>css/masterstyle.css" rel="stylesheet">
  <script>
    if (typeof module === 'object') {
      window.module = module;
      module = undefined;
    }
  </script>
  <script src="<?= base_url('assets/publicassets/activity/'); ?>lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/publicassets/activity/'); ?>lib/jqueryui/1.12.1/jquery-ui.js"></script>
  <script src="<?= base_url('assets/publicassets/activity/'); ?>js/jquery.storage.js"></script>
  <script>
    if (window.module) module = window.module;
  </script>

  <script type="text/javascript">
    function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "no";
    }
  </script>

<!-- JavaScript Libraries -->
  <script src="<?= base_url('assets/publicassets/activity/'); ?>lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url('assets/publicassets/activity/'); ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>	
		var base_url_assesment = "<?=base_url('assesment')?>";
		var base_url_practice = "<?=base_url('practice')?>";
	</script> 
</head>

<body> 
  <header id="header" class="header header-color_home">
    <div class="container clearfix" style="height:calc(8vh + 40px);">
        <div class="row">
            <div class="col-md-3">
                  <a href="<?=base_url()?>/"> <img src="<?= base_url('assets/publicassets/activity/'); ?>img/logo2.png" class="coverLogo" /></a>
            </div>
              <div class="col-md-6">
                    <!-- <h4 class="box-title"><?php echo $topic_name; ?></h4> -->
              </div>
              <div class="col-md-3">
                      <?php $pageurl = $this->input->get('c').'/'.$this->input->get('subid').'/'.$this->input->get('catid').'/'.$this->input->get('sub').'/'.$this->input->get('cat'); ?>
               <!--   <a href="<?= base_url('seriestopics/' .$pageurl) ?>" class="go-back"><em class="fa fa-backward"></em> BACK</a> -->
            </div>
        </div>
    </div>
  </header>