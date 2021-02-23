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
                                        <a href="<?=base_url()?>/subject/<?php echo $geturlsubject->slug; ?>">
								        <?php echo $geturlsubject->sub_name; ?>
										</a> 
                                        
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>/">
								        <?php echo $geturlclass->class_name; ?>
										</a> 
                                       
									
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>/<?php echo $getmodules->slug; ?>">
								        <?php echo $getmodules->m_name; ?>
										</a> 
                                        
                                        <em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"><?php echo $gettheme->series_name; ?></span> 
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
<section class="blog-page" id="voltbglayout1">
    <div class="container-fluid">
       <div class="row justify-content-center">
           
               <div class="row col-md-12 col-xl-12">
           
           
                    <div class="order-sm-2 order-md-1 col-md-4 col-xl-3">
                       <div class="blog-sidebar">
                           
                           
                           
                        <div class="volt-sin-sidebar ">
                           <div class="single-news bgdata1 wow fadeInUp" data-wow-delay=".3s">
                                <?php if(!empty($gettheme->series_img)){ ?>
                                <img class="m-w-m-h-modules-themes" src="<?=base_url()?>/master/uploads/modulebanner/<?php echo $gettheme->series_img;?>" alt="">
                                <?php }else{ ?>
                                <img class="m-w-m-h-modules-themes" src="<?=base_url()?>/master/uploads/noimage.png">
                                <?php } ?> 
                               
                                <div class="chapter-themes-det">
                                    <h4><?php echo $gettheme->series_name;?></h4>
                                </div>
                            </div>
                        </div>
                            
                         
                           
                           
                          <?php  if ($themelistelse) {  ?>  
                        <div class="sin-sidebar bradius10 border1">
                           <ul class="cat-post border1 padding15"> 
                           
                           <?php $i=1; foreach ($themelistelse as $getthemes) { ?>
                            <li><a href="<?=base_url()?>/subject/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>/<?php echo $getmodules->slug; ?>/<?php echo $getthemes['slug'];?>" class="fsize-18">
                                <?=$getthemes['series_name']?> </a></li>
                        
                            <?php $i++;} ?>
                            </ul>
                         </div> 
                             <?php }else{    ?>
                           <?php /* <h2 class="text-center">Data not available</h2> */ ?>
                            <?php } ?>
                         
                       </div>
                        
                    </div>
                   
                   
                   
                   <div class="order-sm-1 order-md-2 col-md-8 col-xl-9">
                    <div class="row">
                        
                        
              
                    <?php  if (is_array($chapterlist) && count($chapterlist) > 0)  { 
                        $i=1; foreach ($chapterlist as $getchapterData) { ?>   
                     <div class="col-md-4 col-md-6 col-xl-3">
                            <div class="single-chapter single-class wow fadeInUp" data-wow-delay=".3s">
                                
                               <?php if(!empty($getchapterData['chap_image'])){ ?>
                                <img src="<?=base_url('master/uploads/chapterbanner/'.$getchapterData['chap_image']);?>" alt="">
								<?php }else{ ?> 
                                <img src="<?=base_url()?>/master/uploads/noimage.png">
                                <?php } ?> 
                                   
                                <div class="chapter-det">
                                 <a href="<?=base_url()?>/subject/<?php echo $geturlsubject->slug;?>/class<?php echo $geturlclass->class_id; ?>/<?php echo $getmodules->slug.'/'.$gettheme->slug;?>/<?php echo $getchapterData['slug'];?>">  <h4><?php echo $getchapterData['chapT_name'];?></h4></a>
                                    <p><?php echo $getchapterData['chap_content'];?></p>
                                    <div class="news-meta">
                                    <div class="progressreport">
                                        <div class="themeprogress">
                                          <div class="themeprogress-bar themeprogress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                            40% 
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                          </div>  
                           
                       <?php $i++;} }else{    ?>
                        <div class="col-md-12">
                            <h2 class="font-sky text-center" style="padding: 50px 0;"> There are no chapter yet</h2>
                        </div>
                        <?php } ?> 
                        
                    
                    
                    </div>
                </div>     
           
           </div>
           
           
           
            </div>
        </div>
    </section>


<?php include "footer.php";?>