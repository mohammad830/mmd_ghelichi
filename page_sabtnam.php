<!doctype html>
<html>
	<head>
	<title>فیتنس پلاس</title>
	</head>
<body lang="fa" dir="rtl">
	



				<?php
	$link=mysqli_connect("localhost","root","","fitnessplus");
		if(mysqli_connect_errno())
			exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());
	?>
	
	<?php
	include("header.php");
	?>
	
<center>
<?php
		
    if(isset($_POST['Name'])&& !empty($_POST['Name'])&&
	isset($_POST['UserName'])&& !empty($_POST['UserName'])&&
	   isset($_POST['Password']) && !empty($_POST['Password'])&&
	   isset($_POST['rePassword'])&& !empty($_POST['rePassword'])&&
	   isset($_POST['phone'])&& !empty($_POST['phone'])&&
	   isset($_POST['email'])&&!empty($_POST['email'])){
		
		$Name=$_POST['Name'];
		$Username=$_POST['UserName'];
		$Password=$_POST['Password'];
        $rePassword=$_POST['rePassword'];
		$phone=$_POST['phone'];
        $email=$_POST['email'];

	}else
               exit("<p style='color:red;'><b>برخی از فیلدها مقداردهی نشده است</b></p>");

if($Password !=$rePassword)
exit("<p style='color:red;'><b>کلمه عبور و تکرار آن مشابه نیست</p></b>");

if(filter_var($email, FILTER_VALIDATE_EMAIL)===false)
exit("<p style='color:red;'>پست الکترونیک وارد شده صحیح نیست</p></b>");
		
		$query="INSERT INTO users (Name,UserName,Password,phone,email,type)VALUES
		('$Name','$Username','$Password','$phone','$email','0')";
		
		if (mysqli_query($link,$query)===true)
			exit("<p style='color:green;'><b>".$Name.
				" گرامی عضویت شما با نام کاربری ".$Username.
				"  با موفقیت انجام شد "."</b></p>");
		
		else
			exit("<p style='color:red;'><b>عضویت شما انجام نشد</b></p>");
		
		mysqli_close($link);

		?>
		</center>
	
<?php
	include('footer.php');
?>
	
	</body>
</html>

