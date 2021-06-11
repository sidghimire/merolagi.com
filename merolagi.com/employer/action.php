<?php
//Global Imports
include $_SERVER['DOCUMENT_ROOT'] . "/res/global/index.php";
include $_SERVER['DOCUMENT_ROOT'] . "/res/packages/PHPMailer/PHPMailerAutoload.php";

//Global Imports
?>
<?php
$email = mysqli_escape_string($conn1, $_POST['email']);
$password = mysqli_escape_string($conn1, $_POST['password']);
$userExistSql = "SELECT email FROM employer_login where email='" . $email . "'";
$userExistSql = mysqli_query($conn1, $userExistSql);
if (mysqli_num_rows($userExistSql) == 0) {
    $token = uniqid(md5(time()));
    $activationSql = "INSERT INTO `employer_login_activation`(`email`, `password`, `token`, `sentDate`, `currentState`) VALUES ('" . $email . "','" . password_hash($password,PASSWORD_DEFAULT) . "','" . $token . "','" . date("Y/m/d") . "','YES')";
    $activationSql = mysqli_query($conn1, $activationSql);
  
     $to = $email;
         $subject = "Please Activate Your Account";
       
         $message ='
<body style="background-color:#f4f4f4"> 
	<table align="center" border="0" cellpadding="0" cellspacing="0"
		width="550" bgcolor="white" style="border:2px solid black"> 
		<tbody> 
			<tr> 
				<td align="center"> 
					<table align="center" border="0" cellpadding="0"
						cellspacing="0" class="col-550" width="550"> 
						<tbody> 
							<tr> 
								<td align="center" style="background-color: #ff4b5c; 
										height: 50px;"> 

									<a href="https:\\merolagi.com" style="text-decoration: none;"> 
										<p style="color:white; 
												font-weight:bold;font-size:30px"> 
											Merolagi.com 
										</p> 
									</a> 
								</td> 
							</tr> 
						</tbody> 
					</table> 
				</td> 
			</tr> 
			<tr style="height: 300px;"> 
				<td align="center" style="border: none; 
						border-bottom: 2px solid #4cb96b; 
						padding-right: 20px;padding-left:20px"> 

					<p style="font-weight: bolder;font-size: 42px; 
							letter-spacing: 0.025em; 
							color:black;"> 
						Hello Customers! 
						<br> We Are Glad To Make You A Part Of Merolagi.com 
					</p> 
				</td> 
			</tr> 

			<tr style="display: inline-block;"> 
				<td style="height: 150px; 
						padding: 20px; 
						border: none; 
						border-bottom: 2px solid #361B0E; 
						background-color: white;"> 
					
					<h2 style="text-align: left; 
							align-items: center;"> 
						Please Click On The Link Below To Activate Your Account. 
				</h2> 
					<p class="data"
					style="text-align: justify-all; 
							align-items: center; 
							font-size: 15px; 
							padding-bottom: 12px;"> 
						Merolagi.com is a fresh startup working on reducing the distance barrier between customers and product. We hope you love our service. 
					</p> 
					<p> 
						<a href= 
"https://www.merolagi.com/activate/activate_employer.php?token='.$token.'"
						style="text-decoration: none; 
								color:black; 
								border: 2px solid Blue; 
								padding: 10px 30px; 
								font-weight: bold;"> 
						Activate 
					</a> 
					</p> 
				</td> 
			</tr> 
			<tr style="border: none; 
			background-color: #056674; 
			height: 40px; 
			color:white; 
			padding-bottom: 20px; 
			text-align: center;"> 
				
<td height="40px" align="center"> 
	<p style="color:white; 
	line-height: 1.5em;"> 
	Merolagi.com 
	</p> 
	<a href="#"
	style="border:none; 
		text-decoration: none; 
		padding: 5px;"> 
			
	<img height="30"
	src= 
"https://extraaedgeresources.blob.core.windows.net/demo/salesdemo/EmailAttachments/icon-twitter_20190610074030.png"
	width="30" /> 
	</a> 
	
	<a href="#"
	style="border:none; 
	text-decoration: none; 
	padding: 5px;"> 
	
	<img height="30"
	src= 
"https://extraaedgeresources.blob.core.windows.net/demo/salesdemo/EmailAttachments/icon-linkedin_20190610074015.png"
width="30" /> 
	</a> 
	
	<a href="#"
	style="border:none; 
	text-decoration: none; 
	padding: 5px;"> 
	
	<img height="20"
	src= 
"https://extraaedgeresources.blob.core.windows.net/demo/salesdemo/EmailAttachments/facebook-letter-logo_20190610100050.png"
		width="24"
		style="position: relative; 
			padding-bottom: 5px;" /> 
	</a> 
</td> 
</tr> 
<tr> 
<td style="font-family:"Open Sans", Arial, sans-serif; 
		font-size:11px; line-height:18px; 
		color:#999999;" 
	valign="top"
	align="center"> 
<a href="#"
target="_blank"
style="color:#999999; 
		text-decoration:underline;">PRIVACY STATEMENT</a> 
		| <a href="#" target="_blank"
		style="color:#999999; text-decoration:underline;">TERMS OF SERVICE</a> 
		| <a href="#"
		target="_blank"
		style="color:#999999; text-decoration:underline;">RETURNS</a><br> 
				© 2020 Merolagi.com. All Rights Reserved.<br> 
				If you do not wish to receive any further 
				emails from us, please 
				<a href="#"
				target="_blank"
				style="text-decoration:none; 
						color:#999999;">unsubscribe</a> 
			</td> 
			</tr> 
			</tbody></table></td> 
		</tr> 
		<tr> 
		<td class="em_hide"
		style="line-height:1px; 
				min-width:700px; 
				background-color:#ffffff;"> 
			<img alt=""
			src="images/spacer.gif"
			style="max-height:1px; 
			min-height:1px; 
			display:block; 
			width:700px; 
			min-width:700px;" 
			width="700"
			border="0"
			height="1"> 
			</td> 
		</tr> 
		</tbody> 
	</table> 
</body> 
';
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure="ssl";
$mail->Host="smtp.gmail.com";
$mail->Port="465";
$mail->isHTML();
$mail->Username="merolaginepal@gmail.com";
$mail->Password="Queen@1991";
$mail->SetFrom("no-reply@merolagi.com");
$mail->Subject=$subject;
$mail->Body=$message;
$mail->AddAddress($to);

$mail->Send();



 
 
    header("Location: /employer/signIn/index.php?response=Success");
} else {
    header("Location: index.php?response=UserExist");
}
