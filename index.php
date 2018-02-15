<!doctype html>
<html>
	<head>
		<title>ARCHIVUS</title>
		<meta charset="utf-8" />		
		<link href="css/w3.css" rel="stylesheet" />
	</head>
	<body>
		<div class="w3-container">
			<?php include('header.php')?>
			<!--do it here-->
				
				<br>
				<div class="w3-row">
					<div class="w3-col m3 w3-container">
						
							<div class="w3-container w3-center">
								<img src="common/imgs/PRO.jpg" >
							</div>
							<p class="w3-center">
								
							</p>
						</div>
					</div>
					
			<!--login modal-->
				<div class="w3-modal " id="loginmodal">
					<div class=" w3-round-large w3-modal-content w3-animate-top">
						<div class="w3-container w3-blue">
							<h3>USER LOGIN</h3>
							<span class="w3-button w3-display-topright" onclick="document.getElementById('loginmodal').style.display='none'">&times;</span>
						</div>
						<div class="w3-container">
							<br/>
								<center>
								<img src="common/imgs/img_avatar3.png" width="80px" class=" w3-round-xxlarge" />
								</center>
								<form>
									<input type="text" class="w3-input" placeholder="EMAIL" /><br/>
									<input type="password" class="w3-input" placeholder="PASSWORD" /><br/>
									<input type="submit" name="submit" value="LOGIN" class="w3-button w3-blue w3-round-large w3-right"/>									
								</form>
								<br/>
							<br/>
						</div>
					</div>
				</div>
			<!--end login modal-->				
			<!---->
			<?php include('footer.php')?>
		</div>
	</body>
</html>