<?php include "header.php";?>

<!--Breadcrumb start-->
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
										<a href="<?=base_url()?>">
								        <img class="homebtn" src="<?=base_url('assets/bundles/')?>/img/home.png" alt="">
										</a> 
                                       
										<em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc">Subject</span> 
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
<!--Breadcrumb end-->

<!--Subject list start-->
<section class="choose-class-area " id="voltbglayout">
    <div class="container-fluid custom-container">
       
        <div class="row">
            <div class="col-xl-12">
                <h2 class="area-heading st-two font-red">Choose Subject</h2>
            </div>    
        </div>
        
         
        <div class="inner-container">
            <div class=" row">
            <?php  if (is_array($subject) && count($subject) > 0)  { 
                $i=1; foreach ($subject as $getsubject) { ?> 
                    <!--Single class start-->
                    <div class="col-sm-6 col-xl-2">
                        
                        <?php if($getsubject['sub_coming']==1){ ?>
                        <a href="<?=base_url()?>/classes/<?=$getsubject['slug']?>">
                        <?php }else{ ?>
                        <a href="javascript:void(0)">
                        <?php } ?>
                       
                              
                        <div class="single-class subject-list wow fadeInUp" data-wow-delay=".<?php echo $i;?>s">
                             <?php if($getsubject['sub_coming']==1){ ?>
                        <?php }else{ ?>
                        <div class="coming">
                                <p>Coming Soon</p>
                            </div>
                        <?php } ?>
                        <?php if(!empty($getsubject['sub_cover'])){ ?>
						<img src="<?=base_url()?>/master/uploads/subject/<?php echo $getsubject['sub_cover'];?>" alt="">
                        <?php }else{ ?>
                        <img src="<?=base_url()?>/master/uploads/subject/icon.png">
                        <?php } ?>                                    
                            <div class="volt-intro">
                                <div class="intro-center">
                                    <h3><?=$getsubject['sub_name']?></h3>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                <?php $i++;} }else{    ?>
                <?php } ?>  
                </div>
        </div>
    </div>
</section>
 <!--Subject list start-->

<?php include "footer.php";?>