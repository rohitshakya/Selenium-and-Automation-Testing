

<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">

    <div class="col-xl-12">
      <div class="card tab2-card">
        <div class="card-body">
           <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
            <li class="nav-item"><a class="nav-link" href="<?=base_url()?>/school/teacher/list"><i data-feather="user" class="mr-2"></i>Teacher</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?=base_url()?>/school/student/list"><i data-feather="grid" class="mr-2"></i>Student</a>
            </li>
            <li class="nav-item"><a class="nav-link active" href="<?=base_url()?>/school/admin/list"><i data-feather="settings" class="mr-2"></i>Admin</a>
            </li>
          </ul>
          <div class="tab-content" id="top-tabContent">
            <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
              <h5 class="f-w-600">Teachers</h5>
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">

                    <div class="card-body order-datatable">
                      <div class="btn-popup pull-right">
                        <a href="<?=base_url()?>/school/admin/add" class="btn btn-secondary">Add Admin</a>
                        &nbsp;
                      </div>
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Username</th>
                            <th>Gender</th>
                            <th>State</th>
                          </tr>
                        </thead>
                        <tbody>


                         <?php  
                         if(!empty($adminlist))
                         {


                           if (is_array($adminlist) && count($adminlist) > 0)  { 
                            $i=1; foreach ($adminlist as $key) {?>
                              <tr>

                                <td><?php  echo $key->vc_name; ?></td>
                                <td><?php  echo $key->vc_email; ?></td>
                                <td><?php  echo $key->vc_contact; ?></td>
                                <td><?php  echo $key->vc_username; ?></td>
                                <td><?php  echo $key->vc_gender; ?></td>
                                <td><?php 
                                if ($key->vc_state) {
                                          # code...
                                 echo $db->query("select name from states where id =" . $key->vc_state)->getRow('name'); }?></td>                           
                                  </tr>
                                <?php }}}
                                else
                                {
                                  ?><tr><td><p>No data available</p></td></tr><?php
                                }?>


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
        </div>
      </div>
      <!-- Container-fluid Ends-->

    </div>

