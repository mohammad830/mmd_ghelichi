<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فیتنس پلاس</title>
<link href="font.css" rel="stylesheet" type="text/css">

	<style type="text/css">
	
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
		
		.Table .TableRow ul{
			padding-right: 35px;
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
		}

	</style>

</head>

<body>
		
	<?php
	if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true)
	{
	?>
	
	<?php
	}
	else
	{
		?>
	<?php
	}
		?>
		
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
				
				
								<?php
	if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true)
	{
	?>
				<?php
	if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true&& $_SESSION["user_type"]=="admin")
	{
	?>
<a href="admin_products.php" class="set_style_link">مدیریت</a>
	<?php
		}
		

    if(isset($_SESSION["state_login"])&& $_SESSION["state_login"]===true&& $_SESSION["user_type"]!="admin")
	{
	?>
<a href="panel.php" class="set_style_link">پنل کاربری</a>
	<?php
		}
		?>
				
				
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="exit.php" class="set_style_link">خروج
			<?php echo(" ({$_SESSION["Name"]}) ")?></a>
<?php
	}
?>

        </ul>
			</nav>
				</div>
				
				</div>
				
				</body>
				</html>
				  
               