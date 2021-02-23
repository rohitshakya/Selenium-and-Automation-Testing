<?php include("header.php"); ?>

<!-- edution BREADCRUMB AREA -->
<div class="breatcome_area" style="padding:150px 0 25px">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="breatcome_title">
					<div class="breatcome_title_inner">
						<h2>SCORE REPORT</h2>
						<div class="breatcome_content">
							<ul>
								<li>YOUR ACCOUNT MANAGEMENT</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<div class="admision_area about_page" id="admission" style="padding-top: 70px">
	<div class="container-fluid" style="max-width:1350px;">
		<div class="row">
			<div class="col-md-3 col-xs-12 col-sm-4 usersidebar">
				<?php include('user-menu.php'); ?>
			</div>
		<div class="col-md-9 col-xs-12 col-sm-8">

				<div id="updatereport" style="font-size: 20px;">

					<table class="table">
    <thead>
      <tr>
		<th>Class</th>
		<th>Subject</th>
        <th>Course</th>
		<th>Question</th>
		<th>Right</th>
		<th>Wrong</th>
        <th>Skip</th>  
		<th>Average</th>
      </tr>
    </thead>
    <tbody>
		<?php
		 if($activity){
			foreach($activity as $getReport){			?>
     <tr>
		<td><?=$getReport->class?></td>
        <td><?=$getReport->subject?></td>
		<td><?=$getReport->course?></td>
		<td><?=$getReport->total_attempt?></td>
		<td><span class="badge" style="background: #5ec500; font-size: 20px;border-radius: 4px;"><?=$getReport->right_attempt?></span></td>
		<td><span class="badge" style="background: #c50000; font-size: 20px;border-radius: 4px;"><?=$getReport->wrng_attempt?></span></td>
          
         <td><span class="badge" style="background: #c50000; font-size: 20px;border-radius: 4px;"><?=$getReport->total_attempt - $getReport->wrng_attempt - $getReport->right_attempt?></span></td> 
      
		<td><span class="badge" style="background: #c55b00; font-size: 20px;border-radius: 4px;"><?=($getReport)?round($getReport->right_attempt*100/$getReport->total_attempt):0?>%</span></td>
	  </tr>
		<?php }}?>
    </tbody>
  </table>


				</div>

			</div>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>