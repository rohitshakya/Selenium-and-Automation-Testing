<?php include "header.php";?>
<!--Breadcrumb start-->
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
								        <img class="homebtn" src="<?=base_url('assets/bundles/')?>/img/home.png" alt="">
										</a> 
                                       
										<em class="fa fa-angle-right" style="color:#ccc;"></em> 
                                        <span class="color-ccc">Contact Us</span> 
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
<!--Breadcrumb end-->

<!--contact us start-->
<section class="caontact-page">
    <div class="container-fluid">
        <div class="row justify-content-center no-gutters">
           <div class="col-lg-12 col-xl-10">
               <div class="row">
                  
                   <div class="col-lg-6">
                       <div class="contact-page-form">
                           <h3 class="font-h">Get In Touch</h3>
                            <form class="row" action="#" id="contact-form" method="post">
                                <div class="col-lg-12">
                                <input type="text"  name="name" placeholder="Full name..">
                                </div>
                                <div class="col-lg-12">
                                 <input type="text"  name="email" placeholder="Your Email..">
                                </div>
                                <div class="col-lg-12">
                                <input type="text" name="phone" placeholder="Your contact Number..">
                                </div>
                                <div class="col-lg-12">
                                <textarea id="subject" name="message" placeholder="Write something.."></textarea>
                                </div>
                                <div class="col-lg-12">
                                <button class="btn submit-btn" type="submit" >Send Message</button>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                   </div>
                   
                   
                   
                   
                   
                   <div class="col-lg-6">
                      <div class="con-page-info">
                            <h3>Contact Information.</h3> 
                            <div class="con-page-right">
                                <div class="sin-line">
                                    <div class="sin-line-left">
                                        <h6>Headquarters</h6>
                                    </div>
                                    <div class="sin-line-right">
                                        <p><i class="fa fa-map-marker" ></i>4737/23, Ansari Road,Daryaganj<br> New Delhi 110002</p>
                                          <p><i class="fa fa-phone" ></i>Tel: 011 422 422 00</p>
                                        <p><i class="fa fa-phone" ></i>Fax: 011 422 422 40</p>
                                    
                                    </div>
                                </div>
                                <div class="sin-line">
                                    <div class="sin-line-left">
                                        <h6>Student Contact Center</h6>
                                    </div>
                                    <div class="sin-line-right">
                                          <p><i class="fa fa-envelope" ></i>E-mail: support@vivavolt.in</p>
                                    </div>
                                </div>
                                <div class="sin-line">
                                    <div class="sin-line-left">
                                        <h6>For Any Business Enquiry</h6>
                                    </div>
                                    <div class="sin-line-right">
                                        <p><i class="fa fa-envelope" ></i>E-mail: contact@vivavolt.in</p>
                                    
                                    </div>
                                </div>
                                <div class="sin-line">
                                    <div class="sin-line-left">
                                        <h6>For Any Business Enquiry</h6>
                                    </div>
                                    <div class="sin-line-right">
                                         <p><i class="fa fa-envelope" ></i>E-mail: report@vivavolt.in</p>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                   
               </div>
           </div>
        </div>
    </div>
</section>
 <!--contact us end-->

<?php include "footer.php";?>
