<!DOCTYPE html>
<html lang="cs">

  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="Náchod for people">
  	<meta name="author" content="Tereza Rokošová">
  	<meta name="keywords" content="work in Náchod, where to go Náchod, bike paths Náchod, Peklo Náchod, courses Náchod, brownfield Náchod">
  	<title>Náchod for people | Tourism website for Náchod region</title>
  	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  	<!--Bootstrap Core CSS-->
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Custom CSS-->
    <link href="css/my.css" rel="stylesheet">
  	<!--Custom Fonts-->
  	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>

  <body>
  	<!--Navigation-->
    <?php include 'htmlParts/navOnly.html' ?>
  	<!--Content-->
  	<div class="container">
  		<div class="row">
  		  <div class="col-lg-12">
          <h1 class="page-header">Náchod</h1>
  		  </div>
  		</div>
  		<!--Content Row-->
  		<div class="row">
  			<div class="col-sm-5">
  				<img class="img-responsive" src="img/nachodCastle.jpg" alt="Nachod Castle">
  			</div>
  			<div class="col-sm-7 text-justify">
  				<p>Město Náchod se nachází v nadmořské výšce 346 m a rozkládá se po obou březích řeky Metuje. Okres Náchod čítá 111 874 obyvatel a pokrývá plochu 851,57 km², (dle šetření ČSÚ k 31. prosinci 2012). Jedná se o bývalý textilní kraj Kladského pomezí (Euroregion Glacensis), jehož historie sahá až do poloviny 13. století. Náchod po dlouhá léta fungoval jakožto hraniční přechod s městem Kudowa Zdrój; tato strategická poloha skýtá možnosti prohloubení česko-polských vztahů a orientaci na rozvoj propracované infrastruktury cyklostezek. Díky výhodnému umístění mezi Orlickými horami, Krkonošemi a Adršpašsko-teplickými skalami představuje Náchodsko výchozí bod pro výlety po celém východu Čech.</p>
  				<p>Severní a východní hranici okresu Náchod tvoří Polsko, z jihovýchodu nalezneme okres Rychnov nad Kněžnou. Na západě je okres Náchod ohraničen okresem Trutnov a na jihozápadě sousedí s okresem Hradec Králové.</p>
  		</div>
  	</div>
  	<!--Photo Carousel-->
  	<div class="row">
  		<div class="col-lg-12">
        <h2 class="page-header">Náchod on a map</h2>
      </div>
      <div class="col-lg-12">
  			<div id="indexMapa">
  			</div>
      </div>
  	</div>
  	<hr>
  	<!--Footer-->
  	<footer id="footer"><?php include 'htmlParts/footerOnly.html'; ?></footer>
    </div>
    <!--jQuery-->
    <script src="js/jquery.js"></script>
    <!--Navigation menu loading-->
    <script type="text/javascript" src="js/navbarHandler.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
    function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('indexMapa'), {
            center: {
                lat: 49.8,
                lng: 15.7
            },
            scrollwheel: false,
            zoom: 7,
            disableDefaultUI: true,
            fullscreenControl: true
        });

        var marker = new google.maps.Marker({
            position: {
                lat: 50.412165,
                lng: 16.164265
            },
            map: map
        });
        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter({
                lat: 50.412165,
                lng: 16.164265
            });
        });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbbMVqbeaxSloy1dEqSW3Hvtb8KEL1KNc&callback=initMap" async defer></script>
  	
  </body>

</html>