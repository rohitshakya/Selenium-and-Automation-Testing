<?php include "header.php";?>

<style>

.mtb-100 {

	margin: 100px 0px;

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

margin: 75px 0px 25px 0px;

}

}

</style>
<?php  $validation =  \Config\Services::validation();?>

<?php \Config\Services::validation()->listErrors(); ?>
<!-- BREADCRUMB AREA -->

<div class="admision_area about_page mt100-b50" id="admission">

    <div class="container">

        <div class="row padding-top">

            <div class="col-md-12">

                <div class="section_title_style2" style="text-align: left;">

                    <div class="breatcome2_content">

							<ul>

							  <li>

                                <a href="<?=base_url()?>/"><img class="homebtn" src="<?=base_url()?>/assets/publicassets/assets/images/home.png" class="img-fluid" alt="viva-volt"></a> 

                                <em class="fa fa-angle-right"></em>

								Forgot Password

								</li>

                            </ul>

					</div>

                </div>

            </div>

    </div>

    <div class="form-gap"></div>

	  

	<div class="row">

       <div class="col-md-4 col-md-offset-4 mx-auto d-block">

            <div class="panel panel-default">

              <div class="panel-body">

                <div class="text-center-d">

                    <?php if(@$_GET['status']=='success') { ?>

                    <div class="alert alert-success" role="alert">

                      We have mailed your password reset link.

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                      </button>

                    </div>

                    <?php } ?>

                     <?php if(@$_GET['status']=='notexist') { ?>

                    <div class="alert alert-danger" role="alert">

                      Invalid Email Id or  Username.

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                      </button>

                    </div>

                    <?php } ?>

                    <?php if(@$_GET['status']=='notmatch') { ?>

                    <div class="alert alert-danger" role="alert">

                      The user id you entered does not associate the email Id.

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                      </button>

                    </div>

                    <?php } ?>

                      <?php if(@$_GET['status']=='invalid') { ?>

                    <div class="alert alert-danger" role="alert">

                     Unable to reset password request due to an unknown error. Please try again.

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                      </button>

                    </div>

                    <?php } ?>

                  <h3><em class="fa fa-lock fa-4x"></em></h3>

                  <h2 class="text-center-d">Forgot Password?</h2>

                  <p>Please enter your registered email address. An email notification with a password reset code will then be sent to you.</p>

                   <div class="panel-body">

                    <form action="<?=base_url()?>/Publicmodule/validateforgatepass" id="register-form" role="form" autocomplete="off" class="form" method="post">
                       <div class="form-group">
                       <span class=" text-danger "><?= $validation->getError('userid'); ?></span>
                        <div class="input-group mt-2">

                          <span class="input-group-addon"><em class="fa fa-user color-blue"></em></span>
                        
                          <input id="userid" name="userid" placeholder="User Id" class="form-control"  type="text">
                          
                        </div>
                        
                       </div>
                      <div class="form-group">
                      <span class=" text-danger "><?= $validation->getError('email'); ?></span>
                        <div class="input-group mt-2">
                          <span class="input-group-addon"><em class="glyphicon glyphicon-envelope color-blue"></em></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email"><br>
                         
                        </div>
                       </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                    </form>

                   </div>

                 </div>

               </div>

             </div>

           </div>

         </div>

	  </div>

	</div>



<script>

$(document).bind("contextmenu",function(e){

  return false;

    });

</script>

<?php include "footer.php";?>









