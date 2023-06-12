<?php
$title ='Gallery'; 
include("includes/header.php")
?>
     <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row  mt-5">
                   <div class="container">
                       <div class="row">
                           <h2>Videos</h2>
                           <ul>
                               <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                               <li><i class="fas fa-angle-double-right"></i>Videos</li>
                           </ul>
                       </div>
                   </div>
               </div>
       
         <!-- ######## Page  Title End ####### -->
         
         <!--  ************************* Gallery Starts Here ************************** -->
         <section id="gallery" class="gallery">
        <div class="container">
  
         
        </div>
  
        <div class="container-fluid">
          <div class="row g-0">
          <?php

$sql  = 'SELECT * FROM `videos`';

$data = mysqli_query($db,$sql);

$num = mysqli_num_rows($data);

if($num>0)

{

  for($i=1;$i<=$num;$i++)

  {

   $row = mysqli_fetch_assoc($data);

//id	video_title	video_description	video_date	video_embed_code

   ?>    
            <div class="col-lg-4 col-md-6">
              <div class="container  ">
                <div class="gallery-item ">
                <p class="testimonial"><?php echo $row['video_title'];?></p>
                <iframe width="420" height="345" src="<?php echo $row['video_embed_code'];?>"></iframe>
              

                </div>
               </div>
            
              </div>
              
              <?php

}

}else{
    
    
    
}





?>
            
            
            
            
            
            
        </div>
        </div>
  
        </div>
      </section>
      <!-- End Gallery Section -->
  


        <!-- ######## Gallery End ####### -->
   	

        <?php 
include("includes/footer.php");
?>