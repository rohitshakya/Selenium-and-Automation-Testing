<?php 
$db = \Config\Database::connect();

include( "header.php"); ?>
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
										<a href="<?=base_url("/jr")?>">
											<img class="homebtn" src="https://volt.vivadevops.com/assets/publicassets/assets/images/home.png" alt="">
										</a>	
										<em class="fa fa-angle-right" style="color:white;"></em>  <a href="<?=BASE_URL_JR?>/modules/<?=encrypt($classId)?>">
								        modules
										</a>
										<em class="fa fa-angle-right" style="color:white;"></em>  <a href="<?=BASE_URL_JR?>/activities/<?=encrypt($classId)."/".encrypt($modId)?>">
								       Activity</a> 
									   <em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"><?=$chapter['chapT_name']?>	</span> 
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
<section class="blog-page bgcover" id="voltbglayout1">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="row col-md-12 col-xl-12" id="xs">
				<div class="order-sm-2 order-md-1 col-md-4 col-xl-3">
					<div class="blog-sidebar">
					<div class="volt-sin-sidebar ">
                     <div class="single-news subjbg wow fadeInUp bgdata1" data-wow-delay=".3s">
                        <img class="m-w-m-h-modules-themes" src="<?=MEDIA_UPLOAD_URL."uploads/chapterbanner/".$chapter['chap_image'];?>" alt="">
                        <div class="volt-modules">
                           <h4><?=$chapter['chapT_name']?></h4>
                        </div>
                     </div>
                  </div>
				  <?php if(count($activity)>1){ ?>
						<div class="sin-sidebar bradius10 border1">
							<ul class="act-post border1 padding15" style="background-color: #e9f6fd;">
								<?php foreach($activity as $ac){ 
								$url ="play/".encrypt(strtolower($ac['type']))."/".encrypt("classId$classId&moId$modId&cId".$ac['id']);
								if($chapter['id']!=$ac['id']){
								?>
								<li><a href="<?="../../".$url?>" class="fsize-18"><?=$ac['chapT_name']?></a>
								</li>
								</li>
								<?php } } ?>
							</ul>
						</div>
				  <?php } ?>
					</div>
				</div>
				
				<?php 
				if($type=="ebookupload"){
					include("ebook.php");
				} else if($type=="vid"){
					include("video.php");
				} else if(($type=="mcq" or $type=="vid" or $type=="textimgaud") and $chapter['chapT_name']==LETTER){
					include("letter.php");
				} else if($type=="textimgaud"){
					
					include("flashcard.php");
				}
				?>
			</div>
		</div>
	</div>
</section>
<div class="wellcome-area-wrappers ht-75"></div>
<script>
var i = 0;
function loadIframepage(e){
	$('.crds').remove();
	  	var post = "qid="+$(e).data("id")+"&key="+$(e).data("key");
    $.ajax({
            url: base_url+"/JrMaster/GetViewModelVideo",
            type: 'POST',
			data:post,
            dataType: 'html',
            success: function (data) {
						$('.crds').show();
               		  $('.bx').hide();
					  $('.svd').hide();
					  $('.crd').hide();
					  $('.mcq').hide();
					  $('.vdoltr').hide();
					  
		$("#xs > div:nth-child(1)").after(data);
            },
			error:function (err,t,r) {
               console.log(err);
            }
        });
  
}

function loadIframepagecapital(e){
	
		$('.vdoltr').remove();
	  	var post = "qid="+$(e).data("id")+"&key="+$(e).data("key");
		
    $.ajax({
            url: base_url+"/JrMaster/GetViewModelVideoLetter",
            type: 'POST',
			data:post,
            dataType: 'html',
            success: function (data) {
						$('.vdoltr').show();
						$('.crds').show();
               		  $('.bx').hide();
					  $('.svd').hide();
					  $('.crd').hide();
					  $('.mcq').hide();
					  
		$("#xs > div:nth-child(1)").after(data);
            },
			error:function (err,t,r) {
               console.log(err);
            }
        });
  
}

function loadIframepages(e){
	
	$('.crd').remove();
	$('.crds').remove();
	$('.mcq').remove();

	  	var post = "qid="+e;
    $.ajax({
            url: base_url+"/JrMaster/GetViewModelCard",
            type: 'POST',
			data:post,
            dataType: 'html',
            success: function (data) {
						$('.crds').show();
               		  $('.svd').hide();
               		  $('.bx').hide();
               		  $('.vdoltr').hide();
		$("#xs > div:nth-child(1)").after(data);
            },
			error:function (err,t,r) {
               console.log(err);
            }
        });
  
}
function loadActivityletter(e){
	$(".mcq").remove();
	var post = "qid="+$(e).data("id");
	  $.ajax({
            url: base_url+"/JrMaster/GetViewModel",
            type: 'POST',
			data:post,
            dataType: 'html',
            success: function (data) {
				$('.crds').show();
               	  $('.bx').hide();
               	  $('.crd').hide();
               	  $('.vdoltr').hide();

				  $("#xs > div:nth-child(1)").after(data);
		
            },
			error:function (err,t,r) {
               console.log(err);
            }
        });
  
}

function next() {
	
	if ($('.carousel-inner').children().length - 1 > i) {
		$('.active').next().addClass('active');
		$('.active').prev().removeClass('active');
		 var audio = new Audio($('.active').data('url'));
		 audio.play();
		i++;
	}
}

function prev() {

	if ($('.carousel-inner').children().length > i && i > 0) {
		$('.active').prev().addClass('active');
		$('.active').next().removeClass('active');
		 var audio = new Audio($('.active').data('url'));
		 audio.play();
		i--;
	}
}
var audio = new Audio();
function popup(e) {
    $("#fl").hide();
    var $src = $(e).attr("src");
	console.log($('.active').data('url'));
    $("#fl-view").removeClass("box");
    $("#fl-view").find('#vi').attr("src", $src);
	audio = new Audio($(e).data('url'));
		audio.play();
}

function overlays(e) {
    $("#fl-view").addClass("box");
    $("#fl").show();
	audio.pause();
}
</script>
<?php include( "footer.php"); ?>