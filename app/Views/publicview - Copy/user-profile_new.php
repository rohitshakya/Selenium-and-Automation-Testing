<?php include("header.php"); ?>

<!-- edution BREADCRUMB AREA -->
<div class="breatcome_area" style="padding:150px 0 25px">
		<div class="container-fluid">
			<div class="col-md-12">
				<div class="breatcome_title">
					<div class="breatcome_title_inner">
						<h2>PROFILE</h2>
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
				
			<?=form_open('#', "id='updateprofile' autocomplete='off'");?>
			 <div class="row">
				 <div class="col-md-12" style="padding:0">
				 <div class="col-md-6">
				 			<label>Full Name</label>
							<?=form_input(['type'=>'text', 'name'=>'fullname', 'placeholder'=>'Your full name', 'class'=>'form-control', 'value'=>$getLogin->vc_name])?>
				 </div>	 
				 <div class="col-md-6">
				 			<label>Contact Number</label>
							<?=form_input(['type'=>'text', 'name'=>'contactnumber', 'readonly'=>true, 'placeholder'=>'Your mobile number', 'class'=>'form-control', 'value'=>$getLogin->vc_contact])?>
				 </div>
				 </div>

				 <div class="col-md-12" style="padding-top: 20px;">
				 			<label>Email ID</label>
							<?=form_input(['type'=>'text', 'name'=>'emailid', 'readonly'=>true, 'placeholder'=>'Your email id', 'class'=>'form-control', 'value'=>$getLogin->vc_email])?>
				 </div>

				 <div class="col-md-12"  style="padding: 20px 0 0 0;">
				 <div class="col-md-6">
				 <label>New Password</label>		
				 <?=form_password(['name'=>'newpassword', 'placeholder'=>'Create password', 'class'=>'form-control'])?>
				 </div>	 
				 <div class="col-md-6">
				 <label>Confirm Password</label>
				 <?=form_password(['name'=>'confirmpassword', 'placeholder'=>'Confirm password', 'class'=>'form-control'])?>
				 </div>
				 </div>
				 <div class="col-md-12" style="padding: 20px 0 0 0;">
				 <div class="col-md-6">
				 <label>Select Your Class</label>
				<?php 
				echo form_dropdown('classid', $classList, $getLogin->vc_class, ['class'=>'form-control','id'=>'classlist']);
				?>
				 </div>	 
				 <div class="col-md-6">
				 <label>Select Subject</label>
				 <?php
				echo form_dropdown('subjectid', $subjectList, $getLogin->vc_subject, ['class'=>'form-control']);
				?>
				 </div>
                   
                     
                <div class="col-md-6">
				 <label>Select Subject</label>
                    <select name="subjectid" id="getSubject" class="form-control">
                        <option value="">Select Subject</option>
                    </select>
				
				 </div>   
                     
               
				 <div class="col-md-12" style="padding: 20px 0 0 0;">
				 <div class="col-md-6 pull-left text-left">
				 <?=form_hidden('userid', $getLogin->vc_id)?>
				 	<?=form_submit('register','Update Profile', 'class="btn btn-warning cus_btn"');?>
				</div>
				<div class="col-md-6 alert alert-danger" id="profileError" style="display: none"></div>				
				</div>
			 </div>
			 <?=form_close();?> 

			</div>
		</div>
	</div>
</div>
<script>
      $("#classlist").change(function(e) {
          alert();
            e.preventDefault();           
            $.ajax({
                url: "<?php echo base_url();?>master/question/getsubjectselect",
                type: 'post',
                data: {'cid':$(this).val(),'sid':''},
                beforeSend:function(){
                  $("#getSubject").html("");                 
                },
                success: function(data) {
                    $("#getSubject").html(data);                   
                }
            });
        });
</script>
<?php include("footer.php"); ?>