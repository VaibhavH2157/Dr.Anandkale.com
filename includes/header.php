<?php include('admin/config.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DrAnandKale</title>

    <link rel="shortcut icon" href="images\kale_logo.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
</head>
<style>

.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
  
}

.navbar li {
  position: relative;
  
}

.navbar>ul>li {
  position: relative;
  white-space: nowrap;
  padding: none;
  
  /* padding: 8px 0 8px 20px; */
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 17px;
  /* font-weight: normal; */
  color:	#808080;
  white-space: nowrap;
  transition: 0.3s;
  /* border-bottom: 2px solid #fff; */
  padding: 5px 2px;
}

.navbar a i,
.navbar a:focus i {
  font-size: 25px;   /* mabile menu button */
  line-height: 0;
  margin-left: 70px;
  
  
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #00ab9f;
  border-color: black;
  padding: none;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 20px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
  color: black;
  /* margin: none; */
  padding: 3px 3px;
  padding-left: 20px;
  
 
}

.navbar .dropdown ul a {
  /* padding: 8px 20px; */
  padding: none;
  font-size: 14px;
  /* font-weight: 500; */
  text-transform: none;
  color: black;
  border: none;
}

.navbar .dropdown ul a i {
  font-size: 20px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
 color: #00ab9f;

}

.navbar .dropdown:hover>ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
  color: #00ab9f;
}

/* .navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
} */

/* .navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
} */

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
 .mobile-nav-toggle #myLinks {
  color: black;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
  color: #fff;
  
}

@media (max-width: 991px) {
  .mobile-nav-toggle #myLinks {
    display: block;
    
    
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(28, 47, 65, 0.9);
  transition: 0.3s;
  z-index: 999;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile>ul>li {
  padding: 0;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: black;
  border: none;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: black;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: black;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}
.topnav a.icon {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

/* .checkbtn{
  font-size: 30px;
  float: right;
  line-height: 80px;
  cursor: pointer;
  display: none;
  color:black;
  
}
#check{
  display: none;
}

@media  (max-width: 480px) {
.checkbtn{
  display: block;
 } 
 
} */
 


</style>
<body>

    <!-- ################# Header Starts Here#######################--->

    <div id="topbar" class="d-flex align-items-center fixed-top " >

    
<div class="container d-flex justify-content-between">
        
       
    
        <header id="header" class="fixed-top">
        <?php
			$curdate = date('Y-m-d');
			$sql = "SELECT * FROM `notification_list`";
			$data = mysqli_query($db,$sql);
			$num = mysqli_num_rows($data);
			if($num>0)
			{
				$row = mysqli_fetch_assoc($data);
				extract($row);
				// if ( $row['todate'] >= $curdate ) {
				?><marquee class="text-dark mt-2" style="margin-bottom: -20px;" behavior="scroll" scrollamount="5" direction="left"><?=$notify_text?></marquee></a> <?php 
					// }
			}
		?>
        <nav id="navbar" class="navbar order-last order-lg-0">
    <!-- <div class="container d-flex align-items-center"> -->

        <!-- <nav class="nav">
            <div class="container">
                <div class="row nav-ro">
                   <div class="col-lg-3 col-md-4 col-sm-12"> -->
                       <!-- <img src="assets/images/logo.jpg" alt=""> -->
                      <a href="index.php"><img src="images\Anand-_Kale_logo.jpg" alt=""></a>
                      <a href="javascript:void(0);" class="icon  bi bi-list d-block d-md-none mobile-nav-toggle  " onclick="myFunction()">
    <i class="fas fa-bars"></i>
  </a>
                       <!-- <a class="icon" data-toggle="collapse" data-target="#menu" onclick="myFunction()" href="#"><i class="fas bi bi-list d-block d-md-none mobile-nav-toggle  fa-bars"></i></a> -->
                       <!-- <input type="checkbox" id="check" >
                       <label for="check" class="checkbtn">
                        <i class="fas fa-bars"></i>
                       </label> -->
                        
                   <!-- </div> -->
                    
                 
      <?php
                                    $nav_sql = "SELECT * from menus where menu_level=1";
                                    $nav_data = mysqli_query($db,$nav_sql);
                                    $nav_num = mysqli_num_rows($nav_data);
                                    // echo $nav_num;
                                    ?>
        <ul id="myLinks">
                                        <?php
                                        for ($i=0; $i < $nav_num; $i++) { 
                                            $nav_row = mysqli_fetch_assoc($nav_data);
                                            extract($nav_row);
                                            $sub_nav_sql = "SELECT * from menus where menu_level=2 and has_parent=$id";
                                            $sub_nav_data = mysqli_query($db,$sub_nav_sql);
                                            $sub_nav_num = mysqli_num_rows($sub_nav_data);

                                            if ($sub_nav_num>0) {
                                                ?>
                                                 <li class="dropdown"><a href="#" class="nav-link scrollto"><?=$menu_name?></a>
                                                    <ul>
                                                         <?php
                                                            for ($j=0; $j < $sub_nav_num; $j++) { 
                                                              $sub_nav_row = mysqli_fetch_assoc ($sub_nav_data);
                                                            extract($sub_nav_row);  
                                                            ?>
                                                        <li><a class="nav-link scrollto" href="<?=$base_path?><?=$menu_link?>"><?=$menu_name?></a></li>
                                                        <?php } ?>
                                                        
                                                    </ul>
                                                </li>
                                                <?php
                                            }else {
                                                ?>
                                                <li><a class="nav-link scrollto" href="<?=$base_path?><?=$menu_link?>"><?=$menu_name?></a></li>
                                                <?php
                                            }
                                            ?>
                                            
                                            <?php
                                        }
                                        ?>
                                        
                                      
                                       
                                       
                                    </ul>
          </li>
         
          <i class="bi bi-list mobile-nav-toggle"></i>
          <div class="col-sm-2 d-none d-lg-block">
                       <button class="btn btn-success" ><a style="color: white; "  href="dr-anand-kale-appointment.php">Book an Appoinment</a></button>
                   </div>
                   </div>
      </nav>
        </header>
    </div> 
    
                </div>
                
    </body>

</html>
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>


</html>