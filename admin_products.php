<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فیتنس پلاس</title>
	
	<style>
	
		.bg{
			margin-bottom: 10px;
		}
		
		.mahsol .tr td{
			color: aliceblue;
			background-color: darkorange;
		}
		
		.mahsol .tr2 td{
			background-color: darkmagenta;
			color: #fff;
		}
		
		.a{
			color: white;
			text-decoration: none;
		}
		
		.b{
			color: white;
			text-decoration: none;
		}
		
		.tb{
			margin-right: 150px;
			color: #fff;
		}
		
		.tb input[type="submit"]{
			cursor: pointer;
		}
		
		.tb input[type="reset"]{
			cursor: pointer;
		}
		
		.form{
			margin-bottom: 10px;
			padding-top: 20px;
		}
		
		.payam{
			position: absolute;
			margin-top: 8px;
			margin-right: 8px;
		}
		
		.payam input[type="submit"]{
			border-radius: 5px;
			padding: 5px 8px;
			margin-bottom: 8px;
			cursor: pointer;
			border: 1px solid #ff4743;
			background: #ff4743;
			color: #fff;
		}

		.member{
			margin-top: -41.2px;
			margin-right: 120px;
			position: absolute;
		}

		.sabt{
			color: #fff;
			background: #ff4743;
			cursor: pointer;
			width: 80px;
	        padding: 10px;
	        margin-top: 10px;
			margin-bottom: 20px;
	        font-size:12px;
			border: 1px solid #fff;
		}

		.reset{
			color: #fff;
			background: #ff4743;
			cursor: pointer;
			width: 80px;
	        padding: 10px;
	        margin-top: 10px;
			margin-bottom: 20px;
	        font-size:12px;
			border: 1px solid #fff;
		}
	
	</style>
	
	
</head>

<body>
	<?php
	include('header.php');

	//start (condition enter admin)
	if(isset($_SESSION["state_login"]) && !empty($_SESSION["state_login"]) && isset($_SESSION["user_type"]) && !empty($_SESSION["user_type"])&&$_SESSION["user_type"]=="admin"){
	
		$link=mysqli_connect("localhost","root","","fitnessplus");
		if(mysqli_connect_errno())
		exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());
	
	$url= $pro_code= $pro_name= $pro_image= $pro_detail="";
	$btn_caption="افزودن";
	if(isset($_GET['id']) && !empty($_GET['id'])){
	$id=$_GET['id'];
	if(isset($_GET['action'])&&$_GET['action']=='EDIT'){
		$query="SELECT *FROM products WHERE pro_code='$id'";
	    $result=mysqli_query($link,$query);
		if($row=mysqli_fetch_array($result)){
			$pro_code=$row['pro_code'];
			$pro_name=$row['pro_name'];
			$pro_image=$row['pro_image'];
			$pro_detail=$row['pro_detail'];
			$url="?id=$pro_code&action=EDIT";
			$btn_caption="ویرایش";
		}
	}else if(isset($_GET['action']) && $_GET['action']=='DELETE'){
				$query="DELETE FROM `products` WHERE `pro_code` = ".$id;
			      if(mysqli_query($link,$query))
			       echo("<center><p style='color:green;'><b>پست با موفقیت حذف شد</b></p></center>");
					  else
						echo("<center><p style='color:red;'><b>خطا در حذف پست</b></p></center>");
	}
	}
	?>

	<div class="bg">
		<div class="payam">
		<form action="payam.php">
		<input type="submit" value="پیام های دریافتی"/>
		</form>
		<form action="members.php">
		<input class="member" type="submit" value="اعضا"/>
		</form>
		</div>
	
	<?php
	
	$query="SELECT *FROM products";
	$result=mysqli_query($link,$query);
	
	?>
	<br/><br/><br/><br/>
		
	<div class="mahsol">
	<table border="2px" style="width: 100%;">
		
		<tr class="tr" align="center">
		<td>کد پست</td>
		<td>نام ورزش</td>
		<td>ویدیو</td>
		<td>ابزار کاربردی</td>
		</tr>
		
		
		<?php
		while($row=mysqli_fetch_array($result)){
		?>
		<tr class="tr2" align="center">
		<td><?php echo($row['pro_code'])?></td>
			<td><?php echo($row['pro_name'])?></td>
		<td><video src="image/products/<?php echo($row['pro_image'])?>"width="150px" height="150px" controls/></td>
			<td>
				<b><a class="a" href="admin_products.php?id=<?php echo($row['pro_code'])?>&action=EDIT" style="text-decoration: none;">ویرایش</a></b> &nbsp;| &nbsp; <b><a class="b" href="admin_products.php?id=<?php echo($row['pro_code'])?>&action=DELETE">حذف</a></b>
			</td>
		</tr>
		</div>
		<?php
		}
			?>

	</table>
	

	<div class="form">
		<form name="add_product" action="action_admin_products.php<?php if(!empty($url)) echo($url);?>" method="post" enctype="multipart/form-data">
	    <table class="tb" style="width: 100%;" border="0" style="margin-left: auto; margin-right: auto;">
		
		<tr>
		<td style="width: 22%;">کد پست <span style="color: red;">*</span></td>
			<td style="width: 78%;"><input type="text" id="pro_code" name="pro_code" value="<?php echo($pro_code)?>" /></td>
		</tr>
		
		<tr>
			<td>نام ورزش <span style="color: red;">*</span></td>
			<td><input type="text" style="text-align:right;" id="pro_name" name="pro_name" value="<?php echo($pro_name)?>" /></td>
		</tr>
		
		<tr>
			<td>توضیحات <span style="color: red;">*</span></td>
			<td><textarea id="pro_detail" name="pro_detail" cols="45" rows="10" wrap="virtual" ><?php echo($pro_detail)?></textarea></td>
		</tr>
		
		<tr>
		<td><br/><br/></td>
			<td><input class="sabt" type="submit" value="<?php echo($btn_caption)?>" />&nbsp;&nbsp;&nbsp;<input class="reset" type="reset" value="جدید" /></td>
		</tr>
		</table>
	</form>
		</div>
	
	
	<br/><br/>
	
	
	</div>
	
	
	<?php 
		//end( condition enter admin )
		}else{
		?>
	    <script type="text/javascript">
		<!--
			location.replace("index.php");
			-->
		</script>
	<?php
	}
	
	
	include('footer2.php');
	?>
</body>
</html>