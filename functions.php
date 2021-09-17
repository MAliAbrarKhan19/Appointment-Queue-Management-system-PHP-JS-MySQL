
<!-- PHP Code Starts -->
<?php 
//Ticket NO
if (isset($_POST['ticketno'])) {
  $visitor_ticket_no="";
}

//Logout
if(isset($_POST['logout']))
{
  $visitor_logout_date=$date;
  $visitor_logout_time=$time;
  $visitor_log_status=$_POST['visitor_log_status'];
  $visitor_ticket_no=$_POST['visitor_ticket_no'];
 //<!-- INSERT INTO `visitors`(`visitor_id`, `visitor_name`, `visitor_gender`, `visitor_email`, `visitor_mobile`, `visitor_purpose`, `visitor_login_date`, `visitor_login_time`, `visitor_logout_date`, `visitor_logout_time`, `visitor_log_status`, `visitor_ticket_no`) VALUES -->
   $insertdb="UPDATE visitors SET visitor_logout_date='$visitor_logout_date',visitor_logout_time='$visitor_logout_time',visitor_log_status='$visitor_log_status' WHERE visitor_ticket_no='$visitor_ticket_no'";

  if(mysqli_query($con, $insertdb))
  {
    echo "<script type='text/javascript'>alert('Logged Out successfully!!! ".$visitor_ticket_no."')</script>";
    //$visitor_ticket_no="";
  
  }
  else {
    echo " Error!!Logged Out NOT inserted! ! !";
  }
}

//Visitor LOG In
if(isset($_POST['login']))
{
  
  $visitor_name=$_POST['visitor_name'];
  $visitor_gender=$_POST['visitor_gender'];
  $visitor_email=$_POST['visitor_email'];
  $visitor_mobile=$_POST['visitor_mobile'];
  $visitor_purpose=$_POST['visitor_purpose'];
  $visitor_login_date=$date;
  $visitor_login_time=$time;
  // $visitor_login_date=$_POST['visitor_login_date'];
  // $visitor_login_time=$_POST['visitor_login_time'];
  $visitor_log_status=$_POST['visitor_log_status'];

  //Visitor Ticket no 
  $visitor_ticket_no= date("dmyhis")."00".mt_rand(1,99);
   
    
  $insertdb="INSERT INTO visitors (visitor_name,visitor_gender,visitor_email,visitor_mobile,visitor_purpose,visitor_login_date, visitor_login_time,visitor_log_status,visitor_ticket_no)VALUES('$visitor_name', '$visitor_gender', '$visitor_email', '$visitor_mobile', '$visitor_purpose', '$visitor_login_date', '$visitor_login_time', '$visitor_log_status','$visitor_ticket_no')";

  if(mysqli_query($con, $insertdb))
  {
echo "<script type='text/javascript'>alert('Logged in successfully!!! ".$visitor_ticket_no."')</script>";
  
  }
  else {
    echo " Error!!NOT inserted! ! !";
  }

}

?>
<!-- PHP Code ends -->
