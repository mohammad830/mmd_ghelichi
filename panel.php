<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پنل کاربری</title>
	
	<style type="text/css">
	
		.my{
			margin-top: 50px;
			background: #ff4743;
			
			margin-right: 11px;
			width: 998px;
			
		}
		
		.my .shop{
			font-size: 18px;
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
			border: 1px solid blue;
			background: #fff;
			color: blue;
		}
		
	</style>
</head>

<body>
	<?php
	include('header.php');
	
	if(isset($_SESSION["state_login"]) && !empty($_SESSION["state_login"]) && isset($_SESSION["user_type"]) && !empty($_SESSION["user_type"])&&$_SESSION["user_type"]!="admin"){
    ?>

	<div class="my">
		<div class="shop">

        <div class="payam">
		<form action="received_messages.php">
		<input type="submit" value="پیام های دریافتی"/>
		</form>
		</div><br/><br/><br/>
    <?php
        echo("<center><h3><p style='color:#fff;'><b>{$_SESSION["Name"]}  گرامی به سایت تناسب اندام فیتنس پلاس خوش آمدید</h3></b></p></center>");
    ?>
		<br/><br/><br/>
	
		</div>
		</div><br/><br/>


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

	include('footer.php');
	?>
</body>
</html>