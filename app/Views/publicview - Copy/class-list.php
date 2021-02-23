<?php include("header.php"); ?>
<style>
.cset {
    color: #fff;
    font-weight: 800;
    font-size: 20px;
}

.p10 {
    padding: 30px 0;
}

.img-set-logo {
    width: 70px;

}

.s_s:after {
    content: "";
    top: 0px;
    left: 0;
    right: 0;
    bottom: 0;
    position: absolute;
    background-color: rgba(247, 80, 19, 0.6);
    height: 130px;
}

.s_s {
    background: url('http://vivavolt.vivadigitalindia.net/assets/publicassets/assets/images/bookcover/images.jpg');
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    z-index: 1;
}

#wrapper_i {
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
}

#wrapper_i h2 {
    margin-bottom: 20px !important;
}

.z_i99 {
    z-index: 99;
}
</style>
<!-- edution BREADCRUMB AREA -->
<div class="breatcome_area">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="breatcome_title">
                <div class="breatcome_title_inner">
                    <h2>CLASSES</h2>
                    <div class="breatcome_content">
                        <ul>
                            <li><a href="#">home<em class="fa fa-angle-right"></em></a>Classes</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="admision_area about_page" id="admission">
    <div class="container" style="max-width:1350px;">
        <div class="row padding-top">
            <div class="col-md-12">
                <div class="section_title_style2" style="text-align: left; padding-top:10px;">
                    <h2 style="padding-bottom:10px;">CLASSES</h2><br>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if($allclass){ $c=0; foreach($allclass as $getClass){ $c++; $bgcolor = ($c%2)?"two":"one"; ?>
            <div class="col-md-3">

                <div class="single_admision <?=$bgcolor?>">
                    <div class="admission_content">
                        <div class="admission_content_inner1">
                            <a href="<?=base_url('subjects/'.str_replace(' ','', strtolower(preg_replace("([0-9]+)", "", $getClass->class_name))).'-'.$getClass->classId)?>"
                                class="my-super-cool-btn">
                                <div id="wrapper" class="p10 s_s">
                                    <img class="img-set-logo z_i99" src="<?=base_url('assets/publicassets/')?>assets/images/icon-logo/class.png" alt="viva-volt">
                                </div>
                                <div id="wrapper_i" class="title_menu">
                                    <h2 class="cset"><?=$getClass->class_name?></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }}?>
        </div>
    </div>
</div>

</div>
</div>

<?php include("footer.php"); ?>