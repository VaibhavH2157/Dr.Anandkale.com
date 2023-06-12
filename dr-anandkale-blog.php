<?php 
$title ='Dr. Anand Kale Psychiatrst in Chatrapati Sambhaji Nagar (Aurangabad) Maharashtra'; 
include("includes/header.php")
?>
     <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row mt-5">
                   <div class="container">
                       <div class="row">
                           <h2>News/Updates</h2>
                           <ul>
                               <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                               <li><i class="fas fa-angle-double-right"></i>News/Updates</li>
                           </ul>
                       </div>
                   </div>
               </div>
       
         <!-- ######## Page  Title End ####### -->
         
       <section class="our-blog container-fluid">
  		<div class="container">
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">

				  <?php
            $today_date = date('m-d-y');
            $sql  = "SELECT * FROM `news_update`";
            $data = mysqli_query($db,$sql);
            $num = mysqli_num_rows($data);
            if($num>0)
            {
                for($i=1;$i<=$num;$i++)
                {
                    $row = mysqli_fetch_assoc($data);
                    extract($row);

if($i==1){

?>
  					<div class="col-sm-6 blog-smk">
						<div class="blog-single">

								<img src="<?= $base_path ?>gallery_images/<?=$gallery_image?>" alt="">

							<div class="blog-single-det">
								<!-- <span>Nov 12, 2018</span> -->
								<h6><?=$facility_name?></h6>
								<p> <?=$facility_details?></p>
								<a href="blog_single.html">
									<a href="dr-anand-kale-blogs-moredetails.php"><button class="btn btn-success btn-sm">More Detail</button></a>
								</a>
							</div>
						</div>
					</div>
					<?php
          }else{ ?>
					<div class="col-sm-6 blog-smk">
						<div class="blog-single">

								<img src="<?= $base_path ?>gallery_images/<?=$gallery_image?>" alt="">

							<div class="blog-single-det">
								<!-- <span>Nov 12, 2018</span> -->
								<h6><?=$facility_name?></h6>
								<p> <?=$facility_details?></p>
								<a href="blog_single.html">
									<a href="dr-anand-kale-blogs-moredetails.php"><button class="btn btn-success btn-sm">More Detail</button></a>
								</a>
							</div>
						</div>
					</div>
					<?php }
                        ?>
        
        <?php
                                              }
                                          }
                                          ?>
					<!-- <div class="col-sm-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/blog/post_3.jpg" alt="">

							<div class="blog-single-det">
								<span>Nov 12, 2018</span>
								<h6>By Gods Grace</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/blog/post_4.jpg" alt="">

							<div class="blog-single-det">
								<span>Nov 12, 2018</span>
								<h6>By Gods Grace</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<button class="btn btn-success btn-sm">More Detail</button>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/blog/post_5.jpg" alt="">

							<div class="blog-single-det">
								<span>Nov 12, 2018</span>
								<h6>By Gods Grace</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6 blog-smk">
						<div class="blog-single">

								<img src="assets/images/blog/post_6.jpg" alt="">

							<div class="blog-single-det">
								<span>Nov 12, 2018</span>
								<h6>By Gods Grace</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div> -->
  				</div>
  			</div>
  			
  		</div>
  	</section>  
   	

      <?php 
include("includes/footer.php")
?>