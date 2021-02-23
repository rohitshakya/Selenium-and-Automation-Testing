<?php include "header.php";?>
<?php echo link_tag('assets/publicassets/assets/css/modulspage.css');?>
<?php echo link_tag('assets/publicassets/course.css');?>
<?php echo link_tag('assets/publicassets/circle.css');?>
<div class="admision_area about_page mt100-b50" id="admission">
    <div class="container">
        <!-- breadcrumbs -->
        <div class="row padding-top">
            <div class="col-md-12">
                <div class="section_title_style2" style="text-align: left;">
                    <div class="breatcome2_content">
                        <ul>
                            <?php if($getLogin){?>
                            <li>
                                <a href="<?=base_url()?>/">
                                <img class="homebtn" src="<?=base_url()?>/assets/publicassets/assets/images/home.png" class="img-fluid" alt="">
                                </a>
                                <em class="fa fa-angle-right"></em>
                                <?php if($vmonths==1){ ?>
                                <a href="<?=base_url('theme-months/'.$uri->getSegment(2))?>">
                                    <?php echo $sdata->sub_name; ?>
                                </a>
                                <em class="fa fa-angle-right"></em>
                                Month <?php echo array_search($month, session('finalTermsSession'));?>
                                <?php }else{ ?>
                                <?php echo $sdata->sub_name; ?>
                                <?php } ?>
                            </li>
                            <?php } else{?>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        <div class="row">
            <div class="col-md-3">
                <!-- User Class details  -->
                <div class="main-admission">
                    <a href="javascript:void();">
                        <div class="promo-center">
                        <?php  $cid = session('voltAccountClass');
                        $classData = $modelData->singledata('mastar_class', ['class_id' => $cid]);
                        if(!empty($classData->c_img)){
                        $CLassImgName = ($classData->c_img)?$classData->c_img:'';
                        $classImg = base_url('master/uploads/classimage/'.$CLassImgName);
                        }else{
                        $classImg = base_url('master/uploads/classimage/dummyclass.png');
                        }										
                        ?>
                        <img class="w100" src="<?=$classImg;?>" alt="class" />
                        </div>
                    </a>
                </div>
             
            </div>





            <div class="col-md-6 main-admission row">
                <?php if($vmonths==1){ ?>
                <div class="col-md-12 main-admission cmset">
                
             
                    <?php if (session('voltAccountUserName')) { ?>
                    
                    <span class="cmlist"> Course Month -
                        <select name="cars" class="selectborder" id="cars">
                            <?php foreach ($_SESSION['finalTermsSession'] as   $key => $getMOnth) {
                            $my = explode('-',$getMOnth);
                            $Y = $my[0];
                            $m = $my[1];
                            $cmy = date('Y-n');
                            $dof = $getMOnth;
                            $sa = $schoolData->mnthstatus;
                            $lock = (strtotime($cmy) < strtotime($dof)) ? 'lock' : 'open';
                            ?>
                            <?php if($getMOnth &&  $m>0) { ?>
                            <?php if ($uri->getSegment(3) == base64_encode($getMOnth)){?>
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
                            <option value="<?=base_url('theme/'  . $uri->getSegment('2') . '/' . base64_encode($getMOnth))?>" selected>
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
                             <option value="<?=base_url('theme/'  . $uri->getSegment('2') . '/' . base64_encode($getMOnth))?>" >
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
                    </span>
                    <?php }  ?>
                    
                   

                </div>
                <?php }else{ ?>
                <?php }?>
                
                
                
                <?php  if ($listview) {
              $i=1; foreach ($listview as $getModule) {
              ?>

                <?php if($vdata=='moduals'){ ?>
                <div class="col-lg-4 col-md-6 col-xs-6 col-sm-6">
                    <?php if($getModule['url']){ ?>
                    <a href="<?php echo $getModule['url']; ?>">
                        <?php }else{ if($getModule['series']==0){
                          $url = base_url('theme-category/'.base64_encode("segment34544!!".$getModule['module']).'/'. $uri->getSegment(3)); 
                        }else{ 
                          $url = base_url('theme-subjects/' .$getModule['slug'].'/'. $uri->getSegment(3));   
                        }  ?>
                        <a href="<?=$url;?>">
                            <?php } ?>
                            <div class="single-category-item  bgdata<?php echo $i; ?>">
                                <div class="category-image">
                                    <?php if(!empty($getModule['m_img'])){ ?>
                                    <img
                                        src="<?=base_url()?>/master/uploads/modulebanner/<?php echo $getModule['m_img'];?>">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>/master/uploads/noimage.png">
                                    <?php } ?>
                                </div>
                                <div class="category-title margin-bottom-10">
                                    <p class="modtitle"><?=$getModule['m_name']?></p>
                                </div>
                            </div>
                        </a>
                </div>

               

                <?php }else if($vdata=='series'){ ?>
                <div class="col-lg-4 col-md-6">
                    <a
                        href="<?=base_url('theme-chapter/' .base64_encode($getModule['series_id']).'/'. $uri->getSegment(3));?>">
                        <div class="single-category-item  bgdata<?php echo $i; ?>">
                            <div class="category-image">
                                <?php if(!empty($getModule['series_img'])){ ?>
                                <img
                                    src="<?=base_url()?>/master/uploads/themebanner/<?php echo $getModule['series_img'];?>">
                                <?php }else{ ?>
                                <img src="<?=base_url()?>/master/uploads/noimage.png">
                                <?php } ?>
                            </div>
                            <div class="category-title margin-bottom-10">
                                <p class="modtitle"><?=$getModule['series_name']?></p>
                            </div>
                        </div>
                    </a>
                </div>




                <?php }else if($vdata=='chapter'){ ?>
                <div class="col-lg-4 col-md-6">
                    <div class="course-item-main">
                        <div class="course-item course-item-style cuadro_intro_hover">
                            <a
                                href="<?=base_url('theme-topic-category/' .base64_encode($getModule['id']).'/'. $uri->getSegment(3));?>">
                                <div class="course-item-image">
                                    <?php if(!empty($getModule['chap_image'])){ ?>
                                    <img src="<?=base_url()?>/master/uploads/chapterbanner/<?php echo $getModule['chap_image'];?>"
                                        alt=" Image " class="img-responsive">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>/master/uploads/chapterbanner/icon.png" alt=" Image "
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
                   <?php /* <h2 class="text-center">Data not available</h2> */ ?>
                <?php }?>
                    
                    
                    
                    



                <?php $i++;} }else{    ?>
               <?php /* <h2 class="text-center">Data not available</h2> */ ?>
                <?php } ?>
                    
                     
                  
              <?php  if (is_array($bloglist) && count($bloglist) > 0)  { 
    

              $i=1; foreach ($bloglist as $getModule) {
              ?>   
                 <div class="col-lg-4 col-md-6">
                  <a href="<?php echo $getModule['m_url']; ?>" target="_blank">
                        <div class="single-category-item  bgdata<?php echo $i; ?>">
                                <div class="category-image">
                                    <?php if(!empty($getModule['m_img'])){ ?>
                                    <img
                                        src="<?=base_url()?>/master/uploads/modulebanner/<?php echo $getModule['m_img'];?>">
                                    <?php }else{ ?>
                                    <img src="<?=base_url()?>/master/uploads/modulebanner/icon.png">
                                    <?php } ?>
                                </div>
                                <div class="category-title margin-bottom-10">
                                    <p class="modtitle"><?=$getModule['m_name']?></p>
                                </div>
                            </div>
                        </a>
                    </div>    
                    
               <?php $i++;} }else{    ?>
         
                <?php } ?>    
                
                    
            </div>






        </div>
    </div>
</div>
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