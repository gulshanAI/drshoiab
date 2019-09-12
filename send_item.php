<?php

function validate($m, $k='')
{
	$m = trim($m);
	if($m == "")
		die("Please Fill the missing Field");

	$val = array('url', 'www', 'http', '.com', 'disclaimer');
    
	if($k == "email")
	{
		if(!filter_var($m, FILTER_VALIDATE_EMAIL))
			die('Enter the valid mail');
	}
	else if($k == "phone")
	{
		if(!preg_match('/^[0-9]+$/', $m))
			die('Enter the valid Phone Number');
		else if(strlen($m) < 10 || strlen($m) > 12 )
			die('Enter the valid 10 digit Phone Number');
	}
    else{
		if(strlen($m) > 100){
			die('Message should be at most 100 char');
		}
		else{
			foreach($val as $v){
				if(strpos(strtolower($m), $v) !== false){
					die('It seem you are Bot!  ... Not Allowed');
				}
			}
		}
		
	}
    return $m;
}

function send_it($n, $p, $em, $d, $msg, $send_mail, $dr_no){
	$name = validate($n);
	$phone = validate($p, 'mobile');
	$email = validate($em, 'email');
	$date = validate($d);
	// $departments = validate($pl);
	$msg = validate($msg);

	$Username  = "touchmedia";
	$Password = "Touchmedia@2018";
	$Senderid = "TCHMED";
	$dest_mobileno = "+91".$phone;
	$msg1 =  "Thank you ".$name." for appointment. We'll call you within an hour. For any query call us on ".$dr_no;
	$data2 = "user=".$Username."&password=".$Password."&msisdn=".$dest_mobileno."&sid=".$Senderid."&msg=".$msg1."&fl=0&gwid=2";
	$ch = curl_init('http://www.bulksms.mairaads.com/vendorsms/pushsms.aspx?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); 
	curl_close($ch);

	$Username  = "touchmedia";
	$Password = "Touchmedia@2018";
	$Senderid = "TCHMED";
	$dest_mobileno = "+917038138691";
	$msg1 =  "Received new enquiry from: ".$name."\n Mobile No.: ".$phone."\n Email: ".$email."\n Date: ".$date."\n Message: ".$msg;
	$data2 = "user=".$Username."&password=".$Password."&msisdn=".$dest_mobileno."&sid=".$Senderid."&msg=".$msg1."&fl=0&gwid=2";
	$ch = curl_init('http://www.bulksms.mairaads.com/vendorsms/pushsms.aspx?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data2);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); 
	curl_close($ch);

	$to = "hussainpaatwalapune@gmail.com, ".$send_mail;
	$headers = "MIME-Version: 1.1";
	$headers .= "Content-type: text/html; charset=iso-8859-1";
	$headers .= "From: " . $email . "\r\n"; // Sender's E-mail
	$headers .= "Return-Path:". $email;
	$subject = 'New Booking by Client from'.$name; // Subject of your email
	
	$send_msg = "You have an Appointment from $name \n Name: $name \n Phone No: $phone \n Email : $email \n Message: $msg\n";
	
	if(@mail($to,$subject,$send_msg,$headers))
	{
		echo "y";
	}
	else
	{
		echo "Not able to send the Message";
	}
	
}
$name = $_POST['name'];
$phone = $_POST['mobile'];
$email = $_POST['email'];
$date = $_POST['date'];
// $departments = $_POST['departments'];
$msg = $_POST['msg'];
$send_mail ="abc@gmail.com";
$dr_no = "8769712776";

// $name = "gil";
// $email = "eee";
// $phone = "9834125105";
// $date = "ssq";
// $time = "asa";
// $dr = "ss";
// $place = "aaa";
// $web = "aaa";
// $msg = "aaa";
// $send_mail ="gulashan@gmail.com";
// $dr_no = "8769712776";

send_it($name, $phone, $email, $date, $msg, $send_mail, $dr_no);

?>