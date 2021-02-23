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
                                        <a href="<?=base_url()?>/classes/<?php echo $geturlsubject->slug; ?>">
								        <?php echo $geturlsubject->sub_name; ?>
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
                                        <a href="<?=base_url()?>/months/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>">
								        <?php echo $geturlclass->class_name; ?>
										</a> 
                                        
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/modules/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>/<?php echo base64_encode($month);?>/<?php echo $getmodules->slug; ?>">
                                        <?php echo $Mview;?>
										</a> 
                                        
                                        
                                        <?php if($gettheme){ ?>
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/themes/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>/<?php echo base64_encode($month);?>/<?php echo $getmodules->slug; ?>">
								        <?php echo $getmodules->m_name; ?>
										</a> 
                                        <em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"><?php if($gettheme){echo $gettheme->series_name;} ?></span> 
    
                                        <?php }else{ ?>
                                        <em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"> <?php echo $getmodules->m_name; ?></span> 
                                        
                                        <?php } ?>
                                       
                                        <?php }else{ ?>
                                        
                                        
                                        
                                        
                                         <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/modules/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>">
								        <?php echo $geturlclass->class_name; ?>
										</a>
                                        <?php if($gettheme){ ?>
                                        <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/themes/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>/<?php echo $getmodules->slug; ?>">
								        <?php echo $getmodules->m_name; ?>
										</a> 
                                        <em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"><?php if($gettheme){echo $gettheme->series_name;} ?></span> 
    
                                        <?php }else{ ?>
                                        <em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"> <?php echo $getmodules->m_name; ?></span> 
                                        
                                        <?php } ?>
                                        
                                        
                                        <?php } ?>
                                              
                                       
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



<section class="viva-middle-button-area default-bg">
	<div class="container-fluid">
		   <div class="row justify-content-center">
               
               
                 <?php if($gettheme){ ?>  
               
              <div class="row col-md-12 col-xl-10">
		         <div class="col-md-12 col-xl-4 image-sec-v1">
                 <?php if(!empty($gettheme->series_img)){ ?>
                                <img class="m-w-m-h-modules-themes" src="<?=MEDIA_UPLOAD_URL?>/uploads/themebanner/<?php echo $gettheme->series_img;?>" alt="">
                                <?php }else{ ?>
                                <img class="m-w-m-h-modules-themes" src="<?=MEDIA_UPLOAD_URL?>/uploads/noimage.png">
                                <?php } ?> 
                  </div>
				  <div class="row col-md-12 col-xl-8 text-section-v1" style=" display: flex;justify-content: center;align-items: center;">
                    <div class="col-md-12 col-xl-12"> 
					<h1 class="font-red mt-4 mb-1 sub-name-v1"><?php if($gettheme){echo $gettheme->series_name;}?></h1>
                
                      </div>
                  
				</div>
            </div>
                   <?php }else{ ?> 
               
               
               
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
					<h1 class="font-red mt-4 mb-1 sub-name-v1"><?php if($getmodules){echo $getmodules->m_name;}?></h1>
                     
                        
                   
                      </div>
                  
				</div>
            </div>
               
               
               
                 <?php } ?>  
               
               
               
		</div> 
	</div>
</section>

<header class="middle-bar ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12  mx-auto d-block">
             <!--Search box for Mobile Small devices (landscape phones, less than 768px)-->
             
                 <?php if($gettheme){ ?>     
                
                
                <h3>Lessons</h3> 
                
                <?php }else{ ?>
                   <h3>Lessons</h3> 
                
                  <?php } ?>  
                
               </div>
        </div>
    </div>
</header>

<!--Breadcrumb area end-->
<section class="blog-page default-bg" id="">
    <div class="container-fluid">
       <div class="row justify-content-center">
           
               <div class="row col-md-12 col-xl-10">
           
                     <?php  if (is_array($chapterlist) && count($chapterlist) > 0)  { 
                        $i=1; foreach ($chapterlist as $getchapterData) { ?>   
                         <div class="col-md-4 col-md-6 col-xl-3 no-padding single-class-chapter bgsingle-data sub_n">
                             
                            <?php if($gettheme){ ?>
                             <a href="<?=base_url()?>/category/<?php echo $geturlsubject->slug;?>/class<?php echo $geturlclass->class_id; ?>/<?php echo $getmodules->slug.'/'.$gettheme->slug;?>/<?php echo $getchapterData['slug'];?>">  
                             <?php }else{ ?>
                             <a href="<?=base_url()?>/category/<?php echo $geturlsubject->slug;?>/class<?php echo $geturlclass->class_id; ?>/<?php echo $getmodules->slug;?>/<?php echo $getchapterData['slug'];?>"> 
                             <?php } ?>
                          
                             <div class="single-chapter wow fadeInUp" data-wow-delay=".3s">
                                <div class="chapter-det">
                                  <?php if(!empty($getchapterData['chap_image'])){ ?>
                                    <img class="chapter-padding" src="<?=MEDIA_UPLOAD_URL?>/uploads/chapterbanner/<?php echo $getchapterData['chap_image'];?>" alt="">
                                    <?php }else{ ?> 
                                    <img class="chapter-padding" src="<?=MEDIA_UPLOAD_URL?>/uploads/noimage.png">
                                 <?php } ?> 
                                    <h4><?php echo $getchapterData['chapT_name'];?></h4>
                                    <?php if($getchapterData['chap_content']){ ?>
                                     <p><?php echo $getchapterData['chap_content'];?></p>
                                    <?php } ?>
                                    <div class="chapter-meta">
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
                               </a>
                           </div>  
                         <?php $i++;} }else{    ?>
                         <div class="col-md-12">
                            <h2 class="font-sky text-center" style="padding: 50px 0;"> There are no chapter yet</h2>
                         </div>
                        <?php } ?>  
                     
           </div>
            </div>
        </div>
</section>
<script>
$(document).ready(function(){
var largest = 0; //start with 0
$(".sub_n").each(function(){ //loop through each section
   var findHeight = $(this).height(); //find the height
   if(findHeight > largest){ //see if this height is greater than "largest" height
      largest = findHeight; //if it is greater, set largest height to this one 
   }  
});
$(".sub_n").css({"height":largest+"px"});        
});    
</script>  
<section class="bgbottom-wrappers"></section>
<?php include "footer.php";?>