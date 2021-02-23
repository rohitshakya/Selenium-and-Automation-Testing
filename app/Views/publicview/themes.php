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
										<em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject">
								        Subject
										</a> 
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject/<?php echo $geturlsubject->slug; ?>">
								        <?php echo $geturlsubject->sub_name; ?>
										</a> 
                                        
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/months/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>">
								        <?php echo $geturlclass->class_name; ?>
										</a> 
                                        
                                         
                                        <?php if($month){
                                        $Mdata =array_search($month, $_SESSION['finalTermsSession']);
                                        if($Mdata==11){
                                        $Mview = 'Assessment 1';
                                        }else if($Mdata==12){
                                        $Mview = 'Assessment 2';
                                        }else{
                                        $Mview = 'M '.$Mdata; 
                                        }
                                        ?>
                                        <?php }else {
                                        $Mview ="";
                                         } ?>       
                                      
                                        <?php if($Mview){ ?>
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/months/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>/<?php echo base64_encode($month);?>">
								        <?php echo $Mview;?>
										</a> 
                                        <?php }else{ ?>
                                        <em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"><?php echo $geturlclass->class_name; ?></span>
                                        <?php } ?>
                                    
                                       
										<em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"><?php echo $getmodules->m_name; ?></span> 
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


<section class="viva-middle-button-area default-bg">
	<div class="container-fluid">
		   <div class="row justify-content-center">
              <div class="row col-md-12 col-xl-10">
		         <div class="col-md-12 col-xl-4 image-sec-v1">
                     <?php if(!empty($getmodules->m_img)){ ?>
                                <img class="m-w-m-h-modules-themes" src="<?=MEDIA_UPLOAD_URL?>/uploads/modulebanner/<?php echo $getmodules->m_img;?>" alt="">
                                <?php }else{ ?>
                                <img class="m-w-m-h-modules-themes" src="<?=MEDIA_UPLOAD_URL?>/uploads/noimage.png">
                                <?php } ?> 
                  </div>
				  <div class="row col-md-12 col-xl-8 text-section-v1" style=" display: flex;justify-content: center;align-items: center;">
                    <div class="col-md-12 col-xl-12"> 
					<h1 class="font-red mt-4 mb-1 sub-name-v1"><?php echo $getmodules->m_name;?></h1>
                 
                      </div>
                  
				</div>
            </div>
		</div> 
	</div>
</section>

<header class="middle-bar ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12  mx-auto d-block">
             <!--Search box for Mobile Small devices (landscape phones, less than 768px)-->
               <h3>Themes</h3> 
               </div>
        </div>
    </div>
</header>

<section class="blog-page default-bg" id="">
    <div class="container-fluid">
       <div class="row justify-content-center">
               <div class="row col-md-12 col-xl-10">

                       <?php  if (is_array($themeList) && count($themeList) > 0)  { 
                        $i=1; foreach ($themeList as $getthemeData) { ?> 
                        <div class="col-md-4 col-md-6 col-xl-3 no-padding">
                            
                          
                            <?php if($month){ ?> 
                            <a href="<?=base_url()?>/chapter/<?php echo $geturlsubject->slug;?>/class<?php echo $geturlclass->class_id; ?>/<?php echo $uri->getSegment(4);?>/<?php echo $getmodules->slug.'/'.$getthemeData['slug'];?>">
                             <?php }else{ ?>
                            <a href="<?=base_url()?>/chapter/<?php echo $geturlsubject->slug;?>/class<?php echo $geturlclass->class_id; ?>/<?php echo $getmodules->slug.'/'.$getthemeData['slug'];?>">
                            <?php } ?>
                                                                     
                          
                                
                            <div class="bgsingle-data  single-news themes bgdata wow fadeInUp" data-wow-delay=".3s">
                              <?php if(!empty($getthemeData['series_img'])){ ?>
                                <img src="<?=MEDIA_UPLOAD_URL?>/uploads/themebanner/<?php echo $getthemeData['series_img'];?>">
								<?php }else{ ?> 
                                <img src="<?=MEDIA_UPLOAD_URL?>/uploads/noimage.png">
                                <?php } ?>
                                <div class="themes-det">
                                <h4><?php echo $getthemeData['series_name'];?></h4>
                                </div>
                            </div>
                            </a>
                        </div>
                        
                       <?php $i++;} }else{    ?>
                        <div class="col-md-12">
                            <h2 class="font-sky text-center" style="padding: 50px 0;"> There are no themes yet</h2>
                        </div>
                        <?php } ?>  
                     
           
           </div>
           
           
           
            </div>
        </div>
    </section>
<section class="bgbottom-wrappers"></section>

<?php include "footer.php";?>