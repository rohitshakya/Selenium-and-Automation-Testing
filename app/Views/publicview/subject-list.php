<?php include("header.php"); ?>
<style>
.cset{
  color: #fff;
font-weight: 800;
     font-size: 20px;
}
.p10{
 padding: 30px 0;
}
.img-set-logo{
    width: 70px;
   
}
    
    .s_s:after {
content: "";
top: 0px;
left: 0;
right: 0;
bottom: 0;
position: absolute;
background-color: rgba(0, 0, 0, 0.7);
z-index: -1;
    }
    .s_s{
            background: url('http://vivavolt.vivadigitalindia.net/assets/publicassets/assets/images/bookcover/images.jpg');
background-position: center center;
background-size: cover;
background-repeat: no-repeat;
            position: relative;
z-index: 1;
    }
    #wrapper_i {
box-sizing: border-box;
display: flex;
align-items: center;
justify-content: center;
}
#wrapper_i h2{
margin-bottom: 20px !important;    
}
.z_i99{
 z-index: 99;
}
.mt100-b50{
    margin: 50px 0px 50px 0px;
    }
</style>
<!-- edution BREADCRUMB AREA -->


<div class="breatcome_area">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="breatcome_title">
				<div class="breatcome_title_inner">
					<h2>SUBJECTS</h2>
					<div class="breatcome_content">
						<ul>
                            	<li><a href="<?=base_url()?>/">home</a> <em class="fa fa-angle-right"></em>  <a  href="<?=base_url('classess' )?>"><?=$class->class_name?></a>   <em class="fa fa-angle-right"> </em> Subjects</li> 
					
							</ul>
						
					</div>
				</div>
			</div> 
		</div>
	</div>
</div>



<div class="admision_area about_page mt100-b50" id="admission">
	<div class="container" style="max-width:1350px;">
        
        
        
        
        
		<div class="row padding-top">
            
            <?/*
             <div class="col-md-12">
               
                <div class="section_title_style2" style="text-align: left;">
                    <div class="breatcome2_content">
                        <ul>
                           	<li><a href="<?=base_url()?>/">home</a> <em class="fa fa-angle-right"></em><?=$class->class_name?><em class="fa fa-angle-right"></em> Subjects  </li>
					
                        </ul>
                    </div>
                </div>
            </div>
            */ ?>
			
			<div class="row">
				<?php 
	$chk_ser = 0;
	if($allsubject){ 
		foreach($allsubject as $getSubject){
			if($getSubject->subjectId=='7'){
			if(!empty($getSubject->series_list)){
				$chk_ser++;
				if($getSubject->series_list[0]->series_name || $getSubject->series_list[1]->series_name){
					//$ncls = 'class-'.($getLogin)?$getLogin->vc_class:1;
					$ncls = $uri->getSegment(2);
					$coverImage = ($getSubject->subject_image!="")?$getSubject->subject_image:'images.jpg';
				?>
				<div class="col-md-4">
						<div class="single_admision two">
							<div class="admission_content ">
				                <div class="">
                                 
                                   	<a href="<?=base_url('months/'.$ncls.'/'.strip_tags($getSubject->subject_name).'-'.$getSubject->subjectId)?>" class="my-super-cool-btn"> 
                                  
                                    
							
                                        
						          <div id="wrapper" class="p10 s_s" style="height:150px; background-image:url('<?=base_url('assets/publicassets/assets/images/bookcover/subject-img/'.$coverImage)?>')">
						          <h2 class="cset"><?php echo $getSubject->subject_name; ?></h2>
					               </div>          
                                    </a> 
                                </div>
              </div>
          </div>
      </div>
      <?php } }}} }
	if($chk_ser==0){?>
		<div class="col-md-4">
                    <div class="single_admision two">
                        <div class="admission_content ">
                            <a href="#">
                                <div id="wrapper" class="p10 s_s" style="height:100px; background: #FFF">
                                  <h2 class="cset">Data Not Available <span style="font-size: 13px; color: #888;">Updating Soon</span> </h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
	<?php }
	?>
  </div>
		
		</div>
	</div>
</div>

<?php include("footer.php"); ?>