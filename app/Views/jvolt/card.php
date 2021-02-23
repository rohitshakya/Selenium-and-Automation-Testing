<?php 
$db = \Config\Database::connect();
?>
<style>

.ActivityTitleUp {
	font-size: calc(1.2vw + 0.2vh + -0.6vmin);
	text-align: center;
	color: rgb(249, 249, 0);
	font-weight: 600;
	margin: 1.5vh 0 0.5vh;
}


.back-side {
	width: 30%;
	margin: 0 auto;
	position: absolute;
	margin: auto;
	left: 0;
	right: 0;
	top: -7%;
	bottom: 0;
}

.myCarousel2_layout {
	width: 100%;
    background: url(https://lite.volt.development.vivadevops.com/assets/bundles/img/board.jpg) no-repeat;
    background-size: 100% 100%;
    height: 66vh;
}

.formationsImg {
	position: absolute;
	right: 25vh;
	width: 25vh;
	height: 22vh;
	top: 64vh;
}

.item {
	margin-left: auto;
	margin-right: auto;
	vertical-align: middle;
	width: 60%;
	height: 50vh;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: auto;
}

.myCarousel2ItemImage {
	margin-left: auto;
	margin-right: auto;
	vertical-align: middle;
	width: 70%;
	height: 40vh;
	position: fixed;
	top: -8vh;
	bottom: 0;
	left: 0;
	right: 0;
	margin: auto;
}

#myCarousel2 .item {
	margin-left: auto;
	margin-right: auto;
	vertical-align: middle;
	width: 80%;
	height: 28vh;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	margin: auto;
	background-image: url(https://www.vivadigitalindia.net/schooliris/assets/img/letters_back_image_bg.png);
	margin-top: 23vh;
	background-size: 100% 100%;
}

.myCarouselActivityName {
	margin-right: auto;
	margin-top: 25vh!important;
	height: 70vh;
	position: absolute;
	top: 0;
	bottom: 0;
	margin-left: 9px;
	right: 0;
	margin: auto;
	z-index: 99;
	float: right;
}

.myCarouselActivityPosstion {
	float: right;
	width: 5vh;
	transform: rotate(180deg);
}



.alphabetImg {
	position: absolute;
    left: 12vh;
    width: 20vh;
    height: 12vh;
    top: 70%;
}

.textgradian {
    font-size: 9vh;
    background: -webkit-linear-gradient(#eee, #f70b0b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 800;
}

.lettersNameShow {
	position: absolute;
	top: 23vh;
	bottom: 0;
	left: 0vh;
	right: 0px;
	font-size: calc(1.2vw + 1.2vh + 1.4vmin);
	text-align: center;
	color: #fff;
}

.lettersred::first-letter {
	color: red;
	font-weight: 900;
}


:after,
:before {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}


.img-responsive {
	display: block;
	max-width: 100%;
	height: auto;
}

label {
	display: inline-block;
	max-width: 100%;
	margin-bottom: 5px;
	font-weight: 700;
}

.carousel {
	position: relative;
}

.carousel-inner {
	position: relative;
	width: 100%;
	overflow: hidden;
}

.carousel-inner>.item {
	position: relative;
	display: none;
	-webkit-transition: .6s ease-in-out left;
	-o-transition: .6s ease-in-out left;
	transition: .6s ease-in-out left;
}

@media all and (transform-3d),
(-webkit-transform-3d) {
	.carousel-inner>.item {
		-webkit-transition: -webkit-transform .6s ease-in-out;
		-o-transition: -o-transform .6s ease-in-out;
		transition: transform .6s ease-in-out;
		-webkit-backface-visibility: hidden;
		backface-visibility: hidden;
		-webkit-perspective: 1000px;
		perspective: 1000px;
	}
	.carousel-inner>.item.active {
		left: 0;
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
	}
}

.carousel-inner>.active {
	display: block;
}

.carousel-inner>.active {
	left: 0;
}


a.right {
    position: absolute;
    right: -18%;
    width: 6vh;
    top: 67%;
}

a.left {
	position: absolute;
	left: -15%;
	width: 6vh;
	height: 6vh;
	top: 67%;
}

@media screen and (min-device-width: 200px) and (max-device-width: 768px) {
	a.right {
		position: absolute;
		right: -10%;
		width: 6vh;
		height: 6vh;
		top: 44%;
	}
	a.left {
		position: absolute;
		left: -10%;
		width: 6vh;
		height: 6vh;
		top: 44%;
	}
}



</style>

<div class="order-sm-1 order-md-2 col-md-12 col-xl-6 offset-1 crd">
	<div class="row">
		<div class="col-md-12">
			<div class="row justify-content-center wow fadeInUp">
				<div class="col-lg-4 col-xl-12">
					<section class="myCarousel2_layout">

					</section>
				</div>
			</div>  
		</div>
	</div>
</div>
<div class="order-sm-1 order-md-2 col-md-2 col-xl-2 crds">
	<div class="blog-sidebar">
		<div class="sin-sidebar bradius10 border1">
			<ul class="cat-post border1 padding15">
				<?php 
				$activityListVal = array();
				foreach($card as $list){ if($list['type']=="textImgAud"){ 
				$activityListVal []= $list;	
				}}
				$checkData = $db->query("select type from list where flag=0 and set_id=".$qid." and type in ('textImgAud','mcq','vid') group by type ORDER BY FIELD(type,'textImgAud','mcq','vid')")->getResultArray();
				foreach($checkData as $v){
				if($v['type']== "textImgAud"){
				 ?>
				<li>
					<a href="javascript:;" data-id="<?=$qid?>" data-key="start" onclick="return loadIframepages(<?=$qid?>)" class="fsize-18 vl" id="ltr">
					</a>
				</li>
				<?php } if($v['type']=="mcq"){  ?>
				<li>
					<a href="javascript:;" data-id="<?=$qid?>" onclick="loadActivityletter(this)" class="fsize-18 vl">Activity</a>
				</li>
				<?php } if($v['type']=="vid"){  ?>
				<li>
					<a href="javascript:;" data-id="<?=$qid?>" data-key="Capital" onclick="loadIframepagecapital(this)" class="fsize-18 vl">Formations</a>
				</li>
				<?php } }  ?>
			</ul>
		</div>
	</div>
</div>
<script>
var dbn = <?=json_encode($activityListVal)?>;
loadIframepagecard();
function loadIframepagecard() {
		
		var ff = "";
        var acts = JSON.parse(dbn[0]['3d_list']);
        var img = JSON.parse(acts.image);
        var aui = JSON.parse(acts.audio);
        var title = JSON.parse(acts.title);
		$("#ltr").text("Letter "+$(dbn[0]['question']).text());

        ff += '<p class="ActivityTitleUp" id="ActivityTitleUp">Letter '+$(dbn[0]['question']).text()+'</p>'+
			'<div class="alphabetImg">'+
				'<span class="textgradian">'+$(dbn[0]['question']).text()+'</span>'+
			'</div>'+
			'<div class="back-side">'+
			'<div class="carousel slide" id="myCarousel2" data-interval="false">'+
				'<div class="carousel-inner">';
        $.each(img, function(zrs, sddh) {
			var active = "";
			if (zrs == 0) {
				active = "active";
			}
            ff += 
            '<div class="item ' + active + '" data-url="' + MEDIA_UPLOAD_URL + 'uploads/list_aud/' + aui[zrs] + '">'+
               '<div class="col-lg-12">'+
                  '<a href="javascript:void(0)">'+
                     '<img style="background-color: transparent;" src="' + MEDIA_UPLOAD_URL + 'uploads/list_pic/' + sddh + '" class="img-responsive border myCarousel2ItemImage">'+
                     '<p class="lettersNameShow lettersred">'+title[zrs]+'</p>'+
                  '</a>'+
               '</div>'+
		'</div>';
        });
        ff += '</div>'+
				'</div>'+
			'</div>';

		ff += '<div class="row justify-content-center" style="margin-top: 29%;">'+
				'<div class="col-md-3">'+
					'<a class="left" onclick="prev()" href="javascript:void(0)" data-slide="prev">'+
						'<img src="https://www.vivadigitalindia.net/schooliris/assets/img/prv.png"/>'+
					'</a>'+
				'</div>'+
				'<div class="col-md-3">'+
					'<a class="right" onclick="next()" href="javascript:void(0)" data-slide="next">'+
						'<img src="https://www.vivadigitalindia.net/schooliris/assets/img/nxt.png"/>'+
					'</a>'+
				'</div>'+
			'</div>';

		$('.myCarousel2_layout').html(ff);
}
		</script>