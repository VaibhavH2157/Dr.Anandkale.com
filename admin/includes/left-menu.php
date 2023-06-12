<?php
function get_unseened_count($db,$table,$col,$value)
{
 $sql = "select count($col) as count from $table where $col=\"$value\"";
 $data = mysqli_query($db,$sql);
 $row = mysqli_fetch_assoc($data);
 return $row['count'];
}
function update_seen($db,$table,$col,$value,$id_column,$id_column_value)
{
 $sql = "update $table set $col=\"$value\"  where $id_column=\"$id_column_value\"";
 return mysqli_query($db,$sql);
}
?>
<nav id="column-left"><div id="profile">
  <div><a class="dropdown-toggle" data-toggle="dropdown"></a></div>
  <div>
    <h4>Welcome</h4>
    <small>Administrator</small></div>
</div>
<ul id="menu">
  <li id="dashboard"><a href="<?php echo $base_path;?>admin/access"><i class="fa fa-dashboard fa-fw"></i> <span>Dashboard</span></a></li>
  <ul id="menu">
  <!--- catalog --->
  <!-- <li id="catalog"><a class="parent"><i class="fa fa-tags fa-fw"></i> <span>Catalog/Masters</span></a>
    <ul>
          <li><a href="<?php echo $base_path;?>admin/doctors/doctor">Doctors</a></li>
          <li><a href="<?php echo $base_path;?>admin/doctors/doctor-group-list">Doctors Groups</a></li>
        
        </ul>
   
  </li> -->
   <!-- <li id="catalog"><a class="parent"><i class="fa fa-user fa-fw"></i> <span>Customers</span></a>
         -->
         <ul>
          <!-- <li><a href="<?php echo $base_path;?>admin/sales/customer">Customers</a></li> -->
          <!-- <li><a href="<?php echo $base_path;?>admin/sales/customer-group-list">Customer Groups</a></li> -->
        
        </ul>
         
         <!--------------- Sale Executive ----------->
      </li>

   <li id="contact"><a class="parent"><i class="fa fa-envelope fa-fw"></i><span>contact</span></a>
      <ul>
        <li><a href="<?php echo $base_path;?>admin/contact/contacts">contact</a></li>
      </ul>
   </li>
   <!-- <li id="career"><a class="parent"><i class="fa fa-envelope fa-fw"></i><span>Career</span></a>
      <ul>
        <li><a href="<?php echo $base_path;?>admin/career/career">Career</a></li>
      </ul>
   </li> -->

   <li id="feedback"><a class="parent"><i class="fa fa-envelope fa-fw"></i><span>Feedback</span></a>
      <ul>
        <!-- <li><a href="<?php echo $base_path;?>admin/feedback/feedbacks">Feedback</a></li> -->
        <li><a href="<?php echo $base_path;?>admin/feedback/feedbacks.php">paitent review</a></li>
      </ul>
   </li>
   <li id="feedback"><a class="parent"><i class="fa fa-envelope fa-fw"></i><span>Blogs/News Update</span></a>
      <ul>
        <li><a href="<?php echo $base_path;?>admin/Blogs/blogs.php">Blogs/News Update</a></li>
        
      </ul>
   </li>
 


      <!-- <li><a href="<?php echo $base_path;?>admin/facilities/stud-facilities.php" > <i class="fa fa-plus-square fa-fw"></i> Facility</a></li>
        <li><a href="<?php echo $base_path;?>admin/events/stud-events.php" > <i class="fa fa-envelope fa-fw"> </i> Event</a></li> -->
        <li><a href="<?php echo $base_path;?>admin/enquiry/appointment.php" > <i class="fa fa-plus-square fa-fw"> </i> Appointment</a></li>

        <!--  -->

    



<li id="site"><a class="parent"><i class="fa fa-cog fa-fw"></i><span>Site Settings</span></a>
  <ul>
   
       <li id="company"><a href="<?php echo $base_path;?>admin/company/company-info.php" class="parent"> <span>Company</span></a>
       </li>
         <li><a class="parent">Gallery</span></a>
           <ul>
             <li><a href="<?php echo $base_path;?>admin/gallery/gallery.php" >Gallery</a></li>
             <li><a href="<?php echo $base_path;?>admin/gallery/news_gallery.php" >News Gallery</a></li>
             <li><a href="<?php echo $base_path;?>admin/videos/videos.php" >Video</a></li>
           </ul>
       </li>
      
      <li id="menus"><a class="parent"><span>Menus</span></a>
       <ul>
         <li><a href="<?php echo $base_path;?>admin/menus/menus">Menus</a></li>
       </ul>
     </li>
      
       <li id="slider">
           <a href="<?php echo $base_path;?>admin/slider/slider.php" class="parent">
            <span>Slider</span></a>
            <!-- <ul>
             <li>
               <a href="<?php echo $base_path;?>admin/slider/sub_slider.php">
                <span>Sub Slider</span></a>
             </li>
            </ul> -->
       </li>
      
      <!-- Google Analytics -->   
       <!-- <li><a class="parent"><span>Google Analytics</span></a>
          <ul>
            <li><a href="<?php echo $base_path;?>admin/google/analytics">Google Analytics</a></li>
          </ul>
       </li> -->
 
 
      <!------------- Image Config---->
     <!-- <li ><a class="parent"><span>Image Settings</span></a>
        <ul>
          <li><a href="<?php echo $base_path;?>admin/image-settings/image-settings"> Image Settings</a></li>
        </ul>
     </li> -->

     <li><a href="<?php echo $base_path;?>admin/notification-list.php">Notification</a></li>
          <!-- <li><a href="<?php echo $base_path;?>admin/news-update/news-update.php">News & Update</a></li> -->
     
     <li><a class="parent"><span>Social Links</span></a>
    <ul>
      <li><a href="<?php echo $base_path;?>admin/social/links.php" >Social Links</a></li>
    </ul>
  </li>  
  </ul> 
 </li>

<!------------- Users ---->
      <li id="users"><a class="parent"><i class="fa fa-users fa-fw"></i> <span>Users</span></a>
         <ul>
           <li><a href="<?php echo $base_path;?>admin/users/add-user"> Add Users</a></li>
         </ul>
      </li>
</ul>
</nav>
