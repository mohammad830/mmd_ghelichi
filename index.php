<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فیتنس پلاس</title>

    <style>

		table tr td{
			border: 2px solid #ddd;
			font-size: 13px;
		}
		
		.dokme{
			        color: aliceblue;
				    background: blue;
				    cursor: pointer;
				    width: 150px;
	                padding: 10px;
			        margin-bottom: 10px;
	                border: 100;
	                font-size:15px;
		}

		.name{
			color: indigo;
			background:#21F0C9;
			text-align: center;
		}

		.table{
			margin-right: 8px;
		}
	
	</style>

</head>

<body>

		<?php
	include('header.php');
	
	
		$link=mysqli_connect("localhost","root","","fitnessplus");
		if(mysqli_connect_errno())
			exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());
	$query="SELECT *FROM products WHERE pro_code";
	$result=mysqli_query($link,$query);
	?>
		<table class="table" style="width: 98%; border: 1px">
		<tr>
			<?php
	$counter=0;
	while($row=mysqli_fetch_array($result)){
		$counter++;
	?>
			
			<td style="border-style: dotted dashed;vertical-align: top;width: 33%;">
				<h4 class="name"><?php echo($row['pro_name'])?></h4>
				
					<center><video src="image/products/<?php echo($row['pro_image'])?>"width="250px" height="250px" controls />
				<br/>
				قیمت: <span style="color:fuchsia;"><?php echo($row['pro_price'])?></span>&nbsp;&nbsp;تومان
				<br/>
				تعداد موجودی: <span style="color: darkred;"><?php echo($row['pro_qty'])?></span>
				<br/>
				توضیحات: <span style="color:darkmagenta;"><?php echo(substr($row['pro_detail'],0,50))?>...</span></center>
				<br/><br/>
					<form name="order" action="product_detail.php?id=<?php echo($row['pro_code'])?>" method="post">
				<center>
						<input class="dokme" type="submit" value="جزئیات بیشتر..." onclick="check_input();" />
				</center>
					</form>
			</td>
			
			<?php
	if($counter %3==0)
		echo("</tr><tr>");
					}
			if($counter %3!=0)
				echo("</tr>");
	?>
	</table>
		<?php
	include('footer.php');
	?>
</body>
</html>