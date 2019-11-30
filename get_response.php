<?php 
	require_once("config.php");
    $code = $conn->real_escape_string($_POST['code']);
    $email = $conn->real_escape_string($_POST['email']);
    $country = $conn->real_escape_string($_POST['country']);
    $starting_date = $conn->real_escape_string($_POST['starting_date']);
    $ending_date = $conn->real_escape_string($_POST['ending_date']);
    
    $date1 = new DateTime($starting_date);
    $date2 = new DateTime($ending_date);
    $interval = $date1->diff($date2);
    $diffdate = $interval->days;
   
    $sql = "SELECT * FROM code_correspondence WHERE code = $code";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $code = $row['code'];
            $boitier = $row['boitier'];
            $carte = $row['carte'];    
            $sql1 = "INSERT INTO users (code, boitier, carte, startingtime, endingtime, email, country, diffdate) 
                    VALUES ('$code', '$boitier', '$carte', '$starting_date', '$ending_date', '$email', '$country', '$diffdate')";
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
	
?>