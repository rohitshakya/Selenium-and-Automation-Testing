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
										<a href="<?=base_url()?>">
								     	  <img class="homebtn" src="<?=base_url('assets/bundles/')?>/img/home.png" alt="">
										</a> 
										<em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <a href="<?=base_url()?>/subject">
								        Subject
										</a> 
										<em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"><?php echo $geturlsubject->sub_name; ?></span> 
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



<!--Start Class List-->
<section class="choose-class-area default-bg" id="">
        <div class="container-fluid custom-container">
         <div class="row">
                <div class="col-xl-12">
                    <h2 class="area-heading st-two font-red">Choose Class</h2>
                </div>
         </div>
              <div class=" row justify-content-center">
         <div class="col-md-12 col-xl-10 inner-container">
                <div class=" row justify-content-center">
                    <?php  if (is_array($allclass) && count($allclass) > 0)  { 
                   $i=1; foreach ($allclass as $getclass) { ?> 
                       <div class="col-sm-6 col-xl-2">
                         <?php if($geturlsubject->sub_month==1){ ?>
                         <a href="<?=base_url()?>/modules/<?php echo $geturlsubject->slug; ?>/class<?php echo $getclass['class_id'];?>/<?php echo $cmonths;?>"> 
                         <?php }else{ ?>
                          <a href="<?=base_url()?>/modules/<?php echo $geturlsubject->slug; ?>/class<?php echo $getclass['class_id'];?>"> 
                         <?php } ?>
                        <div class="single-class class-list wow fadeInUp" data-wow-delay=".<?php echo $i;?>s">
                        <?php
                        $checkClass = $db->query("SELECT * FROM `mastar_class` WHERE `class_id`='".$getclass['class_id']."' " )->getRow();  
                                                           
                        if(!empty($checkClass->c_img)){ ?>
                        <img src="<?=MEDIA_UPLOAD_URL;?>uploads/classimage/<?php echo $checkClass->c_img;?>" alt="" onmouseover="this.src='<?=MEDIA_UPLOAD_URL;?>uploads/classimage/<?php echo $checkClass->class_gif;?>'" onmouseout="this.src='<?=MEDIA_UPLOAD_URL;?>uploads/classimage/<?php echo $checkClass->c_img;?>'">   
                            
                  
                        <?php }else{ ?>
                        <img src="<?=MEDIA_UPLOAD_URL;?>uploads/classimage/icon.png">
                        <?php } ?>                                  
                       
                        </div>
                        </a>
                       </div>
                <?php $i++;} }else{    ?>
                           
                       <h2 class="text-center">Data not available yet</h2>
                <?php } ?>  
                </div>
           </div>
                 </div>
        </div>
    </section>
<!--Start Class List-->
<section class="bgbottom-wrappers"></section>
<?php include "footer.php";?>