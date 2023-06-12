<?php
$title ='Homepage'; 
include("includes/header.php")
?>
<style>
	.why-us .content {
  padding: 30px;
  background: #1977cc;
  border-radius: 4px;
  color: #fff;
}

.why-us .content h3 {
  font-weight: 700;
  font-size: 34px;
  margin-bottom: 30px;
}

.why-us .content p {
  margin-bottom: 30px;
}

.why-us .content .more-btn {
  display: inline-block;
  background: rgba(255, 255, 255, 0.2);
  padding: 6px 30px 8px 30px;
  color: #fff;
  border-radius: 50px;
  transition: all ease-in-out 0.4s;
}

.why-us .content .more-btn i {
  font-size: 14px;
}

.why-us .content .more-btn:hover {
  color: #1977cc;
  background: #fff;
}

.why-us .icon-boxes .icon-box {
  text-align: center;
  border-radius: 10px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  padding: 40px 30px;
  width: 100%;
}

.why-us .icon-boxes .icon-box i {
  font-size: 40px;
  color: #1977cc;
  margin-bottom: 30px;
}

.why-us .icon-boxes .icon-box h4 {
  font-size: 20px;
  font-weight: 700;
  margin: 0 0 30px 0;
}

.why-us .icon-boxes .icon-box p {
  font-size: 15px;
  color: #848484;
}
/* -------------------feedback---------------------- */
/* .patient-message {
  background-image: url("../images/slider/slider-3.jpg");
  background-attachment: fixed;
  background-size: cover; }

  .patient-message.session-title{
	background-color: rgba(0, 171, 159, 0.9);
    padding: 50px;
    padding-bottom: 0px;
    color: #FFF; 
  } */
#client-testimonial-carousel {min-height: 200px;
	
}
.circular--square { 
	border-top-left-radius: 50% 50%; 
	border-top-right-radius: 50% 50%; 
	border-bottom-right-radius: 50% 50%; 
	border-bottom-left-radius: 50% 50%; 
	margin-top: -20px;
	}
	/* -------------------------- */

</style>	


<?php
$todays_date = date('Y-m-d');
if (strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
    $slider_sql = "SELECT * FROM `index_slider`  WHERE (slider_date_from <= '$todays_date' AND slider_date_to >= '$todays_date') and type='mobile'";
} else {
    $slider_sql = "SELECT * FROM `index_slider`  WHERE (slider_date_from <= '$todays_date' AND slider_date_to >= '$todays_date') and type='computer'";
    // echo "web browser!";
}
$slider_sql = "SELECT * FROM `index_slider`";
$slider_data = mysqli_query($db, $slider_sql);
$slider_num = mysqli_num_rows($slider_data);
// echo $slider_num;
?>
    <div class="slider" style="margin-top:40px;">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
		<?php
        for ($i = 0; $i < $slider_num; $i++) {
            $slider_row = mysqli_fetch_assoc($slider_data);
            extract($slider_row);
            
        ?>
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="<?= $base_path ?>/slider_images/<?=$slider_image ?>" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <!-- <div class="slider-captions">
                                    <h1 class="slider-title">Feeling stress or anxious?</h1>
                                    <p class="slider-text hidden-xs">We can help you conquer a wide range of psychological and emotional problems.</p>
                                    <a href="#" class="btn btn-success hidden-xs">View All Therapies</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<?php
        }
        ?>
            <!-- <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12"> -->
                            <!-- <div class="slider-captions">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">We can help you conquer a wide range of psychological and emotional problems.</p>
                                <a href="#" class="btn btn-success hidden-xs">Schedule A Visit</a>
                            </div> -->
                        <!-- </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"> <img src="assets/images/slider/slider-3.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12"> -->
                            <!-- <div class="slider-captions">
                                <h1 class="slider-title">Meet our psychiatrists</h1>
                                <p class="slider-text hidden-xs">Our psychiatrists are highly skilled to meet your unique needs.</p>
                                <a href="#" class="btn btn-success hidden-xs">Meet Psychiatrists</a>
                            </div> -->
                        <!-- </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
	<!-- ------------------------------------------------- -->
   
    <section id="why-us" class="why-us" style="margin-top: 100px;">
      <div class="container">

        <div class="row">

        <div class="col-lg-12 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0 " style=" font-family: 'Tinos', serif;box-shadow: 5px 5px 5px lightblue;">
                    <i class="bx bx-receipt"></i>
					<a href="dr-maryura-kale-Contact.php" class="more-btn "><h4 class="text-dark"style="font-weight:bold;  font-size: 25px;">OPD Timing</h4></a>
                    <p>10:30 am to 02:30 pm</p>
                    <p>06:00 pm to 08:00 pm</p>
                    <p>Blood Tests</p>
                    <p>08:00 AM to 01:00 PM</p>
                    <p>(Sunday closed)</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0"style=" font-family: 'Tinos', serif;box-shadow: 5px 5px 5px lightblue;">
                    <i class="bx bx-cube-alt"></i>
					<a href="dr-maryura-kale-Contact.php" class="more-btn "><h4 class="text-dark"style="font-weight:bold;  font-size: 25px;">Address</h4></a>
                    <p> Dr.Kale's Diabetes Clinic- N4 CIDCO, near jaibhavani nagar,Chhp.Sambhaji Nagar (Aurangabad), Maharashtra 431005 </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0" style="box-shadow: 5px 5px 5px lightblue;">
                    <i class="bi bi-person-lines-fill"></i>
                    <div class="text-center"style=" font-family: 'Tinos', serif;">
                   <a href="dr-maryura-kale-Contact.php" class="more-btn "><h4 class="text-dark"style="font-weight:bold;  font-size: 25px;">Contact</h4></a>
                     <p>Kale's Psychiatry Clinic<br> Mo.7066237367,<br>8806385386</p>
                     <p></p>
                    <p class="text-center" style="justify-content:center; text-align: center;display:flex;">Email:<br>
                    contact@drmayurakale.com</p>
                      </div>
                   
                    </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>

		  </div>

