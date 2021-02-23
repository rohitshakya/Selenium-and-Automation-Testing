<?php include(APPPATH."Views/publicview/header.php");?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cartstyle.css'); ?>">
<!--Breadcrumb area start-->
<!--Breadcrumb area end-->
<section class="blog-page" id="voltbglayout1" style="margin-bottom: 200px;">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
    			<span class="toptitle">
    				Vivavolt <span> / Payment / Success</span>
    			</span>
    			<hr class="toplinner">
    		</div>
    	</div>

       <div class="row justify-content-center">

       	<div class="col-md-6">
       		
			<div class="row steprow">
				<div class="col-md-12 steparea">
					<span class="steptitle text-success">Your order has been placed.</span>
				</div>
				<div class="col-md-12" id="informationarea" style="display: block;">
					<div class="row">
						<div class="col-md-12">
							<p style="font-size: 18px; font-weight: bold; ">Congratulations!</p>
							<p>Now you can access premium content of purchased package.</p>
							<p>Your order details has been sent to your billing email id.</p>
							<br>
							<p style="font-weight: bold;">ORDER ID : <span style="color: #d86838;"><?php echo  ORD_PREFIX . session('orderid'); ?></span></p>
						</div>

						<div class="col-md-12">
							<a href="<?php echo base_url('subscription'); ?>" id="continuebtn" style="margin: 20px 0 0 0; width: 150px;">Buy A Course</a>
						</div>


					</div>
				</div>
			</div>

		</div>
            </div>
            

        </div>
    </section>
<!--Testimonial one area end-->
<?php include(APPPATH."Views/publicview/footer.php");?>