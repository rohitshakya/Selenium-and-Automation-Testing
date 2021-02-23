<?php include "header.php";?>

<!--Breadcrumb start-->
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
                                        <span class="color-ccc">Subject</span> 
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
<!--Breadcrumb end-->

<!--Subject list start-->
<section class="choose-subject-area default-bg" id="">
    <div class="container-fluid custom-container">
       
        <div class="row">
            <div class="col-xl-12">
                <h2 class="area-heading st-two font-red">Choose Subject</h2>
            </div>    
        </div>
        
         
        <div class="inner-container">
            <div class="row justify-content-center" >
            <?php  if (is_array($subject) && count($subject) > 0)  { 
                $i=1; foreach ($subject as $getsubject) { ?> 
                    <!--Single class start-->
                 
                         <div class="col-sm-6 col-xl-2">
                        <?php if($getsubject['sub_coming']==1){ ?>
                        <a href="<?=base_url()?>/subject/<?=$getsubject['slug']?>">
                        <?php }else{ ?>
                        <a href="javascript:void(0)">
                        <?php } ?>
                        <div class="sin-upc-event-two">
                        <?php if($getsubject['sub_coming']==1){ ?>
                        <?php }else{ ?>
                        <div class="price sky-drop">
                        </div>
                        <?php } ?>
                        <div class="sub-image bg-nf">
                        <?php if(!empty($getsubject['sub_cover'])){ ?>
						<img src="<?=MEDIA_UPLOAD_URL;?>uploads/subject/<?php echo $getsubject['sub_cover'];?>" alt="" onmouseover="this.src='<?=MEDIA_UPLOAD_URL;?>uploads/subject/<?php echo $getsubject['sub_cover_gif'];?>'" onmouseout="this.src='<?=MEDIA_UPLOAD_URL;?>uploads/subject/<?php echo $getsubject['sub_cover'];?>'">
						
                        <?php }else{ ?>
                        <img src="<?=MEDIA_UPLOAD_URL;?>/uploads/subject/icon.png"  onmouseover="this.src='<?=MEDIA_UPLOAD_URL;?>/uploads/subject/sub.gif'" onmouseout="this.src='<?=base_url()?>/uploads/subject/icon.png'">
                        <?php } ?> 
                        </div>
                        <div class="sin-up-content">
                          <h6 class="text-center sub_n"><?=$getsubject['sub_name']?></h6>
                        </div>
                    </div>
                   </a>
                </div>    
                        
                        
                        
                        
                <?php $i++;} }else{    ?>
                <?php } ?>  
                </div>
        </div>
    </div>
</section>
 <!--Subject list start-->
  
<section class="bgbottom-wrappers"></section>
    
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
    

<?php include "footer.php";?>