<html>
<head>
	<?php 
		include 'vars.php';
	
		//Verification de la connection de l'utilisateur.
		if(!isset($_SESSION['Profil'])){
			//Redirection en html
			echo '<meta http-equiv="refresh" content="0;URL=connection.php">';
		}
	?>
	<title>Produits</title>
</head>

<body>
	<button onclick="window.location.href='connection.php';" >Connection</button>
	<button onclick="window.location.href='index.php';" >Product</button>
	<button onclick="window.location.href='view_basket.php';" >Panier</button>
	<br/><br/>
	<?php 
	//Affichage des produits
		$i = count($products);
		$a = 0;
		foreach ($products as $key => $value) {
			echo '<form action="Basket.php?action=0" method="post">'.$value['label'].'
				<br/>
				<input name="price" value="'.$key.'" type="hidden"></input>
				'.$value['price'].'€
				<input type = "submit" value="Ajouter au panier"></input>
				<br/><br/>
			</form>';
		}
		?>
</body>
</html>