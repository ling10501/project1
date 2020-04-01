<html>
<?php
session_start();
?>
<head>
	<title>Home</title>
</head>
<body>
if($_SESSION['auth'] !== ''){

	echo '<h1>Welcome to home page</h1>';
}else{
	echo '<meta http-equiv="refresh" content="0;URL=\'index.php\'" />';
}
</body>
</html>