</div>
</section>

	<!-- -------------------------------------------------------- -->
    
    
  	
  	<!-- ################# Doctors Message Starts Here#######################--->


    <div class="doctor-message "style="margin-top: 100px;">
        <div class="inner-lay">
            <div class="container">
                <div class="row">


                    <div class="col-md-6 col-sm-12 doc-img" >
                        <img style="margin-top: 50px;" src="https://content3.jdmagicbox.com/comp/aurangabad-maharashtra/w5/9999px240.x240.171030185506.g2w5/catalogue/dr-anand-kale-pundlik-nagar-aurangabad-maharashtra-psychiatrists-1jmsc.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 doc-det"style="margin-top: 20px;">
                        <h2> Dr Anand Kale</h2>
                        <span>Expert Clinical Psychologist in Chp.Sambhaji Nagar(Aurangabad)</span>
                         <p>Working as a Consulting Psychiatrist since 25 years,Dr Kale's approach towards psychologically distressed, is developing a healthy and strong mind along with treatment of various psychiatric disorders . Expertised in treating illness like restlessness ,Depression , Over thinking, Loss of concentration, irritably, mood changes he also treats, illnesses like suspiciousness,aggression, irritability , abnormal behaviour, Hostily, Hallucinating, and other symptoms of psychosis. Stress management is his area of interest. He also deals with interpersonal issues, psychological problems of children and adolescents , problems of old age and sexual disorders.</p>
                    <div class="button about_button" style="margin-left: 80%;">
						<a href="about-dranandkale.php"style=" color:aliceblue;" >...Read More</a>
					</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- ------------------------------------------------------------------ -->
	<section class="our-blog container-fluid">
  		<div class="container">
  		<div class="session-title row">
  		    <h2>Services</h2>
  		    <!-- <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s Lorem</p> -->
  		</div>
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
  					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="images\photo-1.avif" alt="">

							<div class="blog-single-det">
							
								<h6>Psychotherapy</h6>
								<p>A variety of treatments that aim to help a person identify and change troubling emotions, thoughts, and behaviors.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm"><a href="dr-anand-kale-Psychotherapy.php"class="text-white">More Detail</a></button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="images\photo-2.jpg" alt="">

							<div class="blog-single-det">
								
								<h6>Violent behavior</h6>
								<p>Violent behavior is any behavior by an individual that threatens actually harms or injures the individual others or destroys property.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm"><a href="dr-anand-kale-violent-behaviour.php"class="text-white">More Detail</a></button>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="images\istockphoto-3.jpg" alt="">

							<div class="blog-single-det">
							
								<h6>Loneliness</h6>
								<p>One common description of loneliness is the feeling we get when our need for rewarding social contact and relationships is not met.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm"><a href="dr-anand-kale-loneliness-treatment.php" class="text-white">More Detail</a></button>
								</a>
							</div>
						</div>
					</div>
					</div>
  			</div>
  			
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
  					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="images\istockphoto-4.jpg" alt="">

							<div class="blog-single-det">
							
								<h6>Alcohol Dependance</h6>
								<p>A chronic disease in which a person craves drinks that contain alcohol and is unable to control his or her drinking.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm"><a href="dr-anand-kale-alcohol-dependence.php"class="text-white">More Detail</a></button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="images\photo-5.jpg" alt="">

							<div class="blog-single-det">
								
								<h6>Suicidal Behavior</h6>
								<p> A nonfatal, potentially injurious behavior directed against the self with an intent to die as a result of the behavior.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm"><a href="dr-anand-kale-suicidal-behaviour.php"class="text-white">More Detail</a></button>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="images\photo-6.avif" alt="">

							<div class="blog-single-det">
							
								<h6>Academic Backwardness</h6>
								<p>A child is called backward when his educational achievement is below the level of his abilities The cause can be ranging from many physical.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm"><a href="dr-anand-kale-academic-backwardness.php"class="text-white">More Detail</a></button>
								</a>
							</div>
						</div>
					</div>
					
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
  					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="images\photo-7.jpg" alt="">

							<div class="blog-single-det">
							
								<h6>Acute care</h6>
								<p>Acute care is a level of health care in which a patient is treated for a brief but severe episode of illness, for conditions that are the result of disease</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm"><a href="dr-anand-kale-acute-care.php"class="text-white">More Detail</a></button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="images\photo-8.jpg" alt="">

							<div class="blog-single-det">
								
								<h6>Adolescent Depression</h6>
								<p> Teen depression is a serious mental health problemcauses a persistent feeling of sadness and loss of interest in activities.It affects how your teenager thinks it can cause emotional.</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm"><a href="dr-anand-kale-adolescent-depression.php"class="text-white">More Detail</a></button>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="images\photo-9.jpg" alt="">

							<div class="blog-single-det">
							
								<h6 class="text-dark">Make an Appoinment</h6>
								<p> Take care about yourself</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm"><a href="dr-anand-kale-appointment.php"class="text-white"><h6>Appointment</h6></a></button>
								</a>
							</div>
						</div>
					</div>
					
					
					
				
					
					
  				</div>
  			</div>
  			
  		</div>
			</div>
		</div>
	</section> 

      	<!-- ################# Mission Vision Starts Here#######################--->
