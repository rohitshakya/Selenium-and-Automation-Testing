                         

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8">
            <div class="card tab2-card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="mr-2"></i>Profile</a>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="settings" class="mr-2"></i>Contact</a>
                        </li> -->
                    </ul>

                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                            <h5 class="f-w-600">Profile</h5>
                            <div class="table-responsive profile-table">
                                <table class="table table-responsive">
                                    <tbody>
                                        <?php  
                                        
                                        if(!empty($profile))
                                            {?>

                                            <tr>
                                            <td>First Name:</td>
                                            <td><?php  echo $profile->vc_name;?></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name:</td>
                                            <td><?php  echo $profile->vc_lastname; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><?php  echo $profile->vc_email; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Gender:</td>
                                            <td><?php  echo $profile->vc_gender; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Mobile Number:</td>
                                            <td><?php  echo $profile->vc_contact; ?></td>
                                        </tr>
                                        <tr>
                                            <td>DOB:</td>
                                            <td><?php  echo $profile->vc_dob; ?></td>
                                        </tr>
                                        <tr>
                                            <td>City:</td>
                                            <td><?php echo $db->query("select city from cities where id =" . $profile->vc_city)->getRow('city'); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        <?php }
                           else
                            {
                                ?><tr><td><p>No data available</p></td></tr><?php
                            }?>
                <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                    <div class="account-setting">
                        <h5 class="f-w-600">Notifications</h5>
                        <div class="row">
                            <div class="col">
                                <label class="d-block" for="chk-ani">
                                    <input class="checkbox_animated" id="chk-ani" type="checkbox">
                                    Allow Desktop Notifications
                                </label>
                                <label class="d-block" for="chk-ani1">
                                    <input class="checkbox_animated" id="chk-ani1" type="checkbox">
                                    Enable Notifications
                                </label>
                                <label class="d-block" for="chk-ani2">
                                    <input class="checkbox_animated" id="chk-ani2" type="checkbox">
                                    Get notification for my own activity
                                </label>
                                <label class="d-block mb-0" for="chk-ani3">
                                    <input class="checkbox_animated" id="chk-ani3" type="checkbox" checked="">
                                    DND
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="account-setting deactivate-account">
                        <h5 class="f-w-600">Deactivate Account</h5>
                        <div class="row">
                            <div class="col">
                                <label class="d-block" for="edo-ani">
                                    <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">
                                    I have a privacy concern
                                </label>
                                <label class="d-block" for="edo-ani1">
                                    <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                    This is temporary
                                </label>
                                <label class="d-block mb-0" for="edo-ani2">
                                    <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">
                                    Other
                                </label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Deactivate Account</button>
                    </div>
                    <div class="account-setting deactivate-account">
                        <h5 class="f-w-600">Delete Account</h5>
                        <div class="row">
                            <div class="col">
                                <label class="d-block" for="edo-ani3">
                                    <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani1" checked="">
                                    No longer usable
                                </label>
                                <label class="d-block" for="edo-ani4">
                                    <input class="radio_animated" id="edo-ani4" type="radio" name="rdo-ani1">
                                    Want to switch on other account
                                </label>
                                <label class="d-block mb-0" for="edo-ani5">
                                    <input class="radio_animated" id="edo-ani5" type="radio" name="rdo-ani1" checked="">
                                    Other
                                </label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Delete Account</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->

</div>

