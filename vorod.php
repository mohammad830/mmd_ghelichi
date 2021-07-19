<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ورود</title>
	
<style type="text/css">
		        .R{
			    margin-top: 60px;
			    background-color: #ff4743;
				margin-right: -4px;
			    width: 999px;
		        }
				
				@font-face{
	            font-family:"fitnessplus";
	            src: url("fonts/Tanha.woff") format("woff");
                }
				
				.R input[name="UserName"]{
				width:179px;
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
</style>
	
	
</head>

<body>

	
	<?php
	include('header.php');
	?>

	
	
<center>
    <form class="R" method="post" action="vorod_user.php">
		
		<div class="form">
		<div class="itemin">
			
		
		<br/><br/>
<font color="#E6E6FA">
	<label>نام کاربری:&nbsp;&nbsp;<input type="text" name="UserName" id="UserName" placeholder="نام کاربری"></label><br/>
	
	<lable>کلمه عبور:&nbsp;&nbsp;&nbsp;<input type="password" name="Password" id="Password" placeholder="کلمه عبور"></lable></br>
</font>
</br>

<input type="submit" value="ورود" class="menutitle" ><br/>
</br>

	</div>
</div>
	</form><br/><br/>
</center>

<?php
	if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true){
?>
		<script type="text/javascript">
	<!--
		location.replace("notv.php");
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