<?php

	header('Access-Control-Allow-Origin: *');  
    header("Access-Control-Allow-Headers: *");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Methods: *');
	
		$scon = mysqli_connect("localhost","root","","Saiagro");
		// Retrieve form data
		$name = $_POST['Name'];
		$phoneNo = $_POST['PhoneNo'];
		$email = $_POST['Email'];
		$address = $_POST['Address'];
		$massage = $_POST['Massage'];
	
		// SQL query to insert data into a table (change "your_table_name" to your actual table name)
		$sql = "INSERT INTO entry_details(Name, Phone_No, Email,Address,Message)  values('$name', '$phoneNo', '$email', '$address', '$massage ')";
		
		$query_run = mysqli_query($scon,$sql);
      
    if($query_run) {  //invalid
		$response['success'] = true;
		$response['message'] = "Thank you! We've received your message. Someone from our team will contact you soon."; 
		echo json_encode($response);
	}else{  //invalid
		$response['success'] = false;
		$response['message'] = "Unknown error is occurred while filling details.";
		echo json_encode($response);
	}

	mysqli_close($scon);
		
?>