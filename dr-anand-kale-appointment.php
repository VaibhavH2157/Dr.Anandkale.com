<?php 
$title ='Appoinment';
include("includes/header.php")
?>

<style>
/* .card{
  width: 100%;
  overflow: hidden;
  margin-right: none;
} */
#main{
    overflow: hidden;
   
}

</style>

<!-- start Appointment Section -->

<main id="main">
    <div class="container" style="margin-top:100px;">
      <div class="section-title">
        <div class="logo_line col-md-6 offset-md-3"></div>
        <div style="margin-bottom: 25px; display:flex; justify-content: center;">
          <h1 class="d-flex justify-content-center" style="color: rgba(0, 171, 159, 0.9); margin-bottom: 10px; margin-top: 50px;">Appointment</h1>
        </div>
      </div>
    </div>
      
      <div class="card col-lg-6 offset-lg-3 mt-4" style="margin-bottom: 7%; display: flex; justify-content: center;">
      <div class="card-body">
      <?php include('messeage.php')?>
    <form action="post-apppointment.php" method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Your mobile " data-rule="mobile" data-msg="Please enter a Number"  pattern="[0-9]{10}" required>
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group mt-3">
                        <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group mt-3" >
                        <select name="department" id="department" class="form-control">
                          <option value="" style="color: gray;">Select Department</option>
                          <option value="Withdrawal Symptoms">Withdrawal Symptoms</option>
                          <option value="De addiction treatment">De-addiction treatment</option>
                          <option value="Loneliness">Loneliness</option>
                          <option value="Psychotherapy Adult">Psychotherapy Adult</option>
                          <option value="Academic Backwardness">Academic Backwardness</option>
                          <option value="Suicide Prevention">Suicide Prevention</option>
                          <option value="Adolescent Depression">Adolescent Depression</option>
                        </select>
                        <div class="validate"></div>
                      </div>
                    </div>
                    
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="3" placeholder="Message (Optional)"></textarea>
                      <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                      <div class="error-message"></div>
                    </div>
                    <div class="d-flex justify-content-center">
                      <div class="modal-footer text-center">
                        <button type="submit" class="btn" style="background-color: rgba(0, 171, 159, 0.9); color: white;">Make an Appointment</button>
                      </div>
                    </div>
                  </form>
                </div>                
              </div>
            </section>
          </form>
</main>
<!-- End Appointment Section -->
            
            
	<!-- Modal -->

  <!-- <div class="modal fade offset-sm-4" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width:max-content;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: navy;">
        <h5 class="modal-title text-white" id="exampleModalLabel">Appointment Form</h5>
        <button type="button"  class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 <div class="modal-body">
	<section id="appointment" class="appointment section-bg">
 <div class="container">

    <div class="section-title">
        
      <h2 class="text-center mb-5">Make an Appointment</h2>
    </div>
   
    <form action="post_appointment.php" method="post" role="form" class="php-email-form" >
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="Your mobile" data-rule="mobile" data-msg="Please enter a Number" required>
                        <div class="validate"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group mt-3">
                        <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                        <div class="validate"></div>
                      </div>
                      <div class="col-md-6 form-group mt-3" >
                        <select name="department" id="department" class="form-control">
                          <option value="" style="color: gray;">Select Department</option>
                          <option value="service 1">Withdrawal Symptoms</option>
                          <option value="Department 3">De addiction treatment</option>
                          <option value="Department 3">Loneliness</option>
                          <option value="Department 3">Psychotherapy Adult</option>
                          <option value="Department 3">Academic Backwardness</option>
                          <option value="Department 3">Suicide Prevention</option>
                          <option value="Department 3">Adolescent Depression</option>
                        </select>
                        <div class="validate"></div>
                      </div>
                     
                    </div>
            
                    <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="3" placeholder="Message (Optional)"></textarea>
                      <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                      <div class="loading"></div>
                      <div class="error-message"></div> 
                    </div>
                    <div class="text-center ">
						<button type="button" id="submit_Form" class="btn" style="background-color: navy; color: white;">Submit Form</button>
       					</div>
                  </form>
                </div>
   </section>
   </div>
  </div>
 </div>
</div> -->

<!-- End Appointment Section -->



<?php 
include("includes/footer.php")
?>