
<!-- Container-fluid starts-->
<div class="container-fluid">
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
                                <th>User Id</th>
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
                                    <td><?php  echo $key->vc_id; ?></td>
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
 <!-- Container-fluid Ends-->

</div>
