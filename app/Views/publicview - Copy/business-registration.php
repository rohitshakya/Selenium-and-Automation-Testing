<?php include "header.php";?>
 <!--Breadcrumb area start-->
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
										</a> 
										<em class="fa fa-angle-right" style="color:white;"></em> 
                                        <a href="javascript:void(0);">
								        Business
										</a> 
										<em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc"> Registration</span> 
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
                <h1 class="area-heading font-per style-two">Admission Application</h1>
                <p class="heading-para">we promised you that, we always try to take care of your childdren.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="row">
                   <div class="admission-form contact-page-form">
                      <h6>Children Details</h6>
                       <form action="http://www.themeim.com/action_page.php">
                            <input name="firstname" placeholder="Childrens first name" type="text">
                            <input name="lastname" placeholder="Childrens last name" type="text">
                            <input name="firstname" placeholder="Child Birth Date(DD/MM/YY)" type="text">
                            <input name="firstname" placeholder="Gender" type="text">
                            <input name="firstname" placeholder="Class" type="text">
                        </form>
                   </div>
                </div>
                 <div class="row">
                   <div class="admission-form contact-page-form">
                      <h6>Parents Details</h6>
                       <form action="http://www.themeim.com/action_page.php">
                            <input name="firstname" placeholder="Fathers name" type="text">
                            <input name="lastname" placeholder="Mothers name" type="text">
                            <input name="lastname" placeholder="Occupation" type="text">
                            <input name="firstname" placeholder="Phone" type="text">
                            <input class="full-width" name="firstname" placeholder="Address line 1" type="text">
                            <input class="full-width" name="firstname" placeholder="Address line 2" type="text">
                            <textarea name="subject" placeholder="Write something.." style="height:280px"></textarea>
                            
                            <input value="Submit Application" type="submit">
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php";?>