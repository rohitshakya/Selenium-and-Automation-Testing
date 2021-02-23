<!-- BREADCRUMB AREA -->
<div class="breatcome_area" style="padding: 25px 0 50px;"></div>
<div class="admision_area about_page" id="admission">
	<div class="container">
		<div class="row">
			<!--Start Your Coad-->
			<?php if (count($qns_data_audio) > 0) { 
				$audkey = ($this->input->get('lk'))?$this->input->get('lk'):0;
				?>
				<div class="col-md-9 newactivityarea  bdr-rignt" id="audio">
				<div class="act-qtion">
									<h3><?php echo $qns_data_audio[$audkey]['question']; ?></h3>
								</div>
				<div id="audioArea" style="max-width:600px;">
				    <img class="img-custom" src="<?=base_url("assets/publicassets/assets/images/listen_background.gif")?>">
				    <audio autostart="false" preload="" id="audio1" controls="controls" src="<?=base_url('master/'.$qns_data_audio[$audkey]['url'])?>" style="width: 100%; max-height: 300px;">Your browser does not support  Audio!</audio>
				</div>	
				
				<div class="excbuttons1" id="buttons">
								<?php  ?>
									<a href="<?=base_url('playactivity/'.$qns_data_audio[$audkey]['set_id'].'/'.$audpageurl);?>" class="btn blue">Play Activity</a>							
								</div>
				</div>
			<?php } ?>

			<!-- Exercise menu start -->
			<div class="col-md-3">
				<div class="ex-area">
					<div class="list-group">
						<button type="button" class="list-group-item list-group-item-action active">Exercises</button>
						<?php if (count($qns_data_audio) > 0) {
							foreach ($qns_data_audio as $akey => $aval) {
								$lnum = $akey+1;
								$act_cat = ($aval['id'] == $qns_data_audio[$audkey]['id']) ? 'act-cat' : '';
								echo '<a class="box-a ' . @$act_cat . ' list-group-item list-group-item-action" href="' . base_url('playaudio/'.$aval['set_id'].'/'.$audpageurl.'&lk='.$akey) . '" id="' . $aval['id'] . '" data-setids="' . $aval['set_id'] . '" > Listening '. $lnum . '</a>';
							}
						} ?>
					</div>
				</div>
			</div>




			<?php if (empty($qns_data_audio)) { ?>
				<div class="no-data">
					<p>Data not found</p>
				</div>
			<?php
			} ?>

		</div>
	</div>