<?php include "header.php";?>
<link href="https://volt.vivadevops.com/assets/publicassets/circle.css" rel="stylesheet" type="text/css">
	<style>
.modules img{
      width: 60%;
}
/* Switch */
.switch {
	position: relative;
	display: inline-block;
	width: 42px;
	height: 22px;
	margin-top: 6px;
	margin-left: 10px;
}
.switch input {
	opacity: 0;
	width: 0;
	height: 0;
}
.slider {
	position: absolute;
	cursor: pointer;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #ccc;
	-webkit-transition: .4s;
	transition: .4s;
}
.slider:before {
	position: absolute;
	content: "";
	height: 15px;
	width: 15px;
	left: 4px;
	bottom: 4px;
	background-color: white;
	-webkit-transition: .4s;
	transition: .4s;
}
input:checked+.slider {
	background-color: #2196F3;
}
input:focus+.slider {
	box-shadow: 0 0 1px #2196F3;
}
input:checked+.slider:before {
	-webkit-transform: translateX(18px);
	-ms-transform: translateX(18px);
	transform: translateX(18px);
}
/* Rounded sliders */
.slider.round {
	border-radius: 16px;
}
.slider.round:before {
	border-radius: 50%;
}
.progrssgraphs {
    font-size: 17px;
    text-align: right;
    width: 75%;
    float: left;
    line-height: 30px;
}  
	</style>
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
											<a href="<?=base_url()?>/jr">
												<img class="homebtn" src="https://volt.vivadevops.com/assets/publicassets/assets/images/home.png" alt="">
												</a> 
												<em class="fa fa-angle-right" style="color:white;"> </em>
												<a href="<?=BASE_URL_JR?>/modules/<?=encrypt($classID)?>">
								        modules
												</a> 

												<em class="fa fa-angle-right" style="color:#ccc;"> </em>
												<span class="color-ccc"> Activity </span> 
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
		<section class="blog-page bgcover" id="voltbglayout1">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="row col-md-12 col-xl-10">
						<div class="order-sm-2 order-md-1 col-md-4 col-xl-3">
							<div class="blog-sidebar">
								<div class="volt-sin-sidebar ">
									<div class="single-news subjbg wow fadeInUp" data-wow-delay=".3s">
										<img class="m-w-m-h-modules-themes" src="<?=MEDIA_UPLOAD_URL."uploads/modulebanner/".$moduleName['m_img'];?>" alt="">
											<div class="subjbg-det">
												<h4>
													<?=$moduleName['m_name']?>
												</h4>
											</div>
										</div>
									</div>
									<?php if(!empty($module)){ ?>
									<div class="sin-sidebar bradius10 border1">
										<ul class="act-post border1 padding15" style="background-color: #e9f6fd;">
											<?php foreach($module as $mod){?>
											<li>
												<a href="../../activities/<?=encrypt($classID)?>/<?=encrypt($mod['m_id'])?>" class="fsize-18">
													<?=$mod['m_name']?>
												</a>
											</li>
											<?php } ?>  
										</ul>
									</div>
									<?php } ?>
								</div>
							</div>
							<div class="order-sm-1 order-md-2 col-md-8 col-xl-9">
								<div class="row">
									<?php foreach($activity as $act){
				   $linkURl;
					$withId = "classId".$classID.'&moId'.$modID.'&cId'.$act['id'];
				   
					   $linkURl = base_url('jr/play/'.encrypt(strtolower($act['type'])).'/'.encrypt($withId));
				   
				   ?>
									
									<div class="col-sm-6 col-xl-3 mb-3 wd-50 sbj">
										<a href="<?=$linkURl?>">
											<div class="sin-upc-event-two">
												<div class="sub-image p-4">  
													<img src="<?=MEDIA_UPLOAD_URL."uploads/chapterbanner/".$act['chap_image'];?>" style="max-height: 94px;" alt="">
													</div>
													<div class="sin-up-content" style="background-color: #a92840;">
														<h6 class="text-center" style="color: #fff;"><?=$act['chapT_name']?></h6>
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

				</script>
				<?php include "footer.php";?>
