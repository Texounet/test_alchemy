<html>
<head>
	<?php 
		include 'vars.php'; 
	?>
	<title>Panier</title>
</head>

<body>
	<button onclick="window.location.href='connection.php';" >Connection</button>
	<button onclick="window.location.href='index.php';" >Product</button>
	<button onclick="window.location.href='view_basket.php';" >Panier</button>
	<br/><br/>
	<button onclick="window.location.href='Basket.php?action=1.php';" >Supprimer Panier</button>
	<br/><br/>
	<?php
		foreach ($_SESSION['basket'] as $key_basket => $value_basket) {
			foreach ($products as $key_products=> $value_products) {
				if($key_products == $key_basket){
					echo $value_products['label'].'<br/>nombre de produit:'.$value_basket.'<br/><br/>	';
				}			
			}	
		}
	?>
	<button onclick="window.location.href='pay.php';" >Payer</button>

</body>
</html>