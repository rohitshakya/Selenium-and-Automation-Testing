
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">

    <div class="col-xl-12">
      <div class="card tab2-card">
        <div class="card-body">
          <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
            <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="mr-2"></i>Classes</a>
            </li>
          </ul>
          <div class="tab-content" id="top-tabContent">
            <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card">

                    <div class="card-body order-datatable">

                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>SUBJECT <i class="fas fa-sort"></i></th>
                            <th>CLASS</th>
                            <th>TEACHER</th>
                            <th>SECTION</th>
                            <th>REMARK</th>
                            <!--<th>STUDENT COUNT</th>-->
                          </tr>
                        </thead>
                        <tbody>



                         <?php 
                         if(!empty($period))
                         {


                           if (is_array($period) && count($period) > 0)  { 
                            $i=1; foreach ($period as $key) {?>
                              <tr>


                               <td>                                       
                                <?php 
                                if (!empty($key->subject_id)) {
  # code...

                                  echo $db->query("select sub_name from mastar_subject where sub_id =" . $key->subject_id)->getRow('sub_name');
                                } ?></td>

                                <td><?php  echo $key->class; ?>
                                <td>                                       
                                  <?php 
                                  if (!empty($key->user_id)) {
  # code...

                                    echo $db->query("select vc_name from vt_useraccount where vc_id =" . $key->user_id)->getRow('vc_name');   }?></td>                                   

                                  </td>
                                  <td><span class="badge badge-success"><?php if(!empty($key->section))
                                  {

                                    echo $key->section; }
                                    ?></span></td>
                                    <td><?php  
                                    if(!empty($key->timing))
                                    {
                                      echo $key->timing;    
                                    }
                                    else
                                      echo "NA";
                                    ?></td>
                                    <!--   <td>0</td>-->
                                    
                                  </tr>
                                <?php }}}
                                else
                                {
                                  ?><tr><td><p>No data available</p></td></tr><?php
                                }
                                ?>
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
