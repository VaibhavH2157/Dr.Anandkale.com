<?php
$title ='Gallery'; 
include("includes/header.php")
?>
<style>
    
  .gallery {
    margin-top: 15%;
  }

  .image {
    margin-bottom: 5%;
    /* align-items: center; */
    display: flex;
    justify-content: center;
    color: black;
    
  }

  .gallery .gallery-item {
  overflow: hidden;
  border-right: 3px solid #fff;
  border-bottom: 3px solid #fff;
}

.gallery .gallery-item img {
  transition: all ease-in-out 0.4s;
}

.gallery .gallery-item:hover img {
  transform: scale(1.1);
}

</style>
     <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row mt-5">
                   <div class="container">
                       <div class="row">
                           <h2>Gallery</h2>
                           <ul>
                               <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                               <li><i class="fas fa-angle-double-right"></i>Gallery</li>
                           </ul>
                       </div>
                   </div>
               </div>
       
         <!-- ######## Page  Title End ####### -->
         
         <!--  ************************* Gallery Starts Here ************************** -->
        <!-- <div class="gallery">    
           <div class="container">
              <div class="row"> -->
                

        <!-- <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Finance</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Digital Marketing</button>
            <button class="btn btn-default filter-button" data-filter="spray"> Money</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Business Alaysis</button>
        </div> -->
        <main id="main">
    <div id="gallery" class="gallery" style="margin-top:100px;">
      <div class="container">
          <!-- <h1 class="image">Gallery</h1> -->
          <div class="container-fluid">
            <div class="row">
              <?php
        $sql  = 'SELECT * FROM `gallery` order by id ASC';
        $data = mysqli_query($db, $sql);
        $num = mysqli_num_rows($data);
        if ($num > 0) {
          for ($i = 1; $i <= $num; $i++) {
            $row = mysqli_fetch_assoc($data);
            extract($row);
            ?>
        
        
        <div class="col-lg-4 col-md-5">
              <div class="container">
              <div class="gallery-item">
                <a href="<?php echo ($base_path);?>gallery_images/<?= $gallery_image ?>" class="galelry-lightbox">
                  <img src="<?php echo ($base_path);?>gallery_images/<?= $gallery_image ?>" alt="" class="img-fluid mb-3"  style="height:<?php echo $row['height']?>; width:<?php echo $row['Width']?>;">
                </a>
              </div>
              <!-- <small><?= $row['date_added']?></small> -->
              </div>
            </div>
            <?php
            }
          }
          ?>
  
           </div>
          </div>
        </div>
      </div>
    </div>
      <!-- End Gallery Section -->
 </main>

 <script>  const galelryLightbox = GLightbox({
    selector: '.galelry-lightbox'
  });</script>
        <!-- ######## Gallery End ####### -->
   	

        <?php 
include("includes/footer.php");
?>