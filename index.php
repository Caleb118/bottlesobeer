<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//
          EN" "http://www.w3.org/TR/xhtml/DTD/xhtml-transitional.dtd">
	<head>		<title>Caleb Hinton's Pre-Work</title>
		<link rel="stylesheet" type="text/css" href="style/style.css?<?=rand();?>">
	</head>		
	<body>		
		<div class="logo" id="logof"> </div>
		<div class="content">
			How many bottles are on the wall?
			<form method="post">				
				<input class="formword" type="text" name="lines" placeholder="">				
				<input class="form" type="submit" name="go" value="Bottles of beer">			
			</form>						
			<?php				
				if(isset($_POST['go'])) {					
					$l = $_POST['lines'];															
					if (is_numeric($l)) {						
						if ($l > 999999) {							
							$l = 999999;  /* This is to prevent buffer overflow */ 						
						}						
						echo '<textarea class="output" name="textarea" readonly>';
						echo 'There is ';						
						while($l >= 0) {							
							if ($l == 0) {								
								echo 'There is no more beer :(';								
								$l--;							
							} elseif ($l == 1) {								
								echo "1 bottle of beer on the wall, 1 bottle of beer, take it down pass it around \n";
								$l--;							
							} else {								
								echo "$l bottles of beer on the wall, $l bottles of beer, take one down pass it around. \n";								
								$l--;							}						} 												
								echo '</textarea>';											
							} else {  /* This is a basic error display + checking for numerical + prevent XSS attacks */						
							echo 'There are '. htmlspecialchars($_POST[lines]) .' bottle of beer on the wall?';						
							echo '<br /> <img src= "img/error.png" width="50%" style="margin-bottom: 40px;" /> <br />';					
							}									
				}			
				?>			
		</div>		
		This is created by Caleb Hinton, intended for Innovate Bham Pre-Work
	</body>
</html>