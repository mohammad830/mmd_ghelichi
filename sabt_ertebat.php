<!doctype html>
<html>
	<head>
	<title>ثبت پاسخ</title>
		
		<style>
		
		.ertebat{
			margin-top: 30px;
			padding-top: 20px;
			background: #ff4743;
			padding-bottom: 20px;
            width: 999px;
            margin-right: -4px;
		}	
			
		</style>
		
		
	</head>
<body lang="fa" dir="rtl">
	
		<?php
	include('header.php');
?>
	
			<?php
if(!(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true)){
?>
<script type="text/javascript">
<!--
	location.replace("404.php");
-->
</script>
	<?php
	}
?>

	<?php
	$link=mysqli_connect("localhost","root","","fitnessplus");
		if(mysqli_connect_errno())
			exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());
	?>
	
	

<center>
	
	<div class="ertebat">
	
<?php
		
    if(isset($_POST['Name'])&& !empty($_POST['Name'])&&
	isset($_POST['phone'])&& !empty($_POST['phone'])&&
	   isset($_POST['detail']) && !empty($_POST['detail'])){
		
		$Name=$_POST['Name'];
		$phone=$_POST['phone'];
		$detail=$_POST['detail'];
	}else
               exit("<p style='color:#fff;'><b>برخی از فیلدها مقداردهی نشده است</p></b>");
		?>
	
	<?php
		
		$query="INSERT INTO ertebat (Name,phone,detail)VALUES
		('$Name','$phone','$detail')";
		
		if (mysqli_query($link,$query)===true)
			exit("<p style='color:white;'><b> کاربر گرامی ".$Name.
				"   پیام شما با موفقیت برای مدیریت ارسال شد "."</b></p>");
		
		else
			exit("<p style='color:#fff;'><b>پیام شما برای مدیریت ارسال نشد!!</b></p>");
		
		mysqli_close($link);
		?>
	</div>
		</center>
	
		<?php
	include('footer.php');
?>

	</body>
</html>

