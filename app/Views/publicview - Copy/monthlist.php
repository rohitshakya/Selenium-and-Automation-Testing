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
                                        <span class="color-ccc"><?php echo $geturlclass->class_name; ?></span> 
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
                    <h2 class="area-heading st-two font-red">Choose Months</h2>
                </div>
            </div>
            <div class="col-md-12 col-xl-12 inner-container">
                <div class=" row">
                     <?php if(session('voltAccountUserName')){ ?>  
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
                            <?php if (1 == base64_encode($getMOnth)){?>
                           <div class="col-sm-6 col-xl-2">
                                <div class="single-class subject-list wow fadeInUp bgdata<?php  echo $key; ?>">
                                  <div class="admission_content">
                                    <a href="<?=($lock == 'lock' && $sa !='enabled') ? 'javascript:void();' : base_url('theme/'  . $this->uri->segment('2') . '/' . base64_encode($getMOnth))?>">  
                                          <div id="" class="mondata">
                                            <div class="months-section">
                                              <h3 class="mnamestyle">Month11</h3>
                                             <h2 class="cset"><?php echo $key;?></h2>
                                           </div>
                                          <?=($lock == 'lock' && $sa=='enabled') ? '<em class="fa fa-lock"></em>' : ''?>
                                         </div>
                                     </a>
                                  </div>
                               </div>
                            </div>
                            <?php } else {?>
                      <div class="col-sm-6 col-xl-2">
                                <div class="single-class subject-list wow fadeInUp bgdata<?php  echo $key; ?>">
                              <div class="admission_content">
                                <a href="<?=($lock == 'lock' && $sa!='enabled') ? 'javascript:void();' : base_url('theme/'  . 'dkdkdk' . '/' . base64_encode($getMOnth))?>">  
                                      <div id="" class="mondata">
                                           <div class="months-section">
                                               <?php if($key==11 || $key==12){  ?> 
                                                <h2 class="assessmsent">Assessment</h2>
                                                <?php }else{ ?>
                                                <h3 class="mnamestyle">Month</h3>
                                                <?php } ?>
                                               
                                                <?php if($key==11){  ?>
                                                <h2 class="cset">1</h2>
                                                <?php }else if($key==12){ ?>
                                                <h2 class="cset">2</h2>
                                                <?php }else{ ?>
                                                <h2 class="cset"><?php  echo $key; ?></h2>  
                                                <?php } ?>
                                               
                                        </div>

                                
                                           
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
                          
                        <?php }else{ ?>
                    
                        
<?php  
    $cm = date('n'); 
    $cy = date('Y');
    $ly = date('Y')-1;
    $ny = date('Y')+1;
    if($cm<4){
    $fdate = $ly.'-04-01';
    $edate = $cy.'-03-31';
    }else{
    $fdate = $cy.'-04-01';
    $edate = $ny.'-03-31'; 
    }
    $moInNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
    $startSfrom = $fdate;
    $endSto = $edate;
    $schoolTerms = array();
    $date1 = new \DateTime($startSfrom);
    $date2 = new \DateTime($endSto);
    $month1 = new \DateTime($date1->format('Y-n'));
    while ($month1 < $date2) {
    array_push($schoolTerms, $month1->format('Y-n'));
    $month1->modify('+1 month'); //Add one month and repeat
    }
    if (count($schoolTerms) < 12) {
    $dif = 12 - count($schoolTerms);
    for ($i = 1; $i <= $dif; $i++) {
    array_push($schoolTerms, date('Y-') . '0');
    }
    }
    array_splice($schoolTerms, 12);
    $finalTerms = array_combine($moInNumber, $schoolTerms);?>

                       <?php if ($finalTerms) { ?>
                            <?php foreach ($finalTerms as   $key => $getMOnth) {
                            $my = explode('-',$getMOnth);
                            $Y = $my[0];
                            $m = $my[1];
                            $cmy = date('Y-n');
                            $dof = $getMOnth;
                            
                            $lock = (strtotime($cmy) < strtotime($dof)) ? 'lock' : 'open';
                            ?>
                            <?php if($getMOnth &&  $m>0) { ?>
                            <?php if (1 == base64_encode($getMOnth)){?>
                    
                
                           <div class="col-sm-6 col-xl-2">
                                <div class="single-class subject-list wow fadeInUp bgdata<?php  echo $key; ?>">
                                  <div class="admission_content">
                                    <a href="<?=($lock == 'lock' ) ? 'javascript:void();' : base_url('theme/'  . $this->uri->segment('2') . '/' . base64_encode($getMOnth))?>">  
                                          <div id="" class="mondata">
                                            <div class="months-section">
                                              <h3 class="mnamestyle">Month</h3>
                                                 <h2 class="cset"><?php echo $key;?></h2>
                                           </div>

                                          
                                         </div>
                                     </a>
                                  </div>
                               </div>
                            </div>
                    
                    
                    
                    
                            <?php } else {?>
             
                          
                           <div class="col-sm-6 col-xl-2">
                                <div class="single-class subject-list wow fadeInUp bgdata<?php  echo $key; ?>">
                              <div class="admission_content ">
                                <a href="<?=($lock == 'lock') ? 'javascript:void();' : base_url('theme/'  . 'dkdkdk' . '/' . base64_encode($getMOnth))?>">  
                                      <div id="" class="mondata">
                                        <div class="months-section">
                                        <?php if($key==11 || $key==12){  ?> 
                                          <h2 class="assessmsent">Assessment</h2>
                                            <?php }else{ ?>
                                            <h3 class="mnamestyle">Month</h3>
                                        <?php } ?>
                                            
                                         <?php if($key==11){  ?>
                                           <h2 class="cset">1</h2> 
                                        <?php }else if($key==12){ ?>
                                          <h2 class="cset">2</h2> 
                                        <?php }else{ ?>
                                         <h2 class="cset"><?php  echo $key; ?></h2>  
                                        <?php } ?>   
                                            
                                            
                                       </div>

                                          
                                          
                                        
       
                                     </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <?php }?>
                        <?php }?>
                        <?php }?>
                        <?php }?>    
                    <?php }?>
                       
                </div>
            </div>
        </div>
      
    </section>


<?php include "footer.php";?>