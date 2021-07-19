
<?php
	session_start();
?>

<!doctype html>
<html lang="fa" dir="rtl">
<head>
<meta charset="utf-8">
<title>ثبت نام</title>
	<link href="font.css" rel="stylesheet" type="text/css">
	
		<style type="text/css">
			
		.Table .TableRow ul{
			padding-right: 35px;
		}	
		.R{
			margin-top: 40px;
			padding-bottom: 80px;
			margin-right: -3px;
			width: 999px;
			background-color: #ff4743;
		}
		.R input[name="Name"]{
			width:179px;
	        height: 1px;
	        padding: 20px;
	        border: 0;
	        font-size: 15px;
			margin: 5px;
		}
		.R input[name="UserName"]{
			width: 179px;
	        height: 1px;
	        padding: 20px;
	        border: 0;
	        font-size: 15px;
			margin: 5px;
		}
		.R input[name="Password"]{
			width: 179px;
	        height: 1px;
	        padding: 20px;
	        border: 0;
	        font-size: 15px;
			margin: 5px;
		}
		.R input[name="rePassword"]{
			width: 179px;
	        height: 1px;
	        padding: 20px;
	        border: 0;
	        font-size: 15px;
			margin: 5px;	    
		}
		.R input[name="phone"]{
			width: 179px;
	        height: 1px;
	        padding: 20px;
	        border: 0;
	        font-size: 15px;
			margin: 5px;
		}
		.R input[name="email"]{
			width: 179px;
	        height: 1px;
	        padding: 20px;
	        border: 0;
	        font-size: 15px;
			margin: 5px;
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

        .submenu{
            margin-bottom: 0.5em;
        }
								
		.Table{
			display: table;
			width: 1024px;
			font-size: 15px;
			font-family: fitnessplus;
			margin-left: auto;
			margin-right: auto;
			direction: rtl;
		}
		.TableRow{
			display: table-row;
		}

		.TableCell{
			display: table-cell;
			border: 0px solid #009900;
			padding: 3px 10px;
		}
		
		.Tablekala{
			display: table-cell;
			width: 500px;
			font-size: 15px;
			font-family: B koodak;
			margin-left: auto;
			margin-right: auto;
			direction: rtl;
		}
		.set_style_link{
			text-decoration: none;
			font-weight: bold;
		}
						
		.Table .TableRow .TableCell .set_style_link{
			color: white;
		}
						
		.bg{
			background: green;
			width: 1000px;
			margin-right: 10px;
		}

		.img{
			width: 1000px;
            height: 200px;
            margin-right: 10px;
			margin-top: 26px;
		}
						
	</style>
	
</head>	
<body>

	    <div class="Table">
	    <div class="TableRow">	
		<div class="TableCell">
		<header class="Table">
			<div class="TableRow">
			<img class="img" src="picture/fitnessplus">
			</div>
			</header>
			<div class="header">
			<div class="bg">
			<nav class="Table">
			<ul class="TableRow">
				<ul class="TableCell"><a class="set_style_link" href="index.php">صفحه اصلی</a></ul>
				<ul class="TableCell"><a class="set_style_link" href="sabtnam.php">ثبت نام</a></ul>
				<ul class="TableCell"><a class="set_style_link" href="vorod.php">ورود</a></ul>
				<ul class="TableCell"><a class="set_style_link" href="my.php">درباره ما</a></ul>
				<ul class="TableCell"><a class="set_style_link" href="ertebat.php">ارتباط با ما</a></ul>
            </ul>
			</nav>
			</div>
			</div>
			<?php
	$link=mysqli_connect("localhost","root","","fitnessplus");
	if(mysqli_connect_errno())
	exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());
	?>

	<center>
	<form class="R" action="page_sabtnam.php" method="post"> 
		
		<div class="form">
			<div class="item">
					
		</br>
		<font color="#E6E6FA">
	<br/><br/><br/><label><span style="color: darkred">*</span>نام و نام خانوادگی:<input name="Name" id="Name" type="text" placeholder="نام و نام خانوادگی"></label></br>
	</br>
	<label><span style="color: darkred">*</span>نام کاربری:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="UserName" id="UserName" type="text" placeholder="نام کاربری"></label></br>
</br>
    <label><span style="color: darkred">*</span>کلمه عبور:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="Password" id="Password" type="password" placeholder="رمز عبور"</label></br>
</br>
<label><span style="color: darkred">*</span>تکرار کلمه عبور:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="rePassword" id="rePassword" type="password" placeholder="تکرار رمز عبور"></label></br>
	</br>
<label><span style="color: darkred">*</span>شماره تلفن:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input name="phone" id="phone" type="text" placeholder="شماره موبایل"></label></br>
<br/>
<label><span style="color: darkred">*</span>ایمیل:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="email" id="email" type="email" placeholder="ایمیل"></label><br/></font>
	<br/>
<input type="submit" value="ثبت نام" class="menutitle" onClick="submit">

</form>
</center>
																	
</div>	
</div><br/>

<?php
	if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true){
?>
		<script type="text/javascript">
	<!--
		location.replace("notsabt.php");
		-->
	</script>
	<?php

		}
	?>
								  
<?php
	include('footer.php');
?>
</body>
</html>