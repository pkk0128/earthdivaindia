<!-- <!DOCTYPE html>
<html>
<head>
	<title>This is testing of header file</title>
	<link rel="stylesheet" type="text/css" href="head.css">
</head>
<body> -->
	<?php $logout= new earth; ?>
	<div class="main">
		<fieldset>
			<legend>Welcome to Earth diva..</legend>
		<div class="upper_buttons">
			<div class="upleft_buttons">
				<table>
                    <tr>
                        <td> <a href="#">Home</a></td>
                        <td><a href="#">About Us</a></td>
                        <td><a href="#">Fair-Trade</a></td>
                        <td><a href="#">Wholesale</a></td>
                        <td><a href="#">Testimonials</a></td>
                        <td><a href="#">Quick Order</a></td>
                        <td><a href="#">Blog</a></td>
                        <td><a href="#">Press</a></td>
                    </tr>
                </table>
			</div>
			<div class="upmid_button"></div>
			<div class="upright_buttons">
				<table>
					<?php if(!isset($_SESSION['vendor_id'])){ ?>
                    <tr>
                        <td><a href="#">New User</a></td>
                        <td><a href="#">Sign In</a></td>
                        <td><a href="#">Item in Cart Nan</a></td>
                    </tr>
                	<?php }else{ ?>
                	<tr>
                		<td><a href=""><?php echo $_SESSION['vendor_name']; ?></a></td>
                		<td><a href="<?php $logout->logout(); ?>"> Logout </a></td>
                	</tr>
                	<?php } ?>
                </table>
			</div>
		</div>
		<div class="middle_buttons">
			<div class="midleft">
				<div class="logo1">
					<div class="img1"><a href="index.php"><img src="image/logo.jpg" min-width="50%" height="60px"/></a></div>
					<div class="img2"><a href="index.php"><img src="image/d4d.gif" min-width="24%" height="60px" /></a></div>
					<div class="img3"><a href="index.php"><img src="image/FTF-logo-Vertical.jpg" min-width="24%" height="60px"/></a></div>
	            </div>
			</div>
			<div class="midright">
				<div class="logo2">
					<div class="search"><h3><input type="search" name="search" size="30%" maxlength="100%" placeholder="Search here.." > <button>Search</button></h3>
					</div>
	                
	            </div>
			</div>
		</div>
		<div class="bottom_buttons">
            <table width="100%" cellspacing="10px">
            	<?php
            		$vendor_user_id = "";
            		if(!isset($_SESSION['vendor_id2'])){
            			?>
            			<tr style="text-align-last: center;" >
		                    <td><a href="../index.php">Home</a></td>
		                    <td><a href="../admin/index.php">Admin</a></td>
		                    <td><a href="../customer/index.php">Customer</a></td>
		                    <td><a href="index.php">Vendor</a></td>
		                    <td><a href="../wholesale/index.php">Wholesale</a></td>
		                </tr>
            			<?php
            		}else{
            			?>
            			<tr style="text-align-last: center;" >
		                    <td><a href="../index.php">Home</a></td>
		                    <td><a href="product_insert.php">Insert Product</a></td>
		                    <td><a href="purchase_req_from_admin.php">Purchase Request</a></td>
		                    <td><a href="product_status.php">All Product Status</a></td>
		                    <td><a href="items_in_cart.php">Order Confirmed</a></td>
		                </tr>
            			<?php
		            		}
		            	?>
                
                
            </table>
		</div>
		</fieldset>
	</div>
<!-- </body>
</html> -->