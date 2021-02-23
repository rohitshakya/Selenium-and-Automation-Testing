

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">

        <div class="col-xl-12">
            <div class="card tab2-card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="mr-2"></i>Profile</a>
                        </li>
                         <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="grid" class="mr-2"></i>Subscription</a>
                        </li>
                       
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

        <h5 class="f-w-600">My Subscriptions</h5>
        <div class="table-responsive profile-table">
            <table class="display" id="basic-1">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th>Product Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    if(!empty($packageInfo))
                    {
                      foreach ($packageInfo as $key) {
                        ?>
                        <tr>
                          <td><?php echo $key->product_name;?></td>
                          <td><?php echo $key->vc_qty;?></td>  
                        </tr>
                      <?php }}?>
                    </tbody>
                  </table>
              
                               </div>
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

