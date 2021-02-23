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
								        <img class="homebtn" src="https://volt.vivadevops.com/assets/publicassets/assets/images/home.png" alt="">
										</a> 
										<em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject">
								        Subject
										</a> 
										<em class="fa fa-angle-right" style="color:white;"></em> 
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




<section class="choose-class-area " id="voltbglayout">
        <div class="container-fluid custom-container">
         <div class="row">
                <div class="col-xl-12">
                    <h2 class="area-heading st-two font-red">Choose Classes</h2>
                </div>
              
                
            </div>
            <div class="col-md-12 col-xl-12 inner-container">
                <div class=" row">

                  <?php  if (is_array($allclass) && count($allclass) > 0)  { 
                   $i=1; foreach ($allclass as $getclass) { ?> 
                       <div class="col-sm-6 col-xl-2">
                         
                         <?php if($geturlsubject->sub_month==1){ ?>
                          <a href="<?=base_url()?>/months/<?php echo $geturlsubject->slug; ?>/class<?php echo $getclass['class_id'];?>"> 
                            <?php }else{ ?>
                          <a href="<?=base_url()?>/modules/<?php echo $geturlsubject->slug; ?>/class<?php echo $getclass['class_id'];?>"> 
                             
                            <?php } ?>
                        
                            
                            
                            
                        <div class="single-class class-list wow fadeInUp" data-wow-delay=".<?php echo $i;?>s">
                        <?php if(!empty($getclass['c_img'])){ ?>
						<img src="<?=base_url()?>/master/uploads/classimage/<?php echo $getclass['c_img'];?>" alt="">
                        <?php }else{ ?>
                        <img src="<?=base_url()?>/master/uploads/classimage/icon.png">
                        <?php } ?>                                  
                       
                        </div>
                        </a>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                  

                <?php $i++;} }else{    ?>
                <?php } ?>  
                    
                    
                </div>
            </div>
        </div>
      
    </section>


<?php include "footer.php";?>