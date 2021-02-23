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

margin: 75px 0px 25px 0px;

}

}

#successrs{

    display:none;

}

.strong-processbar{

    margin-bottom: 5px;

    text-align: left;

}

.progress-bar {

     border-radius: 5px;

    text-align: center;

}

.w100{

  width: 100%;

}

.bg-danger {

    background-color: #dc3545!important;

}

.bg-warning {

    background-color: #ffc107!important;

}

.bg-success {

    background-color: #28a745!important;

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

	  

	<div class="row" id="rs">

       <div class="col-md-4 col-md-offset-4">

            <div class="panel panel-default">

              <div class="panel-body">

                <div class="text-center-d">

                    <?php if(@$_GET['status']=='success') { ?>

                    <div class="alert alert-success" role="alert">

                      We have mail your password reset link.

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

                  <h2 class="text-center-d">Reset Password?</h2>

                  <p>You can reset your password using this form: </p>

                   <div class="panel-body">

                       

                      <div class="form-group">

                        <div class="success_volt_con"></div>

                        <div class="error_volt"></div>

                      </div> 

                       

                  

                        <div class="form-group">

                          <div class="input-group">

                          <span class="input-group-addon"><em class="fa fa-lock  color-blue"></em></span>

                          <input id="password" name="password" placeholder="New Password" class="form-control" oncopy="return false" onpaste="return false"  onkeyup="isGood(this.value)" type="password" required>

                            <span class="input-group-addon"><em class="fa fa-eye" id="togglePassword"></em></span>

                             

                        </div>

                        <div class="input-group w100">

                            <small class="help-block" id="password-text"></small>

                        </div>

                        

                        </div>

                        

                        

                      

                        

                         <div class="form-group">

                              <div class="input-group">

                          <span class="input-group-addon"><em class="fa fa-lock  color-blue"></em></span>

                          <input id="verifypassword" name="verifypassword" placeholder="Verify Password" class="form-control" oncopy="return false" onpaste="return false"  type="password" required disabled>

                           <span class="input-group-addon"><em class="fa fa-eye" id="toggleVerifypassword"></em></span>

                        </div>

                          </div>

                       </div>

                      <div class="form-group">

                          <input name="emailaddress" class="" value="<?php echo $_GET['vcode'];?>" type="hidden">  

                        <input name="recover-submit" class="btn-lg btn-primary btn-block" id="reset-mypassword" value="Reset My Password" type="submit">

                      </div>

                

                   </div>

                 </div>

               </div>

             </div>

           </div>

         </div>

         

         

         

         

         

   <div class="row" id="successrs">

       <div class="col-md-4 col-md-offset-4">

            <div class="panel panel-default">

              <div class="panel-body">

                <div class="text-center-d">

                  

                  <h2 class="text-center-d">Success</h2>

                  <p>Your Password successfully changed </p>

                   <div class="panel-body">

                       

                   

                      <div class="form-group">

                       <a  class="btn-lg btn-primary btn-block" href="<?=base_url()?>/">Access Account</a>

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

function isGood(password) {

      var password_strength = document.getElementById("password-text");



      //TextBox left blank.

      if (password.length == 0) {

        password_strength.innerHTML = "";

        return;

      }



      //Regular Expressions.

      var regex = new Array();

      regex.push("[A-Z]"); //Uppercase Alphabet.

      regex.push("[a-z]"); //Lowercase Alphabet.

      regex.push("[0-9]"); //Digit.

      regex.push("[$@$!%*#?&]"); //Special Character.



      var passed = 0;



      //Validate for each Regular Expression.

      for (var i = 0; i < regex.length; i++) {

        if (new RegExp(regex[i]).test(password)) {

          passed++;

        }

      }



      //Display status.

      var strength = "";

      switch (passed) {

        case 0:

        case 1:

        case 2:

          strength = "<small class='progress-bar bg-danger' style='width: 40%'>Weak</small>";

          break;

        case 3:

          strength = "<small class='progress-bar bg-warning' style='width: 60%'>Medium</small>";

          break;

        case 4:

          strength = "<small class='progress-bar bg-success' style='width: 100%'>Strong</small>";

          break;



      }

      if(password.length>11){

         password_strength.innerHTML = strength;   

      }else if(password.length>7){

         password_strength.innerHTML = "<small class='progress-bar bg-warning' style='width: 60%'>Medium</small>"; 

      }else{

         password_strength.innerHTML  ="<small class='progress-bar bg-danger' style='width: 40%'>Weak</small>";

      }

    



    }    

</script>



	

	

<script>

 $('#password').keypress(function(e) {

       if(e.which === 32) 

         return false;

});

 $('#verifypassword').keypress(function(e) {

       if(e.which === 32) 

         return false;

    });

document.getElementById('password').addEventListener('keydown', function (event) {

    if (event.keyCode == 8) {

    var password = $("#password").val();

    if(/[a-z]+/.test(password) && /[A-Z]+/.test(password) && /\d+/.test(password) && password.length > 9){

    $('#verifypassword').prop('disabled', false);

    }else{

    $('#verifypassword').prop('disabled', true);

    }

    }

    if (event.keyCode == 46) {

    if(/[a-z]+/.test(password) && /[A-Z]+/.test(password) && /\d+/.test(password) && password.length > 9){

    $('#verifypassword').prop('disabled', false);

    }else{

    $('#verifypassword').prop('disabled', true);

    }

    }

});

$('#password').on('keypress', function (event) {

    var password = $("#password").val();

    if(/[a-z]+/.test(password) && /[A-Z]+/.test(password) && /\d+/.test(password) && password.length > 6){

    $('#verifypassword').prop('disabled', false);

    }else{

    $('#verifypassword').prop('disabled', true);

    }     

});

$("#reset-mypassword").click( function(e) {

            var email = '<?php echo $_GET['vcode'];?>';

		    var password = $("#password").val();

            var verifypassword = $("#verifypassword").val();

           if(/[a-z]+/.test(password) && /[A-Z]+/.test(password) && /\d+/.test(password) && password.length >= 8){

           if(password==verifypassword){

            $.ajax({

                type: "POST",

                url: "<?=base_url()?>/resetmypassword",

                data: ({

					password: password,

					verifypassword: verifypassword,

                    email: email

                  

                }),

                success: function(response) {

                    if (response === 'Success') {

                        document.getElementById('password').value='';

                        document.getElementById('verifypassword').value='';

                         $("#rs").css("display", "none");

                         $("#successrs").css("display", "block");

                         } else {

                          $(".error_volt").show();

                        $(".error_volt").html('Opps! There are some error, plaese try again.');

                        error_volt();

                    }

                }

            });    

            }else{

                        $(".error_volt").show();

                        $(".error_volt").html('Opps! Password and verify password is not match.');

                        error_volt();   

            }

            }else{

                

               $(".error_volt").show();

               $(".error_volt").html('Your password needs Upper and lower case letters, numbers and a minimum 8 chars');

              error_volt();       

                

            }

          

            return false;

          

        });

            

</script>

<script>

 var error_volt;

	   (function($) {

        error_volt = function() {

            setTimeout(function() {

                $(".error_volt").html('');

				$(".error_volt").hide();

            }, 5000);

        }

    })(jQuery);

</script>

<script type="text/javascript" src="<?=base_url('assets/publicassets/')?>assets/js/showhide.js"></script>

<?php include "footer.php";?>









