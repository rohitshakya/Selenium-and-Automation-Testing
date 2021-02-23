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
                                        
                                        
                                         <em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="<?=base_url()?>/subject/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>/<?php echo $getmodules->slug; ?>/<?php echo $gettheme->slug; ?>">
								       <?php echo $gettheme->series_name; ?>
										</a> 
                                        
                                        <em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"><?php echo $chapter->chapT_name; ?></span> 
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
                            <div class="single-chapter single-class wow fadeInUp" data-wow-delay=".3s">
                               <?php if(!empty($chapter->chap_image)){ ?>
                                <img src="<?=base_url('master/uploads/chapterbanner/'.$chapter->chap_image);?>" alt="">
								<?php }else{ ?> 
                                <img src="<?=base_url()?>/master/uploads/noimage.png">
                                <?php } ?> 
                                   
                                <div class="chapter-det">
                                 <a href="javascript:void();"> 
                                     <h4><?=$chapter->chapT_name?></h4></a>
                                    <p><?=$chapter->chap_content?></p>
                                </div>
                            </div>   
                        </div>
                           
                        <?php  if ($chapterlistelse) {  ?>  
                        <div class="sin-sidebar bradius10 border1">
                            <ul class="cat-post border1 padding15"> 
                            <?php $i=1; foreach ($chapterlistelse as $getchapter) { ?>
                            <li><a href="<?=base_url()?>/subject/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>/<?php echo $getmodules->slug; ?>/<?php echo $gettheme->slug; ?>/<?php echo $getchapter['slug']; ?>" class="fsize-18">
                            <?=$getchapter['chapT_name']?> </a></li>
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
                       
                    <?php
                    if($allcategories){ $int=0; $i=1; foreach($allcategories as $getCategory){
                    $urlIs = "#active";
                    $checkTopics = API_connector(base_url("api/getcatSet?class=" . $geturlclass->class_id . "&subject=" . $geturlsubject->sub_id . "&series=" . @$gettheme->series_id . "&chapter=" . $chapter->id . "&category=" . $getCategory->cat_id));                        
                    $getActivityType  = API_connector(base_url("api/getqdata?setId=" . $checkTopics->data->setData[0]->setIds));
                    $checkList = $db->query("SELECT * FROM `list` WHERE `set_id`='".$checkTopics->data->setData[0]->setIds."' " )->getRow();
                    if($checkList){
			        $listenPos = strpos($checkTopics->data->setData[0]->actType, 'audioUpload');
			        $videoPos = strpos($checkTopics->data->setData[0]->actType, 'vid');
			        $dataTypeis = ($listenPos==true)?"audioUpload":"vid";?>    
                        
                        
                        
                        
                     <div class="col-md-4 col-md-6 col-xl-3">
                        <?php if($checkTopics->status==1) {
										$act_link = ($getCategory->cat_id == 50) ? 'playgame' : 'playactivity'; 
									
$urlIs = strtolower("classclsis".$chapter->class_id.'~'.$subject->sub_name.'subis'.$chapter->subject_id.'~'.$series->series_name.'seris'.$chapter->series_id.'~'.$chapter->chapT_name.'topsis'.$chapter->id.'~activity'.$getCategory->cat_id.'~');


$Usod = (isset($checkTopics->data->setData[0]->setIds))?'/'.$checkTopics->data->setData[0]->setIds:'';
$Utyp = (isset($getActivityType->type[0]))?'/'.$getActivityType->type[0]:'';

//base_url($act_link.'/' . $checkTopics->data->setData[0]->setIds . '/' . $getActivityType->type[0] . '?c='.preg_replace('/[^A-Za-z0-9~-]=/','',$urlIs).''.$uri->getSegment(3))

$activityurl = base_url($act_link.$Usod.$Utyp.'?c='.preg_replace('/[^A-Za-z0-9~-]=/','',$urlIs).''.$uri->getSegment(3));


				         ?>	
                        
                         
                     <?php if(session('voltAccountUserName')){ ?>  
                      <a style="width: 100%;" href="<?php echo $activityurl; ?>" class="my-super-cool-btn">
                          
                        <?php }else{ ?>
                   
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#LoginMVolt" data-whatever="@mdo">
                              
                        <?php } ?>  
                         
                        
                          
                             
                             
                             
                             
                             
                         <div class="single-chapter single-class wow fadeInUp" data-wow-delay=".3s" style="background: #<?=$getCategory->cat_bg?>!important;">
                         <?php if(!empty($getCategory->cat_img)){ ?>
                         <img src="<?=base_url('master/uploads/category/'.$getCategory->cat_img)?>" alt="">
				         <?php }else{ ?> 
                         <img src="<?=base_url()?>/master/uploads/noimage.png">
                         <?php } ?> 
                         <div class="category-det">
                         <h4><?=$getCategory->cat_name?></h4>
                         </div>
                         </div>
                          </a>
                         
                         
                         <?php }?>
                         
                      </div>    
                         <?php $int++; } $i++; } }else{?>    
                          <div class="col-md-12 col-md-12 col-xl-12">
                           <h2 class="font-sky text-center" style="padding: 50px 0;"> Data Not Available</h2>
                        </div>
                         <?php }?>  
                     </div>
                </div>     
           
           </div>
           
           
           
            </div>
        </div>
    </section>


<?php include "footer.php";?>