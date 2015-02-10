<html>
	<head>
		<link href="include/style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<div class="blank">
		</div>
		<div class="wrapper">
         
		<?php 
			include_once("include/header.php");		
		?>
		 
		 <div class="content_area">
		 
		 <!-- This is the conten area-->
		 
		 	<div class="middle">
					
			</div>
		 
		 	<div class="right_c">
			<div class="big_line">
				<br />
				Blood Needed <br />
				<hr/>
			
		 
			</div>		 
		 
				<form action="" method="">	
					<p>
					<br/>
					<br/>
					<br/>
					<div class="text">
						Your Name:	<input type="text" name="y_name" value="" size="10" required placeholder="Your name" size="6">
						<br/>
						<br/>
						Your Phone:	<input type="text" name="phone" value="" size="10" required placeholder="mobile No" size="6">
						<br/>
						<br/>
						Your donar No:	<input type="text" name="d_no" value="" size="10" placeholder="Optional" size="6"><br/><br/>
						<br/>
						<br/>
					</div>	
						<p>						
						In future do you also donate blood?  :
						<input type="radio" name="future" value="yes" >yes
						<input type="radio" name="future" value="no">no
						</p>					
					</p>
					<br/>
					<hr/>
					<br/>
					<br/>
					<div class="text">
						<p>
							Dist:
							<select name="dist">
							  <option value="Dhaka">Dhaka</option>
							  <option value="Chittagong">Chittagong</option>
							  <option value="Rajshahi">Rajshahi</option>
							  <option value="Khulna">	khulna</option>
							</select> 
						</p>
						<br/>
						
						<p>
							Thana:
							<select name="thana">
							  <option value="Ramna">Ramna</option>
							  <option value="Katawali">Katawali</option>
							  <option value="Doublemooring">D.mooring</option>
							  <option value="Banskhali">Banskhali</option>
							</select> 
						</p>
						<br/>
						
						
						<p>
						  word: <input type="text" name="word" value="" size="6"><br/><br/>
						</p>
						<input type="submit" class="button" name="search" value="search">
						<br/>
					</div>
						
				</form>
		 </div>
		 

		 
		 <div class="left_c">
			
			<div class="big_line">
				<br />
				Donate Blood <br />
				<hr/>
			
		 
			</div>		 
			
				<form action="" method="">	
					<p>
					<br/>
					<div class="text">
						Your Name:	<input type="text" name="y_name" value="" required placeholder="Your name"size="10">
						<br/>
						<br/>
						<p>
							Blood Group:
							<select name="b_group">
							  <option value="A+">A+</option>
							  <option value="AB+">AB+</option>
							  <option value="B+">B+</option>
							  <option value="O+">O+</option>
							  <option value="O-">O-</option>
							</select> 
						</p>
						<br/>
						Your Phone:	<input type="text" name="phone" value="" required placeholder="mobile No" size="10">
						<br/>
						<p>
							Secondary mobile/email(for account security):<input type="text" name="s_contact" value="" size="10">						
						</p>
						
						<br/>
						<br/>
						
						<p>
							Dist:
							<select name="dist">
							  <option value="Dhaka">Dhaka</option>
							  <option value="Chittagong">Chittagong</option>
							  <option value="Rajshahi">Rajshahi</option>
							  <option value="Khulna">	khulna</option>
							</select> 
						</p>
						
						<br/>
						
						<p>
							Thana:
							<select name="thana">
							  <option value="Ramna">Ramna</option>
							  <option value="Katawali">Katawali</option>
							  <option value="Doublemooring">Doublemooring</option>
							  <option value="Banskhali">Banskhali</option>
							</select> 
						</p>
						<br/>
						<p>
							Union/City Corp:
							<select name="u_city_corp">
							  <option value="Dhaka south">Dhaka south</option>
							  <option value="Chittagong">Chittagong north</option>
							</select> 
						</p>
						<br/>
						<p>
						  word: <input type="text" name="word" value=""><br/><br/>
						</p>
						<p>
						Date of Birth:
						<input type="date"   value="yyyy-mm-dd" class="input-medium search-query" size="4" onkeypress="return false">
						</p>
						<p>
						weight: <input type="text" name="weight" value="" size="2">Kg.
						</p>
						Last donation time:
							<input type="date"   value="yyyy-mm-dd" class="input-medium search-query" onkeypress="return false" size="8"><br/>
						<input type="submit" class="button" name="Add" value="Add to list">
					
					</div>
			
				</form>
		 
		 
		 
		 
			</div>
		 
		 
		 <div class="redline">
		 
		 </div>
		 
		 
		 
		 
		 </div>
          
		  
				<?php
					include_once('include/footer.php');				
				?>
			<div class="foot_name">
						<h3>Home Page</h3>	
			</div>
		</div>
	
	
	</body>
</html>