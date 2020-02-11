<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];    
    $email = $_POST['email'];
	$formsubject = $_POST['subject'];
	$message = $_POST['message'];
    
    $errors = array();

    if ($_POST['name']=='' && $_POST['email']=='') {
       $msg ="Please Fill All the Fields";
    }
    else if ($_POST['name']=='' && $_POST['subject']=='') {
       $msg ="Please Insert Your Name and subject";
    }
    else if ($_POST['subject']=='' && $_POST['email']=='') {
       $msg ="Please Insert Your Subject and Email";
    }
    else if ($_POST['subject']=='' && $_POST['message']=='') {
      $msg ="Please Insert Your subject and message";
    }
	 else if ($_POST['name']=='') {
    	$msg ="Please Insert Your Name";
    }
   else if ($_POST['email']=='') {
    	$msg ="Please Insert Your Email";
    }
    else if ($_POST['subject']=='') {
    	$msg ="Please Insert Your Subject";
    }
	else if ($_POST['message']=='') {
    	$msg ="Please Insert Your Message";
    }
    if (isset($msg)) 
    { 
        echo "<div class='alert alert-danger' role='alert'>".$msg."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    }
    else 
    {
        // $to_email = $email;
        $to_email = 'benish.rab@its.com.pk';
    	$subject = 'Shawf';
    	$message = 'Name : '.$name .' <br>Email : '.$email .' <br>Subject : '.$formsubject .' <br>Message : '.$message;
    	// $headers = 'From: noreply@company.com';

    	$header = "From: noreply@example.com\r\n";
    	$header.= "MIME-Version: 1.0\r\n";
    	$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    	$header.= "X-Priority: 1\r\n";

    	$status = mail($to_email, $subject, $message, $header);

    	if($status)
      	{
        	echo "<div class='alert alert-success' role='alert'>Request Successfully submitted will contact you shortly.</div>";
        	// echo '<p>Your mail has been sent!</p>';
        ?>
	        <!-- <script>
	            setTimeout(function () {
	            	window.location.href= 'index.php';
	            }, 7000);
	         </script> -->
        <?php
      	} 
      	else 
      	{
        	echo "<div class='alert alert-danger' role='alert'>There is some problem in sending email</div>";
      	}
	}
    // return json_data;
}

?>