<!--   	
  	<div class="mosion-vision">
  	    <div class="container">
  	        <div class="row">
  	            <div class="col-lg-4 col-md-12">
  	                <div class="single-dd">
  	                    <h4>Our Mission</h4>
  	                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Our Vision</h4>
  	                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of ply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply <br>dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Why Choos Us ?</h4>
  	                    <p>Effective Psychological Therapy with a minimum of 5 years post qualification experience. </p>
  	                    
  	                    <p>Ipsum is simply text of the Lorem Ipsum is simply my text of ply text</p>
  	                    
  	                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of ply text of the Ipsum f the Lorem Ipsum is simply my text of ply text </p>
  	                    
  	                    
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</div> -->
  	
 	<!-- ################# Our Session Starts Here#######################--->  	
  	
  	<!-- <section class="sesion-type">
  	    <div class="container">
             <div class="session-title row">
  		    <h2>Our Session Types</h2>
  		    <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s Lorem</p>
  		</div>
  	        <div class="row">
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-1.jpg" alt="">
  	                    <p>Individual Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-2.jpg" alt="">
  	                    <p>Cuple Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-3.jpg" alt="">
  	                    <p>online Session</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-4.jpg" alt="">
  	                    <p>Group Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="assets/images/session/therapy-5.jpg" alt="">
  	                    <p>All Age Group</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess sess-ok">
  	                   <h4>Start Your Session today</h4>
  	                    <p>Take the first step on your journey to feeling better. </p>
  	                    <button class="btn btn-success">Book an Appointment</button>
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</section> -->
  	
  	<!-- ################# feedback start Here#######################--->
	
	  <div class="patient-message col-lg-12 offset-lg-0 pt-5 pb-5  text-light" style=" background-color: rgba(0, 171, 159, 0.9); ">
	  <div class="session-title row">
  		    <h2>Feedback</h2>
  		   
  		</div>
  <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:300px;">
    <div class="carousel-inner" role="listbox">
	<?php
           $sql  = 'SELECT * FROM `feedback_student`';
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
      <div class="carousel-item active text-center p-4">
        <blockquote class="blockquote text-center">
			<img class="circular--square" src="<?php $base_path;?>gallery_images/<?php echo $row['gallery_image'];?>" alt="">
          <p class="mb-0"><i class="fa fa-quote-left"></i> <?=$feedback?>.<i class="fa fa-quote-right"></i>
          </p>
          <footer class="blockquote-footer text-light"><?=$name?> </footer>
         
        </blockquote>
      </div>
	  <?php
          }else{ ?>
      <div class="carousel-item text-center p-4">
        <blockquote class="blockquote text-center">
		<img class="circular--square" src="<?php $base_path;?>gallery_images/<?php echo $row['gallery_image'];?>" alt="">
          <p class="mb-0"><i class="fa fa-quote-left"></i> <?=$feedback?><i class="fa fa-quote-right"></i>
          </p>
          <footer class="blockquote-footer  text-light"><?=$name?></footer>
         
        </blockquote>
      </div>
	  <?php }
                        ?>
        
        <?php
                                              }
                                          }
                                          ?>
    
    </div>
    <ol class="carousel-indicators " style="margin-bottom:-20px;">
      <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
      <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
    </ol>
  </div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


<?php
include("includes/footer.php")
?>

    