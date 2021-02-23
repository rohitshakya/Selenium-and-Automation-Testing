<?php include "header.php";?>
<?php echo link_tag('assets/publicassets/assets/css/error_404.css');?>


<!--Breadcrumb area Start-->
    <div class="text-bread-crumb d-flex align-items-center style-six sc-page-bc">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2> 404 ERROR</h2>
                  <div class="bread-crumb-line"><span><a href="<?=base_url()?>"> Home / </a></span> 404 ERROR</div>
                </div>

            </div>
        </div>
    </div>  
<!--Breadcrumb area end-->
 
<!--404 ERROR Start-->
<section class="four-zero-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="area-heading font-red"><span class="font-sky">OOPS!</span> 404 ERROR</h2>
                    <h6 class="font-green">Page Not Found...</h6>
                    <p>The page you are looking for might have been removed<br> had its name changed or is temporarily unavailable.</p>
                    <a href="<?=base_url()?>/">Back To Homepage</a>

                </div>
            </div>
        </div>
    </section>

<!--404 ERROR end-->

<?php include "footer.php";?>









