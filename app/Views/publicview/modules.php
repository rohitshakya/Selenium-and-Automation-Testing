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
                                        <a href="<?=base_url()?>/subject/<?php echo $geturlsubject->slug; ?>">
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
                                        <em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <a href="<?=base_url()?>/months/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id; ?>">
								        <?php echo $geturlclass->class_name; ?>
										</a> 
                                        <em class="fa fa-angle-right" style="color:#fff;"></em> 
                                        <span class="color-ccc"> <?php echo $Mview;?></span> 
                                        <?php }else{ ?>
                                        
                                        <em class="fa fa-angle-right" style="color:#fff;"></em> 
                                        <span class="color-ccc"><?php echo $geturlclass->class_name; ?></span>
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
<!--Breadcrumb area end-->


<section class="viva-middle-button-area default-bg">
	<div class="container-fluid">
		   <div class="row justify-content-center">
              <div class="row col-md-12 col-xl-10">
		         <div class="col-md-12 col-xl-4 image-sec-v1">
                    <?php if(!empty($geturlsubject->sub_cover)){ ?>
                    <img class="m-w-m-h-modules-themes" src="<?=MEDIA_UPLOAD_URL?>/uploads/subject/<?php echo $geturlsubject->sub_cover;?>" alt="">
                    <?php }else{ ?>
                    <img class="m-w-m-h-modules-themes" src="<?=MEDIA_UPLOAD_URL?>/master/uploads/noimage.png">
                    <?php } ?>  
                  </div>
				  <div class="row col-md-12 col-xl-8 text-section-v1" style=" display: flex;justify-content: center;align-items: center;">
                    <div class="col-md-12 col-xl-12"> 
					<h1 class="font-red mt-4 mb-1 sub-name-v1"><?php echo $geturlsubject->sub_name;?></h1>
                       
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
               <h3>Modules</h3> 
               </div>
        </div>
    </div>
</header>



<section class="blog-page  default-bg" id="">
    <div class="container-fluid">
      <div class="row justify-content-center">
             <div class="row col-md-12 col-xl-10">
                    <?php if($geturlsubject->sub_month == 1){ ?>
                        <div class="col-md-12 col-md-12 col-xl-12 no-padding">
                            <div class="new-pro-add">
							<div class="volt-variable-area">
                            <div class="volt-product-color float-right">
                            <label> Course Month -</label>
                            <select name="cars" class="form-control" id="select-by-color">
                            <?php foreach ($_SESSION['finalTermsSession'] as   $key => $getMOnth) {
                            $my = explode('-',$getMOnth);
                            $Y = $my[0];
                            $m = $my[1];
                            $cmy = date('Y-n');
                            $dof = $getMOnth;
                            
                            $lock = (strtotime($cmy) < strtotime($dof)) ? 'lock' : 'open';
                            ?>
                            <?php if($getMOnth &&  $m>0) { ?>
                            <?php if ($uri->getSegment(4) == base64_encode($getMOnth)){?>
                            <?php if($lock == 'lock' && $sa!='enabled'){ ?>
                            <option value="javascript:void();">Month <?php  echo $key; ?>
                            <?php if($key==11){  ?>
                            Assessment 1
                            <?php }else if($key==12){ ?>
                            Assessment 2  
                            <?php }else{ ?>
                            Month <?php  echo $key; ?> 
                            <?php } ?>        
                            </option>
                            <?php }else{ ?>
                            <option value="<?=base_url()?>/modules/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id;?>/<?php echo base64_encode($getMOnth);?>" selected>
                            <?php if($key==11){  ?>
                            Assessment 1
                            <?php }else if($key==12){ ?>
                            Assessment 2  
                            <?php }else{ ?>
                            Month <?php  echo $key; ?> 
                            <?php } ?>
                            </option>
                            <?php } ?>
                            
                            <?php } else {?>
                            
                            <?php if($lock == 'lock' && $sa!='enabled'){ ?>
                              <option class="discolor" value="javascript:void();" disabled>
                              <?php if($key==11){  ?>
                                Assessment 1
                                <?php }else if($key==12){ ?>
                                Assessment 2  
                                <?php }else{ ?>
                                Month <?php  echo $key; ?> 
                             <?php } ?>
                             </option>
                             <?php }else{ ?>
                            <option value="<?=base_url()?>/modules/<?php echo $geturlsubject->slug; ?>/class<?php echo $geturlclass->class_id;?>/<?php echo base64_encode($getMOnth);?>">
                             <?php if($key==11){  ?>
                              Assessment 1
                              <?php }else if($key==12){ ?>
                              Assessment 2  
                              <?php }else{ ?>
                              Month <?php  echo $key; ?> 
                            <?php } ?>
                             </option>
                             <?php } ?>
                            
                            <?php }?>
                            <?php }?>
                            <?php }?>
                            </select>   
                            </div>
                          </div>
						</div>
                      </div>
                    <?php } ?>    
                    
                    <?php  if ($listview) {
                    $i=1; foreach ($listview as $getModule) {
                    ?>

                  <?php if($vdata=='moduals'){ ?>
                   <div class="col-sm-6 col-xl-3 no-padding">
                     <?php if($getModule['url']){ ?>
                       <a href="<?php echo $getModule['url']; ?>">
                       <?php }else{
                        if($getModule['series']==0){
                          //$url = base_url('chapter/'.base64_encode("segment34544!!".$getModule['module']).'/'. $uri->getSegment(3)); 
                            $url = base_url('chapter/'.$geturlsubject->slug.'/class'.$geturlclass->class_id.'/'.$uri->getSegment(4).'/'.$getModule['slug']);  
                        }else{ 
                          $url = base_url('themes/'.$geturlsubject->slug.'/class'.$geturlclass->class_id.'/'.$uri->getSegment(4).'/'.$getModule['slug']);   
                        }  ?>
                       <a href="<?=$url;?>">
                       <?php } ?>  
                        
                        <div class="bgsingle-classborder subject-list bgdata wow fadeInUp" data-wow-delay=".<?php echo $i;?>">
                        <?php if(!empty($getModule['m_img'])){ ?>
						<img class="m-w-m-h-modules" src="<?=MEDIA_UPLOAD_URL?>/uploads/modulebanner/<?php echo $getModule['m_img'];?>" alt="">
                        <?php }else{ ?>
                        <img class="m-w-m-h-modules" src="<?=MEDIA_UPLOAD_URL?>/uploads/noimage.png">
                        <?php } ?>                                  
                        <div class="volt-intro mh-80">
                        <div class="volt-modules">
                        <h3><?=$getModule['m_name']?></h3>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div> 
                       
                       <?php  if (is_array($bloglist) && count($bloglist) > 0)  { 
                            $i=1; foreach ($bloglist as $getModule) {
                      ?>   
                        <div class="col-sm-6 col-xl-3 no-padding">
                        <a href="<?php echo $getModule['m_url']; ?>" target="_blank">
                        <div class="bgsingle-classborder subject-list bgdata wow fadeInUp" data-wow-delay=".<?php echo $i;?>">
                        <?php if(!empty($getModule['m_img'])){ ?>
						<img class="m-w-m-h-modules" src="<?=MEDIA_UPLOAD_URL?>/uploads/modulebanner/<?php echo $getModule['m_img'];?>" alt="">
                        <?php }else{ ?>
                        <img class="m-w-m-h-modules" src="<?=MEDIA_UPLOAD_URL?>/uploads/noimage.png">
                        <?php } ?>                                  
                        <div class="volt-intro mh-80">
                        <div class="volt-modules">
                        <h3><?=$getModule['m_name']?></h3>
                        </div>
                        </div>
                        </div>
                        </a>
                        </div>    

                       <?php $i++;} }else{    ?>

                        <?php } ?> 

                       
                 
                    <?php }else if($vdata=='series'){ ?>
                      <div class="col-sm-6 col-xl-3 no-padding">
                       <a href="<?=base_url('chapter/' .base64_encode($getModule['series_id']).'/'. $uri->getSegment(3));?>">
                        <div class="bgsingle-classborder subject-list bgdata wow fadeInUp">
                        <?php if(!empty($getModule['series_img'])){ ?>
						<img class="m-w-m-h-modules" src="<?=MEDIA_UPLOAD_URL?>/uploads/themebanner/<?php echo $getModule['series_img'];?>" alt="">
                        <?php }else{ ?>
                        <img class="m-w-m-h-modules" src="<?=MEDIA_UPLOAD_URL?>/uploads/uploads/noimage.png">
                        <?php } ?>                                  
                        <div class="volt-intro mh-80">
                        <div class="volt-modules">
                        <h3><?=$getModule['series_name']?></h3>
                        </div>
                        </div>
                        </div>
                        </a>
                    </div>    
                  
                 <?php }else if($vdata=='chapter'){ ?>
                 <div class="col-lg-4 col-md-6 no-padding">
                    <div class="course-item-main">
                        <div class="course-item course-item-style cuadro_intro_hover">
                            <a
                                href="<?=base_url('theme-topic-category/' .base64_encode($getModule['id']).'/'. $uri->getSegment(3));?>">
                                <div class="course-item-image">
                                    <?php if(!empty($getModule['chap_image'])){ ?>
                                    <img src="<?=MEDIA_UPLOAD_URL?>/uploads/chapterbanner/<?php echo $getModule['chap_image'];?>"
                                        alt=" Image " class="img-responsive">
                                    <?php }else{ ?>
                                    <img src="<?=MEDIA_UPLOAD_URL?>/uploads/chapterbanner/icon.png" alt=" Image "
                                        class="img-responsive">
                                    <?php } ?>

                                </div>
                                <div class="caption">
                                    <div class="blur"></div>
                                    <div class="course-item-content caption-text">
                                        <h3 class="text-primary"><?=$getModule['chapT_name'];?></h3>
                                        <p class="pstyle"><?=$getModule['chap_content'];?></p>

                                    </div>
                                </div>
                                <div class="ellipsis"></div>
                            </a>
                        </div>
                        <div class="progressreport">
                            <div class="themeprogress">
                                <div class="themeprogress-bar themeprogress-bar-info" role="progressbar"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                    40%
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                <?php }else{ ?>
                 <?php /*   <h2 class="text-center">Data not available</h2> */ ?>
                <?php }?>
                <?php $i++;} }else{    ?>
                <div class="col-sm-12 col-xl-12">
                <h2 class="text-center">Data not available</h2>
                </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
<section class="bgbottom-wrappers"></section>  
<script>
$('select').on('change', function() {
    //alert( this.value );
    window.location.href = this.value;
});
$(document).ready(function() {
    $(".switch input").on("change", function(e) {
        const isOn = e.currentTarget.checked;

        if (isOn) {
            $(".hideme").show();

        } else {
            $(".hideme").hide();
        }
    });
});
</script>
<?php include "footer.php";?>
