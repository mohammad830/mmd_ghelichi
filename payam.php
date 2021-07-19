<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>پیام های دریافتی</title>

<style>

    .del{
		    color: aliceblue;
		    background: #E23336;
		    cursor: pointer;
		    padding-left: 10px;
		    padding-right: 10px;
		    margin-bottom: 10px;
	        border: 0;
	        font-size:10px;
            border-radius: 20px;
		    text-decoration: none;
		    transition: all .2s ease-out;
	    }

	.p{
		    color: aliceblue;
		    background: blue;
		    cursor: pointer;
		    padding-left: 10px;
		    padding-right: 10px;
		    margin-bottom: 10px;
	        border: 0;
	        font-size:10px;
            border-radius: 20px;
		    text-decoration: none;
		    transition: all .2s ease-out;
	    }

	table , th , td{
            border: 2px #C4C4C4;
			border-collapse: collapse;
			margin-right: 10px;
			margin-top: 15px;
        }

</style>
	
</head>

<body>
	
	
	<?php
	include('header.php');
		if(!($_SESSION["state_login"]&&$_SESSION["state_login"]===true&&$_SESSION["user_type"]=="admin")){
	?>
			<script type="text/javascript">
		<!--
			location.replace("index.php");
			-->
		</script>
	<?php
	}
	
		$link=mysqli_connect("localhost","root","","fitnessplus");
		if(mysqli_connect_errno())
			exit("خطای با شرح زیر رخ داده است:" .mysqli_connect_error());


			if(isset($_GET['id']) && !empty($_GET['id'])){
				$id=$_GET['id'];
					
				if(isset($_GET['action']) && $_GET['action']=='DELETE'){
							$query="DELETE FROM `ertebat` WHERE `phone` = ".$id;
							  if(mysqli_query($link,$query))
							   echo("<center><p style='color:green;'><b>پیام با موفقیت حذف شد</b></p></center>");
								  else
									echo("<center><p style='color:red;'><b>خطا در حذف پیام</b></p></center>");
				}
			}


	$query="SELECT *FROM ertebat WHERE phone";
	$result=mysqli_query($link,$query);
	?>
	<table style="width: 97.6%; border: 1px">
		<tr>
		<?php
		$counter=0;
	    while($row=mysqli_fetch_array($result)){
		$counter++;
		?>
			<td style="border-style: dotted dashed;vertical-align: top;width: 33%;">
				<h4>&nbsp;&nbsp;نام: <span style="color:blue;"><?php echo($row['Name'])?></span></h4>
				<h4>&nbsp;&nbsp;متن پیام: <span style="color:#B40063;"><?php echo($row['detail'])?><br/></h4>
				<h4>&nbsp;&nbsp;شماره تلفن: <span style="color:fuchsia;"><?php echo($row['phone'])?></span>&nbsp;&nbsp;</h4>
				<a class="del" href="payam.php?id=<?php echo($row['phone'])?>&action=DELETE">حذف</a>
				<a class="p" href="pasokh.php?id=<?php echo($row['phone'])?>">پاسخ</a>
			</td>
			
			<?php
	if($counter %3==0)
		echo("</tr><tr>");
					}
			if($counter %3!=0)
				echo("</tr>");
	?>
	</table>
	
	<?php
	include('footer.php');
	?>
</body>
</html>