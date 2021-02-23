<?php include "header.php";?>

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
			<?php include 'user-menu.php';?>
			</div>
			<div class="col-md-9 col-xs-12 col-sm-8">

			<?=form_open('#', "id='updateprofile' autocomplete='off'");?>
			 <div class="row">
				 <div class="col-md-12" style="padding:0">
				 <div class="col-md-6">
				 		<label>Full Name</label>
						<?=form_input(['type' => 'text', 'name' => 'fullname', 'placeholder' => 'Full Name', 'class' => 'form-control', 'required' => 'true', 'value' => $getLogin->vc_name])?>
				 </div>
				 <div class="col-md-6">
				 		<label>Last Name</label>
						<?=form_input(['type' => 'text', 'name' => 'lastname', 'placeholder' => 'Last Name', 'class' => 'form-control', 'value' => $getLogin->vc_lastname])?>
				 </div>

				 </div>

				 <div class="col-md-6" style="padding-top: 20px;">
				 		<label>Email ID</label>
						<?=form_input(['type' => 'text', 'name' => 'emailid', 'placeholder' => 'Email id', 'class' => 'form-control', 'required' => 'true', 'value' => $getLogin->vc_email])?>
				 </div>
				 <div class="col-md-6" style="padding-top: 20px;">
				 		<label>Contact Number</label>
						<?=form_input(['type' => 'text', 'name' => 'contactnumber', 'maxlength'=>'10','placeholder' => 'Mobile Number', 'class' => 'form-control', 'required' => 'true', 'value' => $getLogin->vc_contact])?>
				 </div>

				 <div class="col-md-12"  style="padding: 20px 0 0 0;">
				 <div class="col-md-6">
				 <label>New Password</label>
				 <?=form_password(['name' => 'newpassword', 'placeholder' => 'Create password', 'class' => 'form-control'])?>
				 </div>
				 <div class="col-md-6">
				 <label>Confirm Password</label>
				 <?=form_password(['name' => 'confirmpassword', 'placeholder' => 'Confirm password', 'class' => 'form-control'])?>
				 </div>
				 </div>

				 <div class="col-md-12" style="padding: 20px 0 0 0;">
				 <div class="col-md-6">
				 	<label>Section (Class)</label>
					<?=form_input(['type' => 'text', 'name' => 'lastname', 'placeholder' => 'Section (Class)', 'readonly' => 'true', 'class' => 'form-control', 'value' => $getLogin->vc_sectionclass])?>
				 </div>
				 <div class="col-md-6">
					 <label>Gender</label>
					 <select name="gender" class="form-control">
					    <option disabled >Select Gender</option>
                        <option value="male" <?php echo ('male' == $getLogin->vc_gender) ? "selected" : ""; ?>>Male</option>
                        <option value="female" <?php echo ('female' == $getLogin->vc_gender) ? "selected" : ""; ?>>Female</option>
                     </select>

				 </div>
				</div>

				 <div class="col-md-12" style="padding: 20px 0 0 0;">

				 <div class="col-md-6">
				 <label>Your Class</label>
                 <select name="classid" class="form-control">
                        <option value="<?=$getLogin->vc_class?>"><?php echo $db->query("select class_name from mastar_class where class_id =" . $getLogin->vc_class)->getRow()->class_name ?></option>

                     </select>

				 </div>


                <div class="col-md-6">
				 <label>Your Subject</label>
                 <select name="subjectid" class="form-control">
                        <option value="<?=$getLogin->vc_subject?>"><?php echo $db->query("select sub_name from mastar_subject where sub_id =" . $getLogin->vc_subject)->getRow()->sub_name ?></option>

                     </select>

				 </div>

				 </div>
				 <div class="col-md-12" style="padding: 20px 0 0 0;">
				 <div class="col-md-6 pull-left text-left">
				 <?=form_hidden('userid', $getLogin->vc_id)?>
				 	<?=form_submit('register', 'Update Profile', 'class="btn btn-warning cus_btn"');?>
				</div>
				<div class="col-md-6 alert alert-danger" id="profileError" style="display: none"></div>
				</div>
			 </div>
			 <?=form_close();?>

			</div>
		</div>
	</div>
</div>

<?php include "footer.php";?>