<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>حساب کاربری</title>
</head>

<body>
<font color="green">
	<?php
	include('header.php');
	?>

		<?php		
		
	    if(isset($_POST['UserName'])&& !empty($_POST['UserName'])&&
	   isset($_POST['Password']) && !empty($_POST['Password'])){
		
		$Username=$_POST['UserName'];
		$Password=$_POST['Password'];
	
	}else{
		echo("<center><p style='color:red;'><b>برخی از فیلدها مقداردهی نشده است</p></b></center>");
		include('footer.php');
		exit();}
        $link=mysqli_connect("localhost","root","","fitnessplus");
		if(mysqli_connect_errno())
		exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());
	$query="SELECT *FROM users WHERE Username='$Username' AND Password='$Password'";
	$result=mysqli_query($link,$query);
	$row=mysqli_fetch_array($result);
	
	if($row){
		$_SESSION["state_login"]=true;
		$_SESSION["Name"]=$row['Name'];
		$_SESSION["Phone"]=$row['phone'];
		$_SESSION["Username"]=$row['Username'];
		
		if($row["type"]==0){
			$_SESSION["user_type"]="public";
			?>
			<script type="text/javascript">
		<!--
			location.replace("panel.php");
			-->
		</script>
		<?php
		}
		
		elseif($row["type"]==1){
			$_SESSION["user_type"]="admin";
			?>
		<script type="text/javascript">
		<!--
			location.replace("admin_products.php");
			-->
		</script>
		<?php
		}
		echo("<center><h3><p style='color:green;'><b>{$row['Username']}  گرامی به سایت تناسب اندام فیتنس پلاس خوش آمدید</h3></b></p></center>");
	}else
		echo("<center><p style='color:red;'><b>نام کاربری یا کلمه عبور یافت نشد</b></p></center>");
	mysqli_close($link);
	?>

	<?php
	include('footer.php');
	?>
</body>
</html>