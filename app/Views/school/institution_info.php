

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">

        <div class="col-xl-12">
            <div class="card tab2-card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="mr-2"></i>Profile</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="grid" class="mr-2"></i>Package Info</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-account" role="tab" aria-controls="top-account" aria-selected="false"><i data-feather="settings" class="mr-2"></i>Plan renewable</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                            <h5 class="f-w-600">Profile</h5>
                            <div class="table-responsive profile-table">
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td>Institute Name:</td>
                                            <td><?php 
                                            if(!empty($schoolInfo->school_name))
                                            {
                                                echo $schoolInfo->school_name;
                                            }
                                            ?>
                                        </td>
                                    </tr>

                                    <td>State</td>
                                    <td>

                                        <?php 

                                        if (!empty($schoolInfo->state)) {

                                            echo $db->query("select name from states where id =" . $schoolInfo->state)->getRow('name');}
                                            ?></td>
                                            <tr>
                                                <tr>
                                                 <td>City</td>
                                                 <td><?php 
                                                 if(!empty($schoolInfo->city_id))
                                                 {
                                                     echo $db->query("select city from cities where id =" . $schoolInfo->city_id)->getRow('city'); 
                                                 }?></td></tr>

                                                 <tr>
                                                    <td>Account Status</td>
                                                    <td><?php 
                                                    if(!empty($schoolInfo->accstatus))
                                                    {
                                                        echo $schoolInfo->accstatus;
                                                    }?></td></tr>
                                                    <tr>
                                                        <td>Account Created</td>
                                                        <td><?php 
                                                        if (!empty($schoolInfo->created_on)) {
                                                            echo $schoolInfo->created_on;
                                                        }?></td></tr>
                                                        <tr>
                                                            <td>Student count</td>
                                                            <td><?php 
                                                            if(!empty($studentcount))
                                                            {
                                                                echo $studentcount;
                                                            }
                                                            else{
                                                                echo "0";
                                                            }
                                                            ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">

                                            <h5 class="f-w-600">Institution Package Info</h5>
                                            <div class="table-responsive profile-table">
                                                <table class="display" id="basic-1">
                                                  <thead>
                                                    <tr>
                                                      <th>Product Name</th>
                                                      <th>Product Quantity</th>
                                                      <th>Remaining Assignment</th>
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
                                                      <td>3</td>  
                                                  </tr>
                                              <?php }}?>
                                          </tbody>
                                      </table>

                                  </div>
                              </div>
    <div class="tab-pane fade" id="top-account" role="tabpanel" aria-labelledby="account-top-tab">

                                   <div class="btn-popup pull-right">
                        <a href="#" class="btn btn-secondary">Upgrade Plan</a>
                        &nbsp;
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

