<?php 
include "header.php";
?>

<div class="topbilled">
	<img src="css/billeder/Topbilled.png">
</div>

<div class="brødtekst">
	<div id="Menu">
		<table>
			<tr>
				<td class="menutekst">
					<h1>Menu</h1>
					<p><strong>Frokost & aftenmenu</strong> <br>
						Restaurant Vrads Stations menukort er a la carte retter, <br>
						som serveres både til frokost og til aften mellem <br>
						kl. 12-21.00
					</p>
					<p> <strong>Onsdags menu </strong> <br>
						Vi tilbyder hver onsdag en 2 retters menu efter stationens eget valg. 
					</p>
					<p><strong>Kaffe & Kage</strong> <br>
						Vi står klar tirsdag-søndag kl. 12-17 med stationens lagkage, <br>
						hjemmebag og 
						friskbrygget kaffe. 
					</p> 
					<p><strong>Ishuset Vrads Station</strong> <br>
						I det lille ishus kan købes is og hjemmebagte kager, <br>
						samt varme og kolde drikke som kan nydes på perronen, <br>
						og de omkringliggende omgivelser.
					</p><br>
					<a href="menu.php" class="restbtn">Se menukort her</a>
				</td>
				<td>
					<img src="css/billeder/restaurantImg.jpg">
				</td>
			</tr>
		</table>
	</div>

	<div id="Vin">
		<table>
			<tr>
				<td>
					<img src="css/billeder/restaurantImg.jpg">
				</td>
				<td class="vintekst">
					<h1>Vin</h1>
				</td>
			</tr>
		</table>
	</div>

	<div id="Selskab">
		<table>
			<tr>
				<td class="selskabtekst">
					<h1>Selskaber</h1>
					<p>Vi gør os umage med at skabe rammerne for livets store og små fester. <br> 
						Der vil være mulighed for at afholde alt mellem brunch og bryllup, <br> både i de charmerende togvogne på perronen og i den fantastiske stationsbygning. 
					</p> <br>
					<a href="selskab.php" class="restbtn">Se selskabsmenuer her</a>
				</td>
				<td>
					<img src="css/billeder/restaurantImg.jpg">
				</td>
			</tr>
		</table>
	</div>

	<div id="Arrangementer">
		<table>
			<tr>
				<td>
					<img src="css/billeder/restaurantImg.jpg">
				</td>
				<td class="arrangementertekst">
					<h1>Arrangementer</h1>
					<p>Arrangementer
 						Hold øje med vores arrangementer her på siden. <br>

						Vi vil her opdatere dig omkring vores spændende arrangementer, <br>
						som afholdes hen over året. <br>

						Restaurant Vrads Station ønsker at skabe stemningsfyldte <br>
						og tilbagevendende begivenheder for både store og små. <br> <br>

						<?php
							$file = fopen("arrangementer.txt","r");

							while(! feof($file))
							  {
							  echo fgets($file). "<br />";
							  }

							fclose($file);
						?>
					</p>
				</td>
			</tr>
		</table>
	</div>

	<div id="Restauranten">
		<table>
			<tr>
				<td class="restaurantentekst">
					<h1>Restauranten</h1>
					<p>Restaurant Vrads Station - en autentisk lille plet i de midtjyske skove. <br>
						Stationens lokaler er stemningsfuldt indrettet og danner ramme for Restaurantens hjemlige hygge, <br> 
						hvor vi ser frem til at byde velkommen.
					</p> <br>
						<a href="restaurante.php" class="restbtn">Mere info</a>
				</td>
				<td>
					<img src="css/billeder/restaurantImg.jpg">
				</td>
			</tr>
		</table>
	</div>
</div>

<?php
include "footer.php";
?>