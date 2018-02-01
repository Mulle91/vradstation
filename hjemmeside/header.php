<html>

<head>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Vradsstation.dk</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>
   // DOM ready
   $(function() {
     
      // Create the dropdown base
      $("<select />").appendTo("nav");
      
      // Create default option "Go to..."
      $("<option />", {
         "selected": "selected",
         "value"   : "",
         "text"    : "Gå til"
      }).appendTo("nav select");
      
      // Populate dropdown with menu items
      $("nav a").each(function() {
       var el = $(this);
       $("<option />", {
           "value"   : el.attr("href"),
           "text"    : el.text()
       }).appendTo("nav select");
      });
      
     // To make dropdown actually work
     // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
      $("nav select").change(function() {
        window.location = $(this).find("option:selected").val();
      });
   
   });
  </script>
</head>

<body>

<div class="topback">
	<a href="http:\\192.168.114.48"><img class="logo" src="css/logo.png" style="width: 300px; float: right;"></a>
	
	<div class="topnav">

		<nav>
			<ul>
				<li>
					<a href="http:\\192.168.114.48\#Menu"> Menu </a>
				</li>

				<li>
					<a href="http:\\192.168.114.48\#Vin"> Vin </a>
				</li>

				<li>
					<a href="http:\\192.168.114.48\#Selskab"> Selskab </a>
				</li>

				<li>
					<a href="http:\\192.168.114.48\#Arrangementer"> Arrangementer </a>
				</li>

				<li>
					<a href="http:\\192.168.114.48\#Restauranten"> Restauranten </a>
				</li>
				
				<li>
					<a href="http:\\192.168.114.48\#Kontakt"> Kontakt os </a>
				</li>
			</ul>

			<select>
				<option selected="selected" value>gå til</option>


				<option value="http:\\192.168.114.48\#Menu">Menu</option>
				<option value="#Vin">Vin</option>
				<option value="#Selskab">Selskab</option>
				<option value="#Arrangementer">Arrangementer</option>
				<option value="#Restauranten">Restauranten</option>
				<option value="#Kontakt">Kontakt os</option>
			</select>
		</nav>
	</div>
</div>