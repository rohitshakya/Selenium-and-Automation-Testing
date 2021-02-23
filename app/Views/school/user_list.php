

<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">

    <div class="col-xl-12">
      <div class="card tab2-card">
        <div class="card-body">
          <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="mr-2"></i>Teacher</a>
            </li>
            <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="grid" class="mr-2"></i>Student</a>
            </li>
            <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-account" role="tab" aria-controls="top-account" aria-selected="false"><i data-feather="settings" class="mr-2"></i>Admin</a>
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
                        <a href="<?=base_url()?>/school/teacher/add" class="btn btn-secondary">Add Teacher</a>
                        &nbsp;
                        <a href="<?=base_url('/school/import/teacher')?>" class="btn btn-secondary">Import List</a>
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
                            <th>Class</th>
                            <th>Subject</th>
                          </tr>
                        </thead>
                        <tbody>


                         <?php  
                         if(!empty($teacherlist))
                         {


                           if (is_array($teacherlist) && count($teacherlist) > 0)  { 
                            $i=1; foreach ($teacherlist as $key) {?>
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
                                 <td><?php  
                                 if($key->vc_class)
                                 {

                                   echo $key->vc_class; }?></td>
                                   <td><?php 
                                   if ($key->vc_subject) {
                                        # code...

                                    echo $db->query("select sub_name from mastar_subject where sub_id =" . $key->vc_subject)->getRow('sub_name'); }?></td>                             
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


                  <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">

                    <h5 class="f-w-600">School students</h5>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card">

                          <div class="card-body order-datatable">
                            <div class="btn-popup pull-right">
                              <a href="<?=base_url()?>/school/student/add" class="btn btn-secondary">Add Student</a>
                              &nbsp;
                              <a href="<?=base_url('/school/import/student')?>" class="btn btn-secondary">Import List</a>
                            </div>
                            <table class="display" id="basic-1">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Contact</th>
                                  <th>User Name</th>
                                  <th>Gender</th>
                                  <th>State</th>
                                  <th>City</th>
                                  <th>Class</th>
                                  <th>Subject</th>
                                </tr>
                              </thead>
                              <tbody>


                               <?php  
                               if(!empty($studentlist))
                               {


                                 if (is_array($studentlist) && count($studentlist) > 0)  { 

                                  $i=1; foreach ($studentlist as $key) {?>
                                    <tr>

                                      <td><?php  echo $key->vc_name; ?></td>
                                      <td><?php  echo $key->vc_email; ?></td>
                                      <td><?php  echo $key->vc_contact; ?></td>
                                      <td><?php  echo $key->vc_username; ?></td>
                                      <td><?php  echo $key->vc_gender; ?></td>
                                      <td><?php echo $db->query("select name from states where id =" . $key->vc_state)->getRow('name'); ?></td>

                                      <td><?php echo $db->query("select city from cities where id =" . $key->vc_city)->getRow('city'); ?></td>
                                      <td><?php  echo $key->vc_class; ?></td>
                                      <td><?php echo $db->query("select sub_name from mastar_subject where sub_id =" . $key->vc_subject)->getRow('sub_name'); ?></td>                             
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


                    <div class="tab-pane fade" id="top-account" role="tabpanel" aria-labelledby="account-top-tab">

                      <h5 class="f-w-600">Admin</h5>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="card">

                            <div class="card-body order-datatable">
                              <div class="btn-popup pull-right">
                                <a href="<?=base_url()?>/school/admin/add" class="btn btn-secondary">Add Admin</a>
                                &nbsp;
                                <br>
                                <table class="display" id="basic-1">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Contact</th>
                                      <th>Username</th>
                                      <th>Gender</th>

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
          </div>
          <!-- Container-fluid Ends-->

        </div>

