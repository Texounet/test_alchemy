<html>
<head>
	<?php 
		include 'vars.php'; 
	?>
	<title>Connection</title>
</head>

<body>
	<button onclick="window.location.href='connection.php';" >Connection</button>
	<button onclick="window.location.href='index.php';" >Product</button>
	<button onclick="window.location.href='view_basket.php';" >Panier</button>
	<br/><br/>
	<?php 

	if(!isset($_SESSION['Profil'])){ 
	?>
	<form action="Connect.php?action=0" method="post">
		<legend>Login:</legend><input type='text' name='login'></input><br/><br/>
		<input type='submit' value='Connection'></input>
	</form>
	<?php 
	}
	else{
		echo 'Vous êtes connecté';
	} 
	?>
	<button onclick="window.location.href='Connect.php?action=1.php';" >Deconnection</button>
</body>
</html>