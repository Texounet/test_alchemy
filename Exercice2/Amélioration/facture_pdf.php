<?php
	//On ajoute les données
	include('vars.php');

	//On met le html qui va etre convertie dans une sortie tempon 
	ob_start();
?>

<page backtop='5%' backbottom="5%" backleft="5%" backright="5%">
	<h1>Facture</h1>

	<!-- Tableau contenant les produits et le total du reglement -->
	<table style="width:100%; border: 1px solid black; border-collapse: collapse;" >
		<tr style="background:#C0C0C0">
			<th style="width:50%; border: 1px solid black;">Produit</th>
			<th style="width:25%; border: 1px solid black;">Quantité</th>
			<th style="width:25%; border: 1px solid black;">Prix</th>
		</tr>
		<?php
		foreach ($_SESSION['basket'] as $key_basket => $value_basket) {
			foreach ($products as $key_products=> $value_products) {
				if($key_products == $key_basket){
					$cost_lot = ($value_products['price']*$value_basket);
					?>
					<tr>
						<td style="border: 1px solid black;"><?php echo $value_products['label']; ?></td>
						<td style="border: 1px solid black;"><?php echo $value_basket; ?></td>
						<td style="border: 1px solid black;"><?php echo $cost_lot."€"; ?></td>
					</tr>
					<?php
					$total = $total + $cost_lot;
				}			
			}	
		}
		?>
		<tr>
			<td></td>
			<td style="border-right: 1px solid black;"></td>
			<td style="border: 1px solid black; background:#C0C0C0"><b>Total: <?php echo $total."€"; ?></b></td>
		</tr>
	</table>
</page>

<?php

//On recupere le html
$content = ob_get_clean();

//On recupère les classes html
require('html2pdf_v4.03/html2pdf.class.php');

//Paramettrage de la sortie de pdf
$pdf = new HTML2PDF('P', 'A4', 'fr', 'true', 'UTF-8');
$pdf->writeHTML($content);
$pdf->Output('Facture.pdf');