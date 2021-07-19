<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>خطا</title>

<style>
	
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
	
</style>

</head>

<body>
	<?php
	include('header.php');
	?>
	<center>
	<p style="color: red"><b>زمانی که شما وارد سایت شده اید صفحه ورود برای شما غیر فعال است!!</b></p>
	<p style="color: red"><b>لطفا ابتدا از سایت خارج شوید.</b></p>
	</center>

	<?php
	if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true)
	?>
	<form name="order" action="exit.php" method="post">
		<center>
			<input class="dokme" type="submit" value="خروج از سایت" onclick="check_input();" />
	    </center>
	</form>

	<?php
	include('footer.php');
	?>
</body>
</html>