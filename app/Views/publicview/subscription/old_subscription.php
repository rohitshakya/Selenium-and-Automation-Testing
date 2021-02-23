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
		<div class="col-md-8">
			<div class="row steprow">
				<div class="col-md-12 steparea">
					<span class="stepis">1</span>
					<span class="steptitle">Select a plan <?php print_r(session('voltSchoolkey')); ?> </span>
				</div>
				<div class="col-md-6 stepoptionarea ">
					<div class="row stepselection <?php echo (!empty(session('voltAccountkey')) && empty(session('voltSchoolkey')))?'activearea':''; ?> <?php echo (empty(session('voltAccountkey')) && empty(session('voltSchoolkey')))?'choseplan activearea':''; ?> " data-plan="student" style="margin-left: 0; <?php echo (empty(session('voltAccountkey')) && !empty(session('voltSchoolkey')))?'opacity: 0.5':''; ?>">
						<div class="col-md-3">
							<input style="display: inline-block;" type="radio" name="packagefor" class="selector">
							<img class="stepicon" src="https://static.brainpop.com/images//store/general/icons/icn_family.svg" alt="">
						</div>
						<div class="col-md-8 stepdescrea">
							<strong>Students</strong>
							<p>Empower your child with at-home access to movies and quizzes</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 stepoptionarea">
					<div class="row stepselection <?php echo (empty(session('voltAccountkey')) && !empty(session('voltSchoolkey')))?'activearea':''; ?> <?php echo (empty(session('voltAccountkey')) && empty(session('voltSchoolkey')))?'choseplan':''; ?>" data-plan="school" style="margin-right: 0; <?php echo (!empty(session('voltAccountkey')) && empty(session('voltSchoolkey')))?'opacity: 0.5':''; ?>">
						<div class="col-md-3">
							<input style="display: inline-block;" type="radio" name="packagefor" class="selector">
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
				<div class="col-md-4 steparea" style="border-bottom: 1px dotted #bfbfbf; padding-bottom: 20px;">
					<span class="stepis">2</span> <span class="steptitle">Add your products</span>
				</div>
				<div class="col-md-8 steparea" style="border-bottom: 1px dotted #bfbfbf; padding-bottom: 20px;">
					<div class="row">
						<div class="col-md-1" style="line-height: 32px;">
							Filter
						</div>
						<div class="col-md-4">
						<select name="class" class="form-control filterdropdown" id="classlist">
							<option value="">Class</option>
							<?php if($classdropdown){ 
								foreach($classdropdown as $getCls){
									$cls = ($getLogin)?$getLogin->vc_class:'';
								 ?>
								<option value="<?php echo $getCls->class_id; ?>" <?php echo ($cls>0 && $cls==$getCls->class_id)?'selected':''; ?> ><?php echo $getCls->class_name; ?></option>
						<?php }}?>
						</select>
						</div>

						<div class="col-md-4">
						<select name="class" class="form-control filterdropdown"  id="subjectlist">
							<option value="">Subject</option>
							<?php if($subjectdropdown){ foreach($subjectdropdown as $getSub){ ?>
								<option value="<?php echo $getSub->sub_id; ?>"><?php echo $getSub->sub_name; ?></option>
						<?php }}?>
						</select>
						</div>
						<div class="col-md-3">
							<span class="billedyer" style="line-height: 32px;"><i class="fa fa-check"></i> Billed yearly</span>
						</div>
					</div>
				</div>
				<!-- TITLES -->
				<div class="col-md-12 packagelisttitle">
					<div class="titlebox">
						Product
					</div>
					<div class="titlebox">
						Class
					</div>
					<div class="titlebox">
						Subjects
					</div>
					<div class="titlebox">
						Amount
					</div>
					<div class="titlebox">
						Qty
					</div>
					<div class="titlebox">Cart</div>
					<div class="clearfix"></div>
				</div>
				<!-- LIST DATA -->
				<div class="col-md-12" id="filteredpackage">Data</div>
			</div>

		</div>
		<!--Events area end-->

		<!-- cart function -->
		<div class="col-md-4">

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
<script type="text/javascript">
	
		$(".activearea .selector").attr('checked', 'true');	
	
	
	function filterdata(){
		plan = $('.activearea').data('plan');
		classis = $('#classlist').val();
		subjectis = $('#subjectlist').val();
		$.ajax({
			type:'POST',
			url:'subscription/packagefilter',
			data:{plan:plan,classis:classis,subjectis:subjectis},
			beforeSend:function(){
				$("#filteredpackage").html('<p style="text-align:center; padding:10px 0;">Product Loading..</p>');
			},
			success:function(response){
				$("#filteredpackage").html(response);
			}
		});
	}
	function cartdatalist(){
		$.ajax({
			type:'POST',
			url:'subscription/cartdatalist',
			data:{plan:''},
			beforeSend:function(){
				$("#addedcartlist").html('<p style="text-align:center; padding:10px 0;">Your cart is loading..</p>');
			},
			success:function(response){
				$("#addedcartlist").html(response);
			}
		});
	}
	filterdata();
	cartdatalist();
	$(".choseplan").click(function(){
		var planis = $(this).data('plan');
		if(planis=='student'){
			$('.studentqty').css('display', 'block');
			$('.schoolqty').css('display', 'none');
		}
		else{
			$('.studentqty').css('display', 'none');
			$('.schoolqty').css('display', 'block');
		}
		$(".choseplan").find('input').attr('checked', false);
		$(".choseplan").removeClass('activearea');
		$(this).addClass('activearea');
		$(this).find('input').attr('checked', true);
		filterdata();
	});

	$(document).find(".activearea").trigger('click');
	$(".filterdropdown").change(function(){
		filterdata();
	});
	$(document).on('click', ".removeitem", function(){
		$clk = $(this);
		if(confirm("Do you want remove this product ?")==true){

			$.ajax({
			type:'POST',
			url:'subscription/removecart',
			data:{id:$(this).attr('id')},
			beforeSend:function(){
				$clk.css('display','none');
				//$("#addedcartlist").html('<p style="text-align:center; padding:10px 0;">Your cart is loading..</p>');
			},
			success:function(response){
				cartdatalist();
			}
		});
		}
	});
	var acceptnum = /^[0-9]+$/;
	$(document).on('change', ".updatecartqty", function(){
		currentinput = $(this);
        plan = $('.activearea').data('plan');
        var packcartid = currentinput.data('product');
        var qtyis = currentinput.val();
        $.ajax({
			type:'POST',
			url:'subscription/updatecart',
			data:{plan:plan,qtyis:qtyis,productis:packcartid},
			beforeSend:function(){
				//$(currentadd).css('background-color', '#868e96');
				//$(currentadd).html('<i class="fa fa-shopping-cart "></i> Please Wait');
			},
			success:function(response){
				cartdatalist();
			}
		});
	});

</script>