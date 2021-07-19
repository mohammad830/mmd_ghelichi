<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>خروج</title>
</head>

<body>
	<?php
	session_start();
	
	session_unset();
	
	session_destroy();
	?>
	
	<script type="text/javascript">
	<!--
		location.replace("index.php");
		-->
	</script>
</body>
</html>