<html>
	<head>
		<link href="include/style.css" type="text/css" rel="stylesheet" />
	</head>


	<body>
		<div class="wrapper">
         
		 <?php
			include_once('include/header.php');		 
		 ?>
		 <div class ="content_area">
				<h1>Manage places</h1>
				</br>
				<hr style=" background-color:#A8A8A8;height:1px; border:none;" />
			<div class="content_border">
				<div id="column1" style="float:left; margin:0; width:33%;">
					Division(English/Bengali)
				</div>

				<div id="column2" style="float:left; margin:0;width:33%;">
				 District(English/Bengali)
				 </div>

				<div id="column3" style="float:left; margin:0;width:33%">
				 Thanas(English/Bengali)
				</div>
			</div>
				</br>
				<hr style=" background-color:#A8A8A8;height:2px; border:none;" />
		  	<div class="content_border2">
				<div id="column11" style="float:left; margin:0; width:33%;">
					Dhaka
				</div>
			 
				<div id="column22" style="float:left; margin:0;width:33%;">
					Dhaka
				</div>
			
				<div id="column33" style="float:left; margin:0;width:33%">
				 <p>Adabor{union1, union2},
				 Mohakhali{ union1, union2,union3, union4},
				 Mohakhali{ union1, union2,union3, union4},</p>
				</div>

			</div>

				</br>
				 <hr style=" background-color:#A8A8A8;height:1px; border:none;" />

			<div class="content_border3">
				<div id="column111" style="float:left; margin:0; width:33%;">
					Dhaka
				</div>
			 
				<div id="column222" style="float:left; margin:0;width:33%;">
					Dhaka
				</div>
				
				<div id="column333" style="float:left; margin:0;width:33%">
					 <p>Adabor{union1, union2},
					 Mohakhali{ union1, union2,union3, union4},
					 Mohakhali{ union1, union2,union3, union4}</p>
				</div>

			</div>
   
		 <div class="input">
			<select id="district" >
				<option value="Dhaka">Dhaka</option>
				<option value="ctg">ctg</option>
				<option value="syhlet">syhlet</option>
				<option value="khulna">khulna</option>
			</select>
			<input type="text" value="" placeholder="Thana name(in English)">
			<input type="text" value="" placeholder="Thana name(in Bangla)">
			<input type="password" value="" placeholder="Master Password">
			<button class="button">Add new Thana</button>
			
			</br>
			</br>
			<select id="Union" >
				<option value="Dhaka">Dhaka</option>
				<option value="ctg">ctg</option>
				<option value="syhlet">syhlet</option>
				<option value="khulna">khulna</option>
			</select>
			<input type="text" value="" placeholder="Thana name(in English)">
			<input type="text" value="" placeholder="Thana name(in Bangla)">
			<input type="password" value="" placeholder="Master Password">
			<button class="button">Add new Thana</button>
		 </div>
		 
		</div>
          
		<?php
			include_once('include/footer.php');	
				
		?>


		</div>
	</body>
</html>