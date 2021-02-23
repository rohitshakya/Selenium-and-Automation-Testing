

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">

        <div class="col-xl-12">
            <div class="card tab2-card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link " id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><i data-feather="user" class="mr-2"></i>Package Info</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                            <h5 class="f-w-600">Profile</h5>
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
              
               </div></div></div></div>