<?php include "header.php";?>

<style>

.mtb-100 {

	margin: 100px 0px;

}

.error_volt{

    color:red;

}

.success_volt_con{

    color:green;

}

.text-center-d{

	text-align:center;

}

@media only screen and (max-width: 767px) {

.mt100-b50 {

margin: 0px 0px 0px 0px;

}

}

@media only screen and (min-width: 768px) {

.mt100-b50{

margin: 75px 0px 0px 0px;

}

}

.section_desc_link p {

    padding: 10px 0;

    font-size: 16px;

    line-height: 1.6;

    color: #666;

    text-align: center;

}

.resend-area {

  display: flex;

    width: 100%;

    height: 350px;

    margin: auto;

    border-radius: 10px;

}

.image-area{

    text-align: center;

    margin-bottom: 10px;

}

.invalid-section{

    width:100px;

}

</style>

<!-- BREADCRUMB AREA -->

<div class="admision_area about_page mt100-b50" id="admission">

    <div class="container">

        <div class="row padding-top">

            <div class="col-md-12">

                <div class="section_title_style2" style="text-align: left;">

                    <div class="breatcome2_content">

							<ul>

							  <li>

                                <a href="<?=base_url()?>/"><img class="homebtn" src="<?=base_url()?>/assets/publicassets/assets/images/home.png" class="img-fluid" alt=""></a> 

                                 <em class="fa fa-angle-right"></em>

                                 Account

                                <em class="fa fa-angle-right"></em>

								Reset Password

								</li>

                            </ul>

					</div>

                </div>

            </div>

    </div>

    <div class="form-gap"></div>

	  

	<div class="row">

      <div class="video_area viva-section">

		<div class="container">  

           <div class="row">

		

					<div class="col-md-12 col-xs-12 col-sm-12">

					<div class="section_title_video style-3 resend-area">

						<div class="section_title_content inner-text-area">

						    <div class="image-area">

                           <img src="<?=base_url()?>/assets/publicassets/assets/images/icon/expired.png" class="invalid-section" alt="insert image">

				        	</div> 

							<div class="section_title_heading">

								<h2>Sorry,Your token expired!</h2>

							</div>

							<div class="section_desc_link">

							 <p> Click <a href="<?=base_url()?>/forgot-password">here</a> to create a new link.</p>

							 

                            </div>

                                  

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

         </div>

	  </div>

	</div>

	

	

<script>

    $("#reset-mypassword").click( function(e) {

            var email = '<?php echo $_GET['vcode'];?>';

		    var password = $("#password").val();

            var varifypassword = $("#varifypassword").val();

           

            

            if(password.length > 5){

            

            if(password==varifypassword){

            $.ajax({

                type: "POST",

                url: "<?=base_url()?>/resetmypassword",

                data: ({

					password: password,

					varifypassword: varifypassword,

                    email: email

                  

                }),

                success: function(response) {

                    alert(response);

                    if (response === 'Success') {

                        document.getElementById('password').value='';

                        document.getElementById('varifypassword').value='';

                        $(".success_volt_con").show();

                        $(".success_volt_con").html('Thanks your contact me we will contact you soon');

                        success_volt_con();

                    } else {

                          $(".error_volt").show();

                        $(".error_volt").html('Opps! There are some error, plaese try again.');

                        error_volt();

                    }

                }

            });    

            }else{

                        $(".error_volt").show();

                        $(".error_volt").html('Opps! Password and varify password is not match.');

                        error_volt();   

            }

            }else{

                

               $(".error_volt").show();

               $(".error_volt").html('Password must be at least 6 characters');

              error_volt();       

                

            }

          

            return false;

          

        });

            

</script>

<script>

 var success_volt_con;

	   (function($) {

        success_volt_con = function() {

            setTimeout(function() {

                $(".success_volt_con").html('');

				$(".success_volt_con").hide();

            }, 2000);

        }

    })(jQuery);

</script>

<script>

 var error_volt;

	   (function($) {

        error_volt = function() {

            setTimeout(function() {

                $(".error_volt").html('');

				$(".error_volt").hide();

            }, 2000);

        }

    })(jQuery);

</script>



<?php include "footer.php";?>









