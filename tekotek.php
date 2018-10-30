<!DOCTYPE html>
<html>
<head>
	<title>tekotek</title>
	<style type="text/css">
		.huruf{
			font-family: "Helvetica";
		}
		.orange{
			color: orange;
			font-family: "Helvetica";
		}
		.brown{
			color: brown;
			font-family: "Helvetica";
		}
	</style>
</head>
<body>
<?php
	for($i=100;$i>0;$i--){
		if($i==100){
			echo '<p class="huruf">'."Tekotek-kotek anak ayam turun $i".'<br></p>';
		}elseif(($i%2)==1){
			echo '<p class="orange">'."Mati Satu tinggal $i".'<br></p>';
		}else{
			echo '<p class="brown">'."Mati Satu tinggal $i".'<br></p>';
		}
	}
?>
</body>
</html>