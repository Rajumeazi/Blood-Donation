<html>
	<head>
		<link href="include/style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<div class="blank">
		</div>
		<div class="wrapper">
            
		 <?php
			include_once('include/header.php');		 
		 ?> 
	
		<div class="content_area">
			
			<div class="mid_cont">
				<br/>
				<br/>
				<br/>
				<h3>Welcome "USER_NAME"</h3>
				<br/>
				<img src="img.png"/>
				<button class="button_left">Change Picture</button>
				<p>
					Your blood group: A+ <br />
					Your phone number:   <br />
					Secondary phone:	<br />
					District:           <br />
					Thana:				<br />
					Union/City corp:	<br />
					Word:				<br />
					Date of Birth:      <br />
					Weight:				<br />
					Last blooddonation date:  <br /><br />
					
					
					
				
					<input type="submit" class="button" name="c_info" value="Change Information">
					<input type="submit" class="button" name="c_pass" value="Change Password">
				
				<br />
				<br />
				<br />
				<table class="text_c" width="70%" border="3px">
						<tr>
							<th colspan="3">List of your Blood donation</th>						
						
						<tr>	<th>Date</th>
						<th>Client</th>
						<th>Quantity</th>
						</tr>						
						<tr>
							<td>12-1-2012</td>
							<td>abul</td>
							<td>1 bag</td>
						</tr><tr>
							<td>12-1-2012</td>
							<td>abul</td>
							<td>1 bag</td>
						</tr><tr>
							<td>12-1-2012</td>
							<td>abul</td>
							<td>1 bag</td>
						</tr>
						
					</table>
					
				</p>
		 
			</div>
		 
		</div>
		<?php
			include_once('include/footer.php');		
		?>
		<div class="foot_name">
						<h3>User Details</h3>	
			</div>
			</div>

		</div>
	
	
	</body>
</html>