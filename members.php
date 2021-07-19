<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>اعضا</title>
	
	
	<style>
	
	    .bg{
			margin-top: 30px;
		}

		.mahsol .tr td{
			color: aliceblue;
			background-color: darkorange;
		}
		
		.mahsol .tr2 td{
			background-color: darkmagenta;
			color: #fff;
		}
		
		.b{
			text-decoration: none;
			color: white;
		}
		
		.pname{
			text-decoration: none;
			color: white;
		}
		
		.attention{
			color: #fff;
			background: #364EDF;
			text-align: center;
			width: 700px;
			margin-right: 140px;
			padding: 10px;
			border-bottom-left-radius: 50px;
			border-bottom-right-radius: 50px;
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
	
	
	if(isset($_GET['id']) && !empty($_GET['id'])){
	$id=$_GET['id'];
		
	if(isset($_GET['action']) && $_GET['action']=='DELETE'){
				$query="DELETE FROM users WHERE Username ='$id'";
			      if(mysqli_query($link,$query))
			       echo("<center><p style='color:green;'><b>عضو با موفقیت حذف شد</b></p></center>");
					  else
						echo("<center><p style='color:red;'><b>خطا در حذف عضو</b></p></center>");
	}
	}
		
	if(isset($_GET['id']) && !empty($_GET['id'])){
	$id=$_GET['id'];
		
	if(isset($_GET['action']) && $_GET['action']=='UPDATE'){
				$query="UPDATE users SET type = '1' WHERE Username ='$id'";
		
			      if(mysqli_query($link,$query))
			       echo("<center><p style='color:green;'><b>کاربر با موفقیت به مدیر ارتقا یافت</b></p></center>");
					  else
						echo("<center><p style='color:red;'><b>خطا در ارتقا عضو</b></p></center>");
	}
	}
	
		
		if(isset($_GET['id']) && !empty($_GET['id'])){
	$id=$_GET['id'];
		
	if(isset($_GET['action']) && $_GET['action']=='UPDATE2'){
				$query="UPDATE users SET type = '0' WHERE Username ='$id'";
		
			      if(mysqli_query($link,$query))
			       echo("<center><p style='color:green;'><b>مدیر با موفقیت به کاربر تنزل یافت</b></p></center>");
					  else
						echo("<center><p style='color:red;'><b>خطا در تنزل عضو</b></p></center>");
	}
	}
		
		
		
	
	$query="SELECT *FROM users";
	$result=mysqli_query($link,$query);
	?>

	<div class="bg">
	
	<div class="mahsol">
	<table border="2px" style="width: 100%;">
		
		<tr class="tr" align="center">
		<h4 class="attention">*توجه: در قسمت نوع کاربر عدد 1 به معنای مدیر بودن و عدد 0 به معنای کاربر عادی است. </h4>
		<td>نام عضو</td>
		<td>نام کاربری</td>
		<td>رمز عبور</td>
		<td>موبایل</td>
		<td>ایمیل</td>
		<td>نوع کاربر</td>
		<td>ابزار کاربردی</td>
			
		</tr>
		
		
		<?php
		while($row=mysqli_fetch_array($result)){
		?>
		<tr class="tr2" align="center">
			
			<td><?php echo($row['Name'])?></td>	
	        <td><?php echo($row['Username'])?></td>	
			<td><?php echo($row['Password'])?></td>
			<td><?php echo($row['phone'])?></td>
			<td><?php echo($row['email'])?></td>
			<td><?php echo($row['type'])?></td>
			<td>
            <b><a class="b" href="members.php?id=<?php echo($row['Username'])?>&action=DELETE">حذف</a></b>&nbsp;&nbsp;|&nbsp;&nbsp;<b><a class="pname" href="members.php?id=<?php echo($row['Username'])?>&action=UPDATE">ارتقا</a></b>&nbsp;&nbsp;|&nbsp;&nbsp;<b><a class="pname" href="members.php?id=<?php echo($row['Username'])?>&action=UPDATE2">تنزل</a></b>
			</td>
			
		</tr>
	</div>
		<?php
		}
			?>

	</table>

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