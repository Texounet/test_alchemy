<?php

include'vars.php';

	$basket = new Basket;
	if($_GET['action'] == 0)
		$_SESSION["basket"] = $basket->add_basket($_POST['price'], $_SESSION["basket"]);

	elseif($_GET['action'] == 1)
		$basket->del_basket($_SESSION['basket']);

	elseif($_GET['action'] == 2)
		$basket->pay_basket();
	
	header('Location: index.php');

class Basket
{
	public function add_basket($produit, $tableau)
	{
		//Si le produit n'existe pas dans le tableau je l'ajoute 
		if(!array_key_exists($produit, $tableau)){
			$tableau[$produit] = 1;
		}
		//Si le produit existe ajoute 1 au nombre de produit
		else{
			$tmp = $tableau[$produit] + 1;
			$tableau[$produit] = $tmp;
		}
		return $tableau;
	}

	public function del_basket($tableau){
		//On detruit la variable $_SESSION['basket']
		unset($_SESSION['basket']);
	}

	public function pay_basket(){
		//redirection vers la page pour payer.
		header('Location: pay.php');
	}
}