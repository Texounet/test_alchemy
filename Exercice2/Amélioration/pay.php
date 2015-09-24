<html>
<head>
	<?php 
		include 'vars.php';
		//Verification de la connection de l'utilisateur.
		if(!isset($_SESSION['Profil'])){
			//Redirection en html
			echo '<meta http-equiv="refresh" content="2;URL=connection.php">';
		}
	?>
	<title>Facturation</title>
</head>

<body>
	<button onclick="window.location.href='connection.php';" >Connection</button>
	<button onclick="window.location.href='index.php';" >Product</button>
	<button onclick="window.location.href='view_basket.php';" >Panier</button>
	<br/><br/>
	

	<?php
		if(isset($_SESSION['Profil'])){
			echo "Vous pouvez payer.";
			echo '<br/><br/><button onclick="" >Payer</button>';
			?>
			<button onclick="window.location.href='facture_pdf.php';" >Panier</button>
			<?php
		}
		else{
			echo "Vous devez vous connecter.";
		}
	?>
</body>
</html>