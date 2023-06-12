<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DrAnandKale</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>

    <!-- ################# Header Starts Here#######################--->

    












<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                    <?php
                                         $nav_sql = "SELECT * from menus where menu_level=1";
                                        $nav_data = mysqli_query($db,$nav_sql);
                                        $nav_num = mysqli_num_rows($nav_data);
                                        

                                        if ($nav_num>0) {
                                           for ($i=0; $i < $nav_num; $i++) { 
                                            $nav_row = mysqli_fetch_assoc($nav_data);
                                            extract($nav_row);
                                            $sub_nav_sql = "SELECT * from menus where menu_level=1 and has_parent=$id";
                                            $sub_nav_data = mysqli_query($db,$sub_nav_sql);
                                            $sub_nav_num = mysqli_num_rows($sub_nav_data);

                                            if ($sub_nav_num>0) {
                                                ?>
                                                 
                                                <?php
                                            }else {
                                                ?>
                                                <li><a class="" href="<?=$base_path?><?=$menu_link?>" style="font-size: 13px;"><?=$menu_name?></a></li>
                                                <?php
                                            }
                                            ?>
                                            
                                            <?php
                                        }
                                        
                                           }?>
                                           
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Treatments</h2>
                    <ul class="list-unstyled link-list">
                    <?php
                                        $service_nav_sql = "SELECT id from menus where menu_level=1 and (menu_name='Treatments' or menu_name='Treatments')";
                                      
                                        $service_id=(mysqli_fetch_assoc(mysqli_query($db,$service_nav_sql))['id']);
                                        
                                       
                                        $service_sub_nav_sql = "SELECT * from menus where menu_level=2 and has_parent=$service_id";
                                        $service_sub_nav_data = mysqli_query($db,$service_sub_nav_sql);
                                        $service_sub_nav_num = mysqli_num_rows($service_sub_nav_data);

                                        if ($service_sub_nav_num>0) {
                                            for ($i=0; $i < $service_sub_nav_num; $i++) { 
                                                $service_sub_nav_row = mysqli_fetch_assoc($service_sub_nav_data);
                                                extract($service_sub_nav_row);
                                                ?>
                                                  <li ><a href="<?=$menu_link?>" style="font-size: 13px;"><?=$menu_name?></a></li>
                                           <?php
                                                }
                                           }?>
                                   
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    
                    <h2>Kale's Psychiatry Clinic</h2>
                    <?php
								$company_Master = "SELECT * FROM `oc_master_company`";
								$company_master_data = mysqli_query($db, $company_Master);
								$company_num = mysqli_num_rows($company_master_data);
								// echo $slider_num;
								for ($i = 0; $i < $company_num; $i++) {
									$class_master_row = mysqli_fetch_assoc($company_master_data);

									extract($class_master_row);
								?>
                    <address class="md-margin-bottom-40" style="font-size:13px;">
                        Phone:  <a  style="color:aliceblue;" href="tel:<?=$mobile?>"><?=$mobile?></a>  <br>
                        Email: <a  style="color:aliceblue;" href="mailto:<?=$email ?>"><?=$email ?></a> <br>
                        <a  style="color:aliceblue;" href="https://goo.gl/maps/qCbo1Gvun88Uw7JS8"><?=$class_master_row['address1']?></a>
                        <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15009.897227738089!2d75.3593223!3d19.8621842!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdba31f723af4dd%3A0x37d2332832a15595!2sDr.%20Anand%20kale%20-%20Psychiatrist%20in%20aurangabad!5e0!3m2!1sen!2sin!4v1680188760116!5m2!1sen!2sin" width="300" height="250" style="border:2; margin-top:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                       
                    </address>
                    <?php 
                }
                ?>
                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/"> © Copyright Dr Anand Kale. All Rights Reserved | Designed and Developed by BigmarkMedia</a>
                <?php
                                        $social_link_sql = "SELECT * FROM `social_links`";
                                        $social_link_data = mysqli_query($db,$social_link_sql);
                                        $social_link_num = mysqli_num_rows($social_link_data);
                                        // echo $slider_num;
                                        for ($i=0; $i < $social_link_num; $i++) { 
                                            $social_link_row = mysqli_fetch_assoc($social_link_data);
                                         
                                            extract($social_link_row);
                                            ?>
                <span>
                <a href="<?=$link?>">
                                                    <i class="<?=$icon?>" ></i>
                                                </a>
                <!-- <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a> -->
        </span>
        <?php
                                        }
                                            ?>
            </div>

        </div>
    
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>


</html>