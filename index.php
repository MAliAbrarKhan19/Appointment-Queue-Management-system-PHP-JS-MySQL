
<!-- Header  -->
<?php include 'header.php'; ?>
<!-- Header  -->
<?php include 'functions.php'; ?>



<div class="row">
  <di class=" offset-md-1 col-md-10 bg-dark mt-2">
    <h1 class=" text-light">Hello, and Welcome to</h1>
    <p class="display-6 text-light">
      AppQueue_ -Web Based Queue Management System
    </p>
    <p class="text-muted">
         In many public places and in public service offices Queue Management systems
      are often used to ensure a disciplined service. In this project I am intending to
      make a Queue Management system that is very efficient but cheaper in
      deployment.
    </p>
  </di>
</div>


<div class="row">
  <div class="col-md-10 offset-md-1  p-2 lead text-success text-center">
    <a class="btn btn-success btn-lg btn-block m-3" href="#" role="button" data-toggle="modal" data-target="#ModalVisitor"> Enter in queue </a>
    
  </div>
</div>



<!-- //Login Form// -->
<div class="row bg-dark">
  <div class="col-md-12">
    <!-- Visitor form -->
      <div class="row bg-dark">
        <div class="col-md-12">
          <!-- Visitorform -->
            <!-- Button trigger modal -->
              <!--  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalVisitor">Launch demo modal</button>-->
          <!-- Modal -->
          <div class="modal fade " id="ModalVisitor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg bg-dark" role="document">
              
                <form method="POST" enctype="multipart/form-data" class="form form-lg">
                  <!-- Form -->
                  <div class="modal-content bg-dark">
                    <div class="modal-header">
                      <h3 class="modal-title text-success text-center" id="exampleModalLongTitle">Visitor Login Form</h3>
                      <button type="button" class="close text-success" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <div class="modal-body text-success bg-dark">
                       
                      <div class="form-group row">
                        <label for="Name" class="col-md-2 col-form-label"><?php echo "Date | Time "; ?></label>
                        <label for="Name" class="col-md-6 col-form-label"><?php echo $date."| ".$time; ?></label>
                          <!--       <input type="hidden" class="form-control" name="visitor_login_date" value="<?php echo $date; ?>">
                          <input type="hidden" class="form-control" name="visitor_login_time" value="<?php echo $time; ?>"> -->
                        <input type="hidden" class="form-control" name="visitor_log_status" value="Logged in">

                      </div>
                      <div class="form-group row">
                        <label for="Name" class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                          <input type="text" name="visitor_name" class="form-control" id="Name"  placeholder="Your Name ">
                        </div>
                      </div>   
                      <div class="form-group row">
                        <label for="Email" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                          <input type="email" name="visitor_email" class="form-control" id="Email" placeholder="Your Email">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="mobile" class="col-md-2 col-form-label">Mobile</label>
                        <div class="col-md-6">
                          <input type="text" name="visitor_mobile" class="form-control" id="mobile" placeholder="Your Mobile">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="Gender" class="col-md-2 col-form-label">Gender</label>
                        <div class="col-md-6">
                          <select type="text" class="custom-select" id="Gender" name="visitor_gender">
                            <option selected>Gender</option>
                            <option value="Male">Male </option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="purpose" class="col-md-2 col-form-label">Purpose of visit</label>
                        <div class="col-md-10">
                          <textarea type="text" name="visitor_purpose" class="form-control" id="purpose" placeholder="Purpose of your visit"></textarea>
                        </div>
                      </div>
                    </div>
                      
                  </div>
                  <div class="modal-footer">
                      <button type="submit" name="login" class="btn btn-lg btn-block btn-outline-success" data-toggle="modal" data-target="#TicketNo">Get Ticket NO & Login </button>

                      <button type="button" class="btn btn-lg btn-outline-success" data-dismiss="modal">Close</button>
                  </div>
                <!-- Form -->
                </form>
            </div>
          <!-- Visitorform -->
          </div>
        </div>
      </div>
    <!-- Visitor form -->
  </div>
</div>
<!-- //Login Form// -->







<!-- Footer -->
<?php include 'footer.php'; ?>
<!-- Footer -->



