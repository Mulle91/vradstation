<?php 
include "header.php";
?>

<div id="Restauranten">
	<h1>Restauranten</h1>
	<table>
		<tr>
			<td class="restaurantentekst">
				
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

					<!-- Next and previous buttons -->
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

				</div>
				<br>

				<!-- The dots/circles -->
				<div style="text-align:center">
				  <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span>
				  <span class="dot" onclick="currentSlide(4)"></span> 
				  <span class="dot" onclick="currentSlide(5)"></span> 
				  <span class="dot" onclick="currentSlide(6)"></span>
				  <span class="dot" onclick="currentSlide(7)"></span> 
				  <span class="dot" onclick="currentSlide(8)"></span> 
				  <span class="dot" onclick="currentSlide(9)"></span>  
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