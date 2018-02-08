<?php 
include "header.php";
?>

<div class="topbilled">
	<img src="css/billeder/Topbilled.png">
</div>

<div class="brødtekst">
	<div id="Menu">
		<h1>Menu</h1>
	</div>

	<div id="Vin">
		<h1>Vin</h1>
	</div>

	<div id="Selskab">
		<h1>Selskab</h1>
	</div>

	<div id="Arrangementer">
		<h1>Arrangementer</h1>
	</div>

	<div id="Restauranten">
		<table>
			<tr>
				<td class="restaurantentekst">
					<h1>Restauranten</h1>
					<p>hej med dig min ven</p>
					<p>Klik på billedet for at se mere om restauranten ----></p>
				</td>
				<td>
					<a href="restaurante.php"><img src="css/billeder/restaurantImg.jpg"></a>
				</td>
			</tr>
		</table>
	</div>
</div>

<?php
include "footer.php";
?>