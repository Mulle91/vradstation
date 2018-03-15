<?php 
	include 'header.php';
?>

<div class="brødtekst">
	<div id="Arrangementer">
		<table class="arrangementside">
			<tr>
				<td class="arrangementertekstside">
					<h1>Arrangementer</h1>
					<?php
						$file = fopen("arrangementer.txt","r");

						while(! feof($file))
						  {
						  echo fgets($file). "<br />";
						  }

						fclose($file);
					?>
				</td>
				<td>
					<img src="css/billeder/restaurantImg.jpg">
				</td>
			</tr>
		</table>
	</div>
</div>

<?php 
	include 'footer.php';
?>