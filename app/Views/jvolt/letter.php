<style>
.card-list {
	display: block;
	margin: auto;
	padding: 0;
	font-size: 0;
	text-align: center;
	list-style: none;
	padding: 5% 5%;
}
.letters {
    display: inline-block;
    width: 100%;
    background-size: 100% 100%;
    margin: 2.4vh;
    text-decoration: none;
    position: relative;
    transition: all 0.65s ease;
}
.center_text {
	margin: auto;
	width: 80%;
	color: white;
	text-align: center;
	min-height: 10vh;
	display: flex;
	align-items: center;
	justify-content: center;
	font-size: 18px;
	font-weight: 800;
	line-height: normal;
}

.circle {
    width: 9vh;
    border: 5px solid hsl(0deg 0% 97%);
    padding: 0px;
    background: hsl(177deg 44% 38%);
    outline: 4px solid hsl(0, 0%, 60%);
    box-shadow: 0 0 0 10px hsl(0deg 0% 80%), 0 0 0 15px hsl(0deg 0% 90%);
}
</style>
<div class="order-sm-1 order-md-4 col-md-12 col-xl-6 offset-1 bx">
	<div class="row">
		<div class="col-md-12">
			<div class="row justify-content-center wow fadeInUp">
				<div class="col-lg-4 col-xl-12">
					<?php 
					$letter = $db->query("select c.*,q.id as qid from question as q join category_type as c on q.category= c.cat_id where class='$classId' and subject = '".SUBJECTID."' and module = '$modId' and chapterTitle = ".$chapter['id'])->getResultArray();
					foreach($letter as $r){ ?>
					<div class="letters circle">
						<a class="getVid letters-image" href="javascript:void(0)" data-id="<?=$r['qid']?>" data-key="start" onclick="return loadIframepage(this)">
							<p class="center_text">
								<span>
									<?=$r['cat_name']?>
								</span>
							</p>
						</a>
					</div>
					<?php } ?>
					
				</div>
			</div>  
		</div>
	</div>
</div>


