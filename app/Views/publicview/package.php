<?php include("header.php"); ?>
<link href="http://vivavolt.vivadigitalindia.net/assets/publicassets/course.css" rel="stylesheet" type="text/css" />
<!-- edution BREADCRUMB AREA -->
<div class="breatcome_area">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="breatcome_title">
				<div class="breatcome_title_inner">
					<h2>Volt Packages</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="admision_area about_page" id="admission" style="position:relative;">
	<div class="container" style="max-width:1350px">

		<!-- section title -->
		<div class="row">
		
				<div class="course-item-wrapper gap-20">
					<div class="GridLex-grid-noGutter-equalHeight">
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single_feature">
					<div class="feature_content_wrap" style="background:#1f3f82;">
						<div class="feature_content_inner">
							<div class="feature_content">
								<h2>Package One <br> <em class="fa fa-inr"></em> 599 </h2>
								<ul style="color:#FFF">
								    <li>Class 1-3</li>
								    <li>1 Years</li>
								</ul>
							</div>
							<div id="wrapper">

							<a href="#" class="my-super-cool-btn">
									<div class="dots-container">
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
									</div>
									<span>Subscribe</span>
								</a>

							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single_feature">
					<div class="feature_content_wrap" style="background:#1f3f82;">
						<div class="feature_content_inner">
							<div class="feature_content">
								<h2>Package Two <br> <em class="fa fa-inr"></em> 799 </h2>
								<ul style="color:#FFF">
								    <li>Class 4-7</li>
								    <li>1 Years</li>
								</ul>
							</div>
							<div id="wrapper">

							<a href="#" class="my-super-cool-btn">
									<div class="dots-container">
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
									</div>
									<span>Subscribe</span>
								</a>

							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="single_feature">
					<div class="feature_content_wrap" style="background:#1f3f82;">
						<div class="feature_content_inner">
							<div class="feature_content">
								<h2>Package Three <br> <em class="fa fa-inr"></em> 999 </h2>
								<ul style="color:#FFF">
								    <li>Class 8-12</li>
								    <li>1 Years</li>
								</ul>
							</div>
							<div id="wrapper">

							<a href="#" class="my-super-cool-btn">
									<div class="dots-container">
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
									</div>
									<span>Subscribe</span>
								</a>

							</div>
						</div>
					</div>
				</div>
			</div>
			
				</div>
			</div>
		
		
		
			
		</div>
	</div>


</div>
<script>
ls.setItem('typeis', 'no');
ls.setItem('idis', '1');

$('body').on('click', '.playvideo', function() {
  		$obj = $(this);  		
		$video_url = $obj.attr('data-video-url');	
		$('#play_video').find('.vid-player').attr('src', $video_url);
		$('#play_video').modal('show'); 
		$("#play_video video")[0].load(); 		
  		//console.log($video_url);
});
$('body').on('click', '.close-video', function() {	
	$("#play_video video")[0].pause(); 
	$('#play_video').find('.vid-player').attr('src', '#');
});
</script>

<!-- modal -->
<div id="play_video" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content col-md-12">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Play Video</h4>
            </div>
            <div class="modal-body">
				<video style="width:100%;" controls>
					<source class="vid-player" src="#" type="video/mp4">                       
					Your browser does not support HTML5 video.
				</video>				
            </div>
            <div class="modal-footer">                
                <button type="button" class="btn btn-default close-video" data-dismiss="modal">Close</button>
            </div>
        </div> 
    </div>
</div>
<?php include("footer.php"); ?>