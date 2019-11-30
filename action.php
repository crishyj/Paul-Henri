<?php
	$emailFrom = "test@test.com";
	$to = $_POST["email1"];        
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
					<td style="font-size:16px; font-weight:bold"><strong>' . $_POST["boitier"].'</strong></td>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script>
        localStorage.clear();
    </script>
</head>

<body>
    <div class="action_page">
        <div class="logo">
            <a class="" href="#">
                <img src="logo.png" alt="">
            </a>
        </div>
        <div class="container">
            <div>
                <select class="selectpicker translate" data-width="fit">
                    <option  data-content='<span class="flag-icon flag-icon-us"></span> English' value="en">English</option>
                    <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español' value="es">Español</option>
                    <option  data-content='<span class="flag-icon flag-icon-fr"></span> France' value="fr">French</option>
                    <option  data-content='<span class="flag-icon flag-icon-cn"></span> Chinese' value="cn">Chinese</option>
                </select>
            </div>
            <div class="out">
                <a class="float-right" href = "index.php">Logout</a>
            </div>
            <div class="action">
                <h2 class="mb-5 lang" key="action"></h2>
                <p> <span class="lang" key="action_text"></span> : <?php echo $_POST["email1"]; ?>, WALKWIFI.</p>
        </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>
    <script src="lang.js"></script>
    <script src="main.js"></script>
</body>

</html>
