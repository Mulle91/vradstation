<?php 
include "header.php";
?>

<div id="Restauranten">
	<table>
		<tr>
			<td class="restaurantentekst">
				<br> <br>
				<h1>Restauranten</h1>
				<p>For enden af Danmarks smukkeste jernbane. <br>
					Her ligger Vrads Station, et sted du sent vil glemme. <br>

					At servere for gæster på Vrads Station er ikke nogen ny idé. <br>

					Allerede i 1963 tog Bryrup-banens ledelse initiativ til et restaurationstog, <br>
					som stod på stationen om sommeren. <br>

					To af serveringsvognene er stadig at finde på stationen i dag. <br>

					Veteranbanen overtog stationen i 1969, <br>
					og i de sidste mange år har restauranten i den gamle stationsbygning været drevet af forpagtere. <br>

					Vi glæder os til at byde jer velkommen på den gamle station. 
				</p>
			</td>

			<td class="RestImg">
				<div class="slideshow">

					<div class="myFade">
						<img src="css/billeder/rest (1).jpg">
					</div>
						
					<div class="myFade">
						<img src="css/billeder/rest (2).jpg">
					</div>
						
					<div class="myFade">
						<img src="css/billeder/rest (3).jpg">
					</div>
						
					<div class="myFade">
						<img src="css/billeder/rest (4).jpg">
					</div>
						
					<div class="myFade">
						<img src="css/billeder/rest (5).jpg">
					</div>
						
					<div class="myFade">
						<img src="css/billeder/rest (6).jpg">
					</div>

					<div class="myFade">
						<img src="css/billeder/rest (7).jpg">
					</div>

					<div class="myFade">
						<img src="css/billeder/rest (8).jpg">
					</div>

					<div class="myFade">
						<img src="css/billeder/rest (9).jpg">
					</div>

				</div>
				<br>

				<div class="dots">
					<!-- The dots/circles -->
					<?php  
						$dots = 9;

						echo "<div style='text-align:center'>";
						for ($i = 0; $i < $dots; $i++) {
							echo "<span class='dot'></span>";
						}
						echo "</div>";
					?>
				</div>
			</td>
		</tr>
	</table>
</div>

<!--slideshow script-->
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("myFade");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<?php 
include "footer.php";
?>