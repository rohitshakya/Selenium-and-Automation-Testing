<style>

.activitys img {
	width: 25vh!important;
	height: 19vh!important;
}

.SingleClimg {
	float: left;
	margin-left: 48vh!important;
}

.card-list-act {
	width: 100%;
	height: 44vh;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: auto;
}


.activitys {
	display: inline-block;
	width: 13vw;
	background: url(https://www.vivadigitalindia.net/schooliris/assets/img/activity.png) no-repeat;
	background-size: 100% 100%;
	margin: 0.4rem;
	font-size: 1rem;
	text-decoration: none;
	position: relative;
	transition: all 0.65s ease;
	padding: 3vh;
}
.Singleactivitysimg{
padding: 9vh!important;	
}
.ActivityImage {
	width: 100%;
	height: 8vh;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: auto;
}

.ActivityTitle {
	color: #d86838;
	width: 100%;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 4vh;
	font-size: calc(0.8vw + 0.8vh + 1.8vmin);
	font-family: Pascal;
	text-align:center;
	line-height: 43px;
}

#wrong {
	color: #d86838;;
	font-size: 26px;
	display: none;
	width: 100%;
	float: left;
	text-align:center;
	    margin-top: 30px;
}

#right {
	color: #d86838;;
	font-size: 26px;
	display: none;
	width: 100%;
	float: left;
	text-align:center;
	    margin-top: 30px;
}


.TextImgsCenter {
    margin: auto;
    width: 80%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 8vw;
    font-weight: 800;
    font-family: Pascal;
}

.atagc {
    color: #990000 !important;
    text-decoration: none !important;
}
.congrulation_img{
	width:65%;
}
</style>

<div class="order-sm-1 order-md-2 col-md-12 col-xl-6 offset-1 mcq">
					<div class="row">
						<div class="col-md-12">
                        <div class="row justify-content-center wow fadeInUp">
                    <div class="col-lg-4 col-xl-12">
                       <div class="card-list-act overlay-content">

					</div>
                    </div>
                    </div>  
						</div>
					</div>
				</div>
<script>
var base_url = '<?=base_url()?>';
var rws = <?=json_encode($list)?>;
var count=0;
var cou=0;
loadActivity();
function loadActivity() {

	count=rws.length;
	
	if(count>0){
	var dscs = rws[cou];
	
	var que = dscs.multichoice;
	var ans = dscs.answer;
	var qu = dscs.question;
	var imgurl = (dscs.imgurl!=null)?dscs.imgurl:"";
	var cl = "activitys";
	var cntrimg = "TextImgsCenter";
	if(imgurl!=""){
		cl = "activitysimg";
		var climg = "activitys";
		cntrimg = "center_textsimg";
	} else {
		cl = "activitys";
		cntrimg = "TextImgsCenter ";
	}
	$('.overlay-content').html("");
	
	var ff = '<p class="ActivityTitle">'+qu+'</p><span class="'+climg+' SingleClimg">'+imgurl.replace('/lotus/VivaApp/mini-kg/mini/assets/ckeditor_wiris/ckeditor4/kcfinder/upload/images/',base_url+'/lotus/VivaApp/mini-kg/mini/assets/ckeditor_wiris/ckeditor4/kcfinder/upload/images/')+'</span>';
	$.each(que, function (zs, ce) {
		console.log(ce);
		if(ce!=""){
			if(ce.indexOf("assets/ckeditor_wiris/") != -1){
					ff += '<div class="'+cl+'">' +
						"<a class='activity-image atagc'  href='javascript:void(0)' data-value=" +ans+ " onclick='return checkAnsImg(this)'>" +
						'<img class="ActivityImage" src="'+ce+ '" />' +
						'</a>' +
						'</div>';
						} else {
						
				        ff += '<div class="'+cl+' Singleactivitysimg">' +
						"<a class='activity-image atagc'  href='javascript:void(0)' data-value='" + ans + "' onclick='return checkAns(this)'>" +
						'<p class="'+cntrimg+'"><span>' + ce + '</span></p>' +
						'</a>' +
						'</div>'; 
				        } 
		}
		
	});
	ff += '<p id="wrong">Oops! Wrong answer. Try again.</p><p id="right">Right answer.</p>';
	$('.overlay-content').html(ff);
	
	}
}

var rightansr = new Audio(base_url+'/assets/bundles/audio/right_ans.mp3');
var wrongansr = new Audio(base_url+'/assets/bundles/audio/wrong_ans.mp3');
function checkAns(e) {
	if($(e).data('value')==$(e).children().find('span').text()){
		cou++;
		if(cou < count){
		$('#right').show();
		$('#wrong').hide();
		wrongansr.pause();
		rightansr.play();
		setTimeout(function(){ loadActivity(); }, 3000);
		
		} else {
			$('#right').show();
			wrongansr.pause();
		    rightansr.play();
		$('#wrong').hide();
			setTimeout(function(){
			$('.overlay-content').html("");
			var cong = '<p class="congrulationTitle" id="congrulationTitle"></p><label class="congrulation_close" onclick="closeIframe()"></label><img class="congrulation_img" src="'+base_url+'/assets/bundles/images/congra.gif" onclick="rel();" /></div>';
			$('.overlay-content').html(cong);
			 }, 500);
		}
	} else {
		
		$('#right').hide();
		$('#wrong').show();
		rightansr.pause();
		wrongansr.play();
		
	}
}

function checkAnsImg(e) {
	if($(e).data('value')==$(e).find('img').attr('src')){
		cou++;
		if(cou < count){
		$('#right').show();
		$('#wrong').hide();
		wrongansr.pause();
		rightansr.play();
		setTimeout(function(){ loadActivity(); }, 1000);
		
		} else {
			$('#right').show();
			wrongansr.pause();
			rightansr.play();
		$('#wrong').hide();
			setTimeout(function(){
			$('.overlay-content').html("");
			var cong = '<p class="congrulationTitle" id="congrulationTitle"></p><label class="congrulation_close" onclick="closeIframe()"></label><img class="congrulation_img" src="'+base_url+'/assets/bundles/images/congra.gif" onclick="rel();" /></div>';
			$('.overlay-content').html(cong);
			 }, 500);
		}
	} else {
		
		$('#right').hide();
		$('#wrong').show();
		 rightansr.pause();
		 wrongansr.play();
		
	}
}
</script>                