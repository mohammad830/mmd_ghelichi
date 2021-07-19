<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ارتباط با ما</title>
	
	<style>
	
		.dokme{
				color: aliceblue;
				background: blue;
				cursor: pointer;
				width: 100px;
	            padding: 10px;
	            border: 100;
				margin-right: 130px;
	            font-size:10px;
				}
			
			.vorod{
				color: aliceblue;
				background: blue;
				cursor: pointer;
				width: 100px;
	            padding: 10px;
	            border: 100;
				margin-top: 30px;
	            font-size:14px;
				}
			
			.sabt a{
				text-decoration: none;
				color: darkblue;
			}

		.R input[name="Name"]{
			    background: #DAF1B2;
				width: 220px;
	            height: 10px;
	            padding: 20px;
	            border: 0;
	            font-size: 15px;
				margin: 5px;
				}
			.R input[name="phone"]{
				background: #DAF1B2;
				width: 220px;
	            height: 10px;
	            padding: 20px;
	            border: 0;
	            font-size: 15px;
				margin: 5px;
				}
		
			.id{
				width: 300px;
			    }
			
			.R textarea{
				background: #DAF1B2;
				width: 350px;
	            height: 250px;
	            padding: 20px;
	            border: 0;
	            font-size: 15px;
				margin: 5px;
				}
		
		.form{
			    margin-top: -79px;
		        }
		
		.menutitle{
                color: aliceblue;
				background: blue;
				cursor: pointer;
				width: 150px;
	            padding: 10px;
	            margin-top: 10px;
			    margin-bottom: 20px;
	            border: 100;
	            font-size:15px;
                }

</style>
	
	
</head>

<body>
	<?php
	include('header.php');
	?>
	
	<?php
	$link=mysqli_connect("localhost","root","","fitnessplus");
		if(mysqli_connect_errno())
			exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());
	?>

	<?php
			if(!(isset($_SESSION["state_login"])&&$_SESSION["state_login"]===true)){
			
	?>
	

<center>
	<br/>
	<span style='color: red;'><b>ابتدا وارد حساب کاربری خود شوید!!</b></span>
	<form name="order" action="vorod.php" method="post">
				<center>
						<input class="vorod" type="submit" value="ورود" onclick="check_input();" />
						</center>
					</form>
		<div class="sabt">
		<span style='color: red;'><b><span style="color: brown;">هنوز ثبت نام نکرده اید؟!</span>&nbsp;&nbsp;<a href="sabtnam.php">ثبت نام کنید</a></b></span>
		</div><br/>

	<?php
	include('footer2.php');
	exit();
				
	}
	?>
	<center>
	<form class="R" action="sabt_ertebat.php" method="post"> 
		
		<div class="form">					
		</br>
		<font color="darkred">
	<br/><br/><br/><label><span style="color: red">*</span>نام و نام خانوادگی:<input name="Name" id="Name" type="text" placeholder="نام و نام خانوادگی"></label>&nbsp;&nbsp;&nbsp;&nbsp;
	<label><span style="color: red">*</span>شماره تلفن:<input name="phone" id="phone" type="text" placeholder="شماره تلفن"></label>	
			&nbsp;&nbsp;&nbsp;&nbsp;
</br>
    <label class="lable"><span style="color: red">*<span style="color: darkred">پیام شما:</span></span><lable class="textarea"> <textarea id="detail" name="detail" cols="45" rows="10" wrap="virtual" placeholder="پیام شما..."></textarea></lable></br>
		</font>
<input type="submit" value="ارسال پیام" class="menutitle" onClick="submit">

</div>

</form>
</center>


	<?php
	include('footer.php');
	?>
</body>
</html>