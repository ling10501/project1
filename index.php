<html>
<?php
session_start();
?>
<head>
	<title>Login</title>
</head>
<body>
	<form action="" method="post">
	login:<input type="text" name="user"></br>
	pass:<input type="password" name="pass"></br>
	<input type="submit">
	</form>
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

include('config.php');
$stmt = $conn->prepare('SELECT * from users where username = ? and password = ?');
$stmt->bind_param("ss",$user,$pass);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows === 0) exit('No rows');
while($row = $result->fetch_assoc()){
	$_SESSION['auth'] = $row['username']; 
}
echo '<meta http-equiv="refresh" content="0;URL=\'home.php\'" />';
?>
</body>
</html>