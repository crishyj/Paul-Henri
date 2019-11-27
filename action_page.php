<?php
	$emailFrom = "test@test.com";
	$to = $_GET["email"];        
	$subject = "Congratulations!";
	$message = '<body >
		<div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
			<table  width="100%" border="0" >
				<tr>
					<td style="font-size:16px; font-weight:bold">
					   <strong> Hello, you received your WalkWifi Code</strong>
					</td>
				</tr>
				<tr>
					<td style="font-size:14px; color:#323232">Code</td>     
				</tr>
				<tr>              
					<td style="font-size:16px; font-weight:bold"><strong>' . $_GET["boitier"].'</strong></td>
				</tr>							            
			</table>
		</div>
	</body>
	';  

	$headers = "From:" . $emailFrom . "\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
  
	mail($to,$subject,$message,$headers);

?>



<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <style>
          body {
            color: #fff;
            background-color: white;
            background-image: url(walkwifi2.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: 25% 15%;
            background-size: 100%;
        }
        .action{
            margin-top: 100px;
        }
        
        .action p{
            padding: 20px;
            text-align:center;
            font-size: 20px;
        }
      </style>
</head>

<body>
    <div class="container">
        <div class="mt-5">
            <a class="float-right" href = "index.php">Logout</a>
        </div>
        <div class="action">
            <h2 class="mb-5">Actions</h2>
            <p>Your payment has been succesfully sent. Thank you. You will receive your WALKWIFI Code to the email adress : <?php echo $_GET["email"]; ?>, WALKWIFI.</p>
       </div>
    </div>
    
    

</body>

</html>