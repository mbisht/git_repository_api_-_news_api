<html>
	<head>
	</head>
	<body>
		<div class="container">
		  
			<h2>Basic Details</h2>
		  <form action="saveform1.php" method="POST">
			<div class="form-group">
			  <label for="INR">INR:</label>
			  <input type="number" class="form-control" id="name" placeholder="Enter Name" name="name" id="name" value="" required>
			
			</div>
			
	<?php
	
		//ini_set('user_agent', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1) Gecko/20090615 Firefox/3.5');
		$homepage = (file_get_contents('https://free.currencyconverterapi.com/api/v6/convert?q=USD_PHP'));
		$data = json_decode($homepage, true);
	?>
		<span>
			<?php 
				echo "<pre>";  
				$d=$data['results']['USD_PHP']['val']; 
			echo "<input type=text value='$d' name='money' id='money' readonly/>"
			?>
		<span>
		
		<span>
			<?php 
				//echo $result= $name;
			?>
		</span>	
			<button type="submit" class="btn btn-success">Submit</button>
		  </form>
		  
		</div>
	</body>
</html>	