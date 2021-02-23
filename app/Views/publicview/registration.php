<?php include "header.php";?>
<style>
.viva-select {
    width: 100%;
    float: left;
    border-radius: 10px;
    height: 48px;
    border: 1px solid #e1e1e1;
    background: #f6f6f6;
    padding-left: 17px;
    margin-bottom: 24px;
    font-size: 18px;
}

</style>
<!--Breadcrumb area start-->
<?php  $validation =  \Config\Services::validation();?>

<?php \Config\Services::validation()->listErrors(); ?>
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
										</a>	<em class="fa fa-angle-right" style="color:white;"></em>  <a href="javascript:void(0);">
								        Account
										</a> 	<em class="fa fa-angle-right" style="color:#ccc;"></em>  <span class="color-ccc"> Registration</span> 
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
<div class="admission-process-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="area-heading font-per style-two">Registration  Form</h1>
				<p class="heading-para">we promised you that, we always try to take care of your childdren.</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-8">
				<div class="row">
					<div class="admission-form contact-page-form">


				<?php
				
				   if(session()->get('msg')){?>
					   <div class="alert alert-primary" role="alert">
					<?= session()->getFlashdata('msg') ?>
				  </div>
				 <?php  }
				
				?>
				
				
					<form action="<?=base_url()?>/Publicmodule/Createaccount" id="contact-form" enctype="multipart/form-data" method="post">
							<div class="row">
								<div class="col-sm-6">
								<span class=" text-danger "><?= $validation->getError('fullname'); ?></span>	
									<input class="mt-2" name="fullname"  placeholder=" first name" type="text" >
								
							

								</div>
								<div class="col-sm-6">
								<span class="text-danger "><?= $validation->getError('lastname'); ?></span>
									<input name="lastname" class="mt-2" placeholder=" last name" type="text"  >
									
								</div>
								<div class="col-sm-6">
								<span class="text-danger "><?= $validation->getError('school'); ?></span>
									<input class="mt-2" name="school" placeholder="school name" type="text" >
									
								</div>
								<div class="col-sm-6">
								<span class="text-danger ">	<?= $validation->getError('classlist'); ?></span>
									<input name="classlist" class="mt-2" placeholder=" class name" type="text" >
								
								</div>
								<div class="col-sm-6">
								<span class="text-danger "><?= $validation->getError('subjectlist'); ?></span>
									<input class="mt-2" name="subjectlist" placeholder=" subject name" type="text"  >
								
								</div>
                                <div class="col-sm-6">
								<span class="text-danger "><?= $validation->getError('contactnumber'); ?></span>
									<input name="contactnumber" class="mt-2" placeholder="mobile number" type="text"  >
									
								</div>
                                <div class="col-sm-6">
								<span class=" text-danger "><?= $validation->getError('emailid'); ?></span>
									<input name="emailid" class="mt-2" placeholder="email" type="text"  >
								
								</div>
                                <div class="col-sm-6">
								<span class=" text-danger "><?= $validation->getError('reusepassword'); ?></span>
									<input name="reusepassword" class="mt-2" placeholder="Password" type="password" >
								
								</div>
                                <div class="col-sm-6">
								<span class="mb-2 text-danger "><?= $validation->getError('dob'); ?></span>
									<input name="dob" placeholder="Date of Birth" type="date" >
								
								</div>
                                <div class="col-sm-6">
								<select name="gender" class="viva-select"  >
                                <option value="0">gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                   </select>
								   <span class="mb-2 text-danger "><?= $validation->getError('gender'); ?></span>
								</div>
                                <div class="col-sm-6">
								<span class=" text-danger "><?= $validation->getError('city'); ?></span>
									<input name="city" class="mt-2" placeholder="city" type="text" >
								
								</div>
                                <div class="col-sm-6">
								<span class=" text-danger "><?= $validation->getError('state'); ?></span>
									<input name="state" class="mt-2" placeholder="state" type="text" >
									
								</div>

							</div>
                            <button class="btn submit-btn" type="submit" >Register</button>

						
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "footer.php";?>