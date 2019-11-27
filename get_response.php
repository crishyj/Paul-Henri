<?php 
	require_once("config.php");
	if(isset($_POST['your_country']) && isset($_POST['your_email']) && isset($_POST['your_code']))
	{
	//require_once("contact_mail.php");
	
		$yourCode = $conn->real_escape_string($_POST['your_code']);
		$yourEmail = $conn->real_escape_string($_POST['your_email']);
		$yourCountry = $conn->real_escape_string($_POST['your_country']);
		$starting = $conn->real_escape_string($_POST['starting']);
		$ending = $conn->real_escape_string($_POST['ending']);

		$sql = "SELECT * FROM code_correspondence WHERE code = $yourCode";
		$result = $conn->query($sql);
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$code = $row['code'];
				$boitier = $row['boitier'];
				$carte = $row['carte'];
		
				$sql1 = "INSERT INTO users (code, boitier, carte, startingtime, endingtime, email, country) 
						VALUES ('$yourCode', '$boitier', '$carte', '$starting', '$ending', '$yourEmail', '$yourCountry')";
				if ($conn->query($sql1) === TRUE) {

				} else {
					echo "Error: " . $sql1 . "<br>" . $conn->error;
				}
			} 
				
    		if(!$result = $conn->query($sql))
    		{
    			die('There was an error running the query [' . $conn->error . ']');
    		}
    		else
    		{
    			
    			echo $boitier;		
    		}
		}
		else {
			echo "not found!!";	
		}
	}
	else
	{
		echo "Please fill Name and Email";
	}
?>