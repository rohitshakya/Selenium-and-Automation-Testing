<?php include "header.php";?>
<?php echo link_tag('assets/publicassets/assets/css/months.css');?>
<div class="admision_area about_page mt100-b50" id="admission">
   <div class="container">
      <div class="row">
          <!--Months Listed according to school session -->
         <div class="col-md-8 main-admission row">
           <div class="row padding-top">
               <div class="col-md-12">
                     <div class="section_title_style2" style="text-align: left;">
                        <div class="breatcome2_content">
                           <ul>
                              <li>
							  <a href="<?=base_url()?>/"><img class="homebtn" src="<?=base_url()?>/assets/publicassets/assets/images/home.png" class="img-fluid" alt=""></a>
							  <em class="fa fa-angle-right"></em>
                            fff
                              </li>
                           </ul>
                        </div>
                     </div>
               </div>
            </div>
             
             
             
             
                            <?php if ($_SESSION['finalTermsSession']) { ?>
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
                            <div class="col-md-3 col-sm-6 col-xs-6">
                               <div class="single_admision bradius">
                                  <div class="admission_content bgdata<?php echo $key; ?>">
                                    <a href="<?=($lock == 'lock' && $sa !='enabled') ? 'javascript:void();' : base_url('theme/'  . $uri->getSegment('2') . '/' . base64_encode($getMOnth))?>">  
                                          <div id="" class="mondata s_s">
                                            <div class="category-image">
                                              <h3 class="mnamestyle">Month</h3>
                                           </div>

                                           <h2 class="cset"><?php echo $key;?></h2>
                                            <?=($lock == 'lock' && $sa=='enabled') ? '<em class="fa fa-lock"></em>' : ''?>
                                         </div>
                                     </a>
                                  </div>
                               </div>
                            </div>
                            <?php } else {?>
             
                           <div class="col-md-3 col-sm-6 col-xs-6">
                           <div class="single_admision bradius">
                              <div class="admission_content bgdata<?php  echo $key; ?>">
                                <a href="<?=($lock == 'lock' && $sa!='enabled') ? 'javascript:void();' : base_url('theme/'  . $uri->getSegment('2') . '/' . base64_encode($getMOnth))?>">  
                                      <div id="" class="mondata s_s">
                                        <div class="category-image">
                                            
                                               <?php if($key==11 || $key==12){  ?> 
                                        
                                                <?php }else{ ?>
                                             <h3 class="mnamestyle">Month</h3>
                                                  <?php } ?>
                                       </div>

                                          
                                          
                                        <?php if($key==11){  ?>
                                        <h2 class="assessmsent">Assessment 1</h2>
                                        <?php }else if($key==12){ ?>
                                         <h2 class="assessmsent">Assessment 2</h2>  
                                        <?php }else{ ?>
                                         <h2 class="cset"><?php  echo $key; ?></h2>  
                                        <?php } ?>
                                          
                                          
                                          
                                          
                                          
                                        <?=($lock == 'lock' && $sa!='enabled') ? '<em class="fa fa-lock"></em>' : ''?>
                                     </div>
                                 </a>
                              </div>
                           </div>
                        </div>

             
                            <?php }?>
                            <?php }?>
                            <?php }?>

                    <?php }?>
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
             
            
            <?php /*  
	        <?php if($_SESSION['finalTermsSession']){ $mnum = 0; foreach( $_SESSION['finalTermsSession'] as $termK => $getfinalTerms ){ 
            $my = explode('-',$getfinalTerms);
            $Y = $my[0];
            $m = $my[1];
            $classId = session('voltAccountClass');
            $SubjectId = session('voltAccountSubject');
            $checkDataOfThisMonth = $db->query("SELECT * FROM `question` WHERE `subject`=$SubjectId AND `class`=$classId AND `month` = $m AND `status`='Active'")->num_rows();
            if($checkDataOfThisMonth && $m>0){ $mnum++;
            $cmy = date('Y-n');
            $dof = $getfinalTerms;
            $sa = 'enabled';
                                              
                                              
            $lock = (strtotime($_SESSION['finalTermsSession']) < strtotime($dof)) ? 'lock' : 'open';
            ?>
      
            <div class="col-md-3 col-sm-6 col-xs-6">
               <div class="single_admision bradius">
                  <div class="admission_content bgdata<?php echo $mnum; ?>">
                    <a href="<?=($lock == 'lock' && $sa=='enabled') ? 'javascript:void();' : base_url('theme/'  . $uri->getSegment('2') . '/' . base64_encode($getfinalTerms))?>">  
                          <div id="" class="mondata s_s">
                            <div class="category-image">
                              <h3 class="mnamestyle">Months</h3>
                           </div>
                           
                           <h2 class="cset"><?php echo $mnum;?></h2>
                            <?=($lock == 'lock' && $sa=='enabled') ? '<em class="fa fa-lock"></em>' : ''?>
                         </div>
                     </a>
                  </div>
               </div>
            </div>
          <?php }}}?>
            */ ?> 
             
             
             
          
		
         </div>
        <!-- -->
          
        <!--What is Inside -->
        <div class="col-lg-4 col-md-4 main-admission row">
        <?php 
        $class_cond = "";
        $classIs = session('voltAccountClass');
        if(!empty($classIs)){
        $class_cond = " AND class_id=".$classIs;
        }
        $PremiumFeature = $db->query('SELECT * FROM `vt_premiumfeatures` where status="active" '.$class_cond.' order by index_num ASC')->getResult(); 
        ?>
		  <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="page_sidebar">
               <div class="side_title"><span>What is Inside?</span></div>
               <div class="related_items mb-4">
                  <ul class="vidList" id="">
                   <?php 
                   foreach($PremiumFeature as $fData){
                   ?>
                     <li>
                        <div class="product_item">
                           <div class="thumbnail nob">
                              <a href="<?= ($fData->link)?$fData->link:'#';?>"><img src="<?=base_url('master/uploads/premiumfeature/'.$fData->image)?>" class="img-fluid" alt=""></a>
                           </div>
                        </div>
                     </li>
                  <?php } ?>                    

                  </ul>
               </div>
            </div>
			</div>
         </div>
        <!-- -->

      </div>
   </div>
</div>
<script>
$('select').on('change', function() {
    window.location.href = this.value;
});
</script>
<?php include "footer.php";?>