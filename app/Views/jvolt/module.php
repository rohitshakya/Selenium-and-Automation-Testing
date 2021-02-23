<?php include "header.php";?>
<!--Breadcrumb area start-->
<div class="text-bread-crumb d-flex align-items-center style-six sc-page-bc">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="row padding-top" style="display:block ;">
					<div class="col-md-12">
						<div class="section_title_style2">
							<div class="breatcome2_content">
								<ul>
									<li>
										<a href="<?=BASE_URL_JR?>">
											<img class="homebtn" src="https://volt.vivadevops.com/assets/publicassets/assets/images/home.png" alt="">
											</a> 

											<em class="fa fa-angle-right" style="color:#ccc;"> </em> 
											<span class="color-ccc">
								        modules
											</span> 

										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Breadcrumb area end-->


	<!--Subject area start-->
	<!--span class="bgcover">



 <div class="wellcome-area-wrappers "></div>
 
</span-->

	<section class="blog-page bgcover" id="voltbglayout1">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="row col-md-12 col-xl-10">
					<div class="order-sm-2 order-md-1 col-md-4 col-xl-3">
						<div class="blog-sidebar">
							<div class="volt-sin-sidebar ">
								<div class="single-news subjbg wow fadeInUp" data-wow-delay=".3s">
									<img class="m-w-m-h-modules-themes" src="<?=MEDIA_UPLOAD_URL."uploads/classimage/".$class['c_img'];?>" alt="">
										<div class="subjbg-det">
											<h4>
												<?=$class['class_name']?>
											</h4>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="order-sm-1 order-md-2 col-md-8 col-xl-9">
							<div class="row">
								<?php foreach($module as $mod){ ?>
									<div class="col-sm-6 col-xl-4 mb-3 wd-50 sbj" data-id="<?=encrypt($class['class_id'])?>" data-mod="<?=encrypt($mod['m_id'])?>">
										<a href="javascript:void(0)">
											<div class="sin-upc-event-two">
												<div class="sub-image p-4" >  
													<img src="<?=MEDIA_UPLOAD_URL."uploads/modulebanner/".$mod['m_img'];?>" style="max-height: 94px;" alt="">
													</div>
													<div class="sin-up-content">
														<h6 class="text-center"><?=$mod['m_name']?></h6>
													</div>
												</div>
											</a>
										</div>

										<?php } ?> 


									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			
				<div class="wellcome-area-wrappers ht-75"></div>
				<script>
 $(".sbj").click(function(){
	 window.location.href = BASE_URL_JR+"/activities/"+$(this).data("id")+"/"+$(this).data("mod");
 })
				</script>
				
				<?php include "footer.php";?>