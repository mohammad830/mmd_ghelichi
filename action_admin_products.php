<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فیتنس پلاس</title>
	
	<style>

	
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
				
			
	
	if(isset($_POST['pro_code'])&& !empty($_POST['pro_code'])&&
	  isset($_POST['pro_name'])&& !empty($_POST['pro_name'])&&
	  isset($_POST['pro_detail'])&& !empty($_POST['pro_detail'])){
		
		$pro_code=$_POST['pro_code'];
		$pro_name=$_POST['pro_name'];
		$pro_detail=$_POST['pro_detail'];

	}else{
	    echo("<center><p style='color:red;'><b>برخی از فیلدها مقداردهی نشده است</p></b></center>");
	    include('footer.php');
	    exit();}
	

		$link=mysqli_connect("localhost","root","","fitnessplus");
		if(mysqli_connect_errno())
		exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());
	
	
		$link=mysqli_connect("localhost","root","","fitnessplus");
		if(mysqli_connect_errno())
		exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());
	
		if(isset($_GET['action'])){
		$id=$_GET['id'];
		
		switch($_GET['action']){
				case'EDIT':
				$query="UPDATE products SET
				pro_code='$pro_code',
				pro_name='$pro_name',
				pro_detail='$pro_detail'
				
				WHERE pro_code='$id'";
				
				if(mysqli_query($link,$query)===true)
					echo("<center><p style='color:green;'><b>پست با موفقیت ویرایش شد</b></p></center>");
					else
						echo("<center><p style='color:red;'><b>خطا در ویرایش پست</b></p></center>");
				break;
				
		}
		
		
		mysqli_close($link);
	    include('footer.php');
			exit();
			}
	
		$query="INSERT INTO products
			(pro_code,
			pro_name,
			 pro_detail)VALUES
			 ($pro_code,
			 '$pro_name',
			 '$pro_detail')";
		
		if(mysqli_query($link,$query))
			echo("<center><p style='color:green';><b>پست با موفقیت اضافه شد</b></p></center>");
		else
		    echo("<center><p style='color:red';><b>خطا در ثبت</b></p></center>");
	
	mysqli_close($link);

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