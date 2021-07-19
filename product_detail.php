<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فیتنس پلاس</title>
	
	<style>
	
		.sef a{
			color: red;
			background: #64C18D;
			border-radius: 100px;
			font-size: 25px;
		}
		
		.sef a:hover{
			color: #fff;
			background: #B11DBD;
		}
		
		.kharid p{
			color: red;
			font-size: 19px;
		}

		table tr td{
			border: 2px solid #ddd;
			font-size: 13px;
		}

		table{
			margin-right: 10px;
		}

		.detail{
			font-size: 20px;
		}
	
	</style>
	
</head>

<body>
		<?php
	include('header.php');
	
			$link=mysqli_connect("localhost","root","","fitnessplus");
		if(mysqli_connect_errno())
			exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());
	
	$pro_code=0;
	if(isset($_GET['id']))
		$pro_code=$_GET['id'];
	
	$query="SELECT *FROM products WHERE pro_code='$pro_code'";
	$result=mysqli_query($link,$query);
	?>
	<br/><table style="width: 97.6%" border="1">
		<tr>
			
			<?php
			if($row=mysqli_fetch_array($result)){
			?>
		    <td style="border-style: dotted dashed;vertical-align: top;width: 33%;">
				<center><h4 class="detail" style="color: indigo;"><?php echo($row['pro_name'])?></h4>
							<video src="image/products/<?php echo($row['pro_image'])?>" width="300px" height="300px" controls /></center>
							<br/>
				<div class="detail"><center>توضیحات: <span style="color:darkmagenta;"><?php echo($row['pro_detail']);?></span></font></center></div>
				<br/><br/>
								</div>
			</td>
			
				
			<?php
			}
			?>
		</tr>
	</table>
	
		<?php
	include('footer.php');
	?>				
</body>
</html>