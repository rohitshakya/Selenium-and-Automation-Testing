<?php include(APPPATH."Views/publicview/header.php");?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/cartstyle.css'); ?>">
<!--Breadcrumb area start-->
<!--Breadcrumb area end-->
<section class="blog-page" id="voltbglayout1">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
    			<span class="toptitle">
    				Vivavolt <span> / Subscription</span>
    			</span>
    			<hr class="toplinner">
    		</div>
    	</div>

       <div class="row justify-content-center">
		<div class="col-md-7">

			<div class="row steprow">
				<div class="col-md-12 steparea">
					<span class="stepis">1</span>
					<span class="steptitle">Select a plan</span>
				</div>
				<div class="col-md-6 stepoptionarea ">
					<div class="row stepselection <?php echo (!empty(session('voltAccountkey')) && session('voltAccountType')==STUDENT)?'activearea':''; ?> <?php echo (empty(session('voltAccountkey')))?'choseplan activearea':''; ?>" data-plan="student" style="margin-left: 0; <?php echo (!empty(session('voltAccountkey')) && session('voltAccountType')!=STUDENT )?'opacity: 0.5':''; ?>">
						<div class="col-md-3">
							<input type="radio" name="packagefor" class="selector" checked="">
							<img class="stepicon" src="https://static.brainpop.com/images//store/general/icons/icn_family.svg" alt="">
						</div>
						<div class="col-md-8 stepdescrea">
							<strong>Students</strong>
							<p>Empower your child with at-home access to movies and quizzes</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 stepoptionarea">
					<div class="row stepselection  <?php echo (!empty(session('voltAccountkey')) && session('voltAccountType')==SCHOOL)?'activearea':''; ?> <?php echo (empty(session('voltAccountkey')))?'choseplan':''; ?>" data-plan="school" style="margin-right: 0; <?php echo (!empty(session('voltAccountkey')) && session('voltAccountType')!=SCHOOL )?'opacity: 0.5':''; ?>">
						<div class="col-md-3">
							<input type="radio" name="packagefor" class="selector" <?php echo (!empty(session('voltAccountkey')) && session('voltAccountType')==SCHOOL)?'checked=""':''; ?>>
							<img class="stepicon" src="https://static.brainpop.com/images//store/general/icons/icn_homeschool.svg" alt="">
						</div>
						<div class="col-md-8 stepdescrea">
							<strong>Schools</strong>
							<p>Empower your child with at-home access to movies and quizzes</p>
						</div>
					</div>
				</div>
			</div>


			<div class="row steprow">
				<div class="col-md-3 steparea" style="border-bottom: 1px dotted #bfbfbf; padding-bottom: 20px;">
					<span class="stepis">2</span> <span class="steptitle">Add your products</span>
				</div>
				<div class="col-md-9 steparea" style="border-bottom: 1px dotted #bfbfbf; padding-bottom: 20px;">
					<div class="row">
						<div class="col-md-1" style="line-height: 32px;">
							Filter
						</div>
						<div class="col-md-2" style="padding:0;">
						<select name="class" class="form-control filterdropdown" id="classlist">
							<option value="">Class</option>
							<?php if($classdropdown){ foreach($classdropdown as $getCls){ ?>
								<option value="<?php echo $getCls->class_id; ?>" <?php echo (session('voltAccountClass')==$getCls->class_id && session('voltAccountType')==STUDENT )?"selected":""; ?> ><?php echo $getCls->class_name; ?></option>
						<?php }}?>
						</select>
						</div>

						<div class="col-md-3 subfilter" style="padding:0 5px;">
						<select name="class" class="form-control filterdropdown"  id="subjectlist">
							<option value="">Subject</option>
							<?php if($subjectdropdown){ foreach($subjectdropdown as $getSub){ ?>
								<option value="<?php echo $getSub->sub_id; ?>"><?php echo $getSub->sub_name; ?></option>
						<?php }}?>
						</select>
						</div>
						<div class="col-md-3 subfilter" style="padding:0;">
						<select name="class" class="form-control filterdropdown"  id="terms" style="display: <?php echo (!empty(session('voltAccountkey')) && session('voltAccountType')==SCHOOL)?'block':'none'; ?>;">
							<option value="">Terms</option>
							<?php if($termsdropdown){ foreach($termsdropdown as $getTerm){ ?>
								<option value="<?php echo $getTerm->id; ?>"><?php echo $getTerm->title; ?></option>
						<?php }}?>
						</select>
						</div>
						<div class="col-md-3">
							<span class="billedyer" style="line-height: 32px;"><i class="fa fa-check"></i> Billed yearly</span>
						</div>
					</div>
				</div>
				<!-- TITLES -->
			
				<!-- LIST DATA -->
				<div class="col-md-12" id="filteredpackage"></div>
			</div>

		</div>
		<!--Events area end-->

		<!-- cart function -->
		<div class="col-md-5">

			<div class="sin-sidebar bdr-8">
				<span class="toptitle">Cart</span>
    			<hr class="toplinner">
				<!-- <div class="sidebar-heading">
					<h5>Cart</h5>
				</div> -->

				<div class="viva-show" id="addedcartlist"></div>
		</div>       
	</div>
           
           
            </div>
            

        </div>
    </section>
<!--Testimonial one area end-->
<?php include(APPPATH."Views/publicview/footer.php");?>
<script type="text/javascript" src="<?php echo base_url('assets/cartsystem.js'); ?>" ></script>