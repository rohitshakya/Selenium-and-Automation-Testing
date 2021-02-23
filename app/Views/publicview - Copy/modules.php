<?php include "header.php";?>
<link href="https://volt.vivadevops.com/assets/publicassets/circle.css" rel="stylesheet" type="text/css">
<style>
.modules img{
      width: 60%;
}
/* Switch */
.switch {
	position: relative;
	display: inline-block;
	width: 42px;
	height: 22px;
	margin-top: 6px;
	margin-left: 10px;
}
.switch input {
	opacity: 0;
	width: 0;
	height: 0;
}
.slider {
	position: absolute;
	cursor: pointer;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #ccc;
	-webkit-transition: .4s;
	transition: .4s;
}
.slider:before {
	position: absolute;
	content: "";
	height: 15px;
	width: 15px;
	left: 4px;
	bottom: 4px;
	background-color: white;
	-webkit-transition: .4s;
	transition: .4s;
}
input:checked+.slider {
	background-color: #2196F3;
}
input:focus+.slider {
	box-shadow: 0 0 1px #2196F3;
}
input:checked+.slider:before {
	-webkit-transform: translateX(18px);
	-ms-transform: translateX(18px);
	transform: translateX(18px);
}
/* Rounded sliders */
.slider.round {
	border-radius: 16px;
}
.slider.round:before {
	border-radius: 50%;
}
.progrssgraphs {
    font-size: 17px;
    text-align: right;
    width: 75%;
    float: left;
    line-height: 30px;
}  
</style>
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
                                   
                                       
										<em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"> <?php echo $geturlclass->class_name; ?></span> 
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
                           <div class="single-news subjbg wow fadeInUp" data-wow-delay=".3s">
                                <?php if(!empty($geturlsubject->sub_cover)){ ?>
                                <img class="m-w-m-h-modules-themes" src="<?=base_url()?>/master/uploads/subject/<?php echo $geturlsubject->sub_cover;?>" alt="">
                                <?php }else{ ?>
                                <img class="m-w-m-h-modules-themes" src="<?=base_url()?>/master/uploads/noimage.png">
                                <?php } ?> 
                                <div class="subjbg-det">
                                    <h4><?php echo $geturlsubject->sub_name;?></h4>
                                </div>
                            </div>
                        </div> 
                           
                                
                        <div class="sin-sidebar bradius10 border1">
                           <ul class="cat-post border1 padding15"> 
                            <?php  if ($subjectlistelse) {  
                            $i=1; foreach ($subjectlistelse as $getSubjectelse) {
                            ?>
                            <li><a href="<?=base_url()?>/subject/<?php echo $getSubjectelse['slug']; ?>/class<?php echo $geturlclass->class_id; ?>" class="fsize-18"><?=$getSubjectelse['sub_name']?> </a></li>
                            <?php $i++;} }else{    ?>
                            <?php /* <h2 class="text-center">Data not available</h2> */ ?>
                            <?php } ?>
                            </ul>
                         </div> 
                        </div>
                  
                  
                  
                  
                  
                       <div class="blog-sidebar">
                           
                           
                           <div class="volt-sin-sidebar">
                            <div class="teacher-img">
                            <img class="vw100" src="<?=base_url('assets/publicassets/bundles/')?>upload/classimage/class1.png" alt="">
                            </div>
                           </div>
                           
                           
                           <?php if($getLogin){?>
                           <div class="sin-sidebar bradius10">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    <h4 class="progrssgraphs">Show Progress Graphs</h4>
                                    <div class="switchbar">
                                        <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                           </div>
                        
                            <div class="mt-3  hideme row poab">
                            <div class="col-md-12 col-sx-4 col-sm-4 m-10">
                                <div class="c100 p1 actsetn">
                                    <span>0%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                                <span>Activities attempted</span>
                            </div>
                            <div class="col-md-6 col-sx-4 col-sm-4 m-10">
                                <div class="c100 p1 green actsetn">
                                    <span>1%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                                <span>Module completed</span>
                            </div>
                        <div class="col-md-6 col-sx-4 col-sm-4 m-10">
                            <div class="c100 p1 orange actsetn">
                                <span>1%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <span>Right answers</span>
                        </div>
                        </div>
                           </div>
                           
                              <?php } else{?>
                            <?php }?> 
                           
                       
                         
                       </div>
                        
                    </div>
               <div class="order-sm-1 order-md-2 col-md-8 col-xl-9">
                <div class="row">
                    <?php if($geturlsubject->sub_id == 11){ ?>
                        <div class="col-md-12 col-md-12 col-xl-12">
                            <div class="new-pro-add">
										    <div class="volt-variable-area">
                                             <div class="volt-product-color">
                                                <label> Course Month -</label>
                                                <select class="form-control" id="select-by-color">
                                                <option value="">Month 1 </option>
                                                <option value="">Month 2 </option>
                                                <option value="">Month 3</option>
                                                <option value="" selected="">Month 4</option>
                                                <option value="">Month 5</option>
                                                <option value="">Month 6</option>
                                                <option value="">Month 7</option>
                                                <option value="">Month 8</option>
                                                <option value="">Month 9</option>
                                                <option value="">Month 10</option>
                                                <option value="">Assessment 1</option>
                                                <option value="">Assessment 2</option>
                                            </select>
                                         </div>
                                     </div>
						       </div>
                        </div>
                    <?php } ?>       
                    <?php  if (is_array($getmodules) && count($getmodules) > 0)  { 
                    $i=1; foreach ($getmodules as $moduleslist) { 
                    if($moduleslist['m_url']){
                                $link = $moduleslist['m_url'];
                            }else{
                            $link =  base_url('subject/'.$geturlsubject->slug.'/class'.$geturlclass->class_id.'/'. $moduleslist['slug']); 
                            }    
                    
                    
                    ?> 
                    
                    
                    
                    
                    
                       <div class="col-sm-6 col-xl-3">
                           
                        
                           
                           
                           
                        <a href="<?=$link?>"> 
                            
                            
                            
                            
                        <div class="single-class subject-list bgdata<?php echo $i;?> wow fadeInUp" data-wow-delay=".<?php echo $i;?>">
                        <?php if(!empty($moduleslist['m_img'])){ ?>
						<img class="m-w-m-h-modules" src="<?=base_url()?>/master/uploads/modulebanner/<?php echo $moduleslist['m_img'];?>" alt="">
                        <?php }else{ ?>
                        <img class="m-w-m-h-modules" src="<?=base_url()?>/master/uploads/noimage.png">
                        <?php } ?>                                  
                        <div class="volt-intro mh-80">
                                <div class="volt-modules">
                                    <h3><?=$moduleslist['m_name']?></h3>
                                </div>
                        </div>
                        </div>
                        </a>
                    </div>
                <?php $i++;} }else{    ?>
                   <div class="col-md-12">
                      <h2 class="font-sky text-center" style="padding: 50px 0;"> There are no modules yet</h2>
                   </div>
                 <?php } ?>  
                  </div>
                </div>
            </div>  </div>
        </div>
    </section>

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














