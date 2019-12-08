<?php include_once'../connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Vendor</title>
	<link rel="stylesheet" type="text/css" href="vendor_head.css">
</head>
<body>
	<?php include_once 'vhead.php'; ?>

	<div class="main_index">
		<fieldset>
			<br><br>
			<div class="login_maintain">
				<div class="left_tab">
				
				</div>
					<?php
					 if(isset($_SESSION['vendor_id'])){
						// die("Vendor Id is  not set");
						include_once 'vendor_welcome.php'; }
						else{
							include_once 'vendor_login.php';
						} ?>
					
					
				<div class="right_tab">
					
				</div>
			</div>
			
			<br><br>
		</fieldset>
	</div>
	
</body>
</html>

