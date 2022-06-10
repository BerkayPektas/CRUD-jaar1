<?php 
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>  
    <div class="bannerimage">
        <nav class="nav-area">
            <img class= "logo1"src="img/logo.png" alt="image1">
            <div class="logoh1">
                <h1>TravelSpace</h1>
            </div>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="bestemmingen.php">Bestemmingen</a> 
                <ul>             
				<li><a href="#">Europa</a></li>	
				<li><a href="#">Midden-Oosten</a></li>
                <li><a href="#">Latijns-Amerika</a></li>
				<li><a href="#">Noord-Amerika</a></li>
				<li><a href="#">Azië</a></li>
                <li><a href="#">Afrika</a></li>
                </ul></li>
                <li><a href="overons.php">Over ons</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <div class="middentekst">
            <h1>Verre Reizen. Voor Iedereen Uniek.</h1>
            <h2>Individuele reizen op maat.</h2>
        </div>
        <div class="container-box">
             <label for="bestemming">Waar wilt u heen?</label>
                <select id="country" name="country">
                    <option value="#">Alle Bestemmingen...</option>
                    <option value="Waar wilt u heen?">Spanje</option>
                    <option value="#">Zuid-Afrika</option>
                </select>
                <label for="soortreis"></label>
                <select id="country" name="country">
                    <option value="#">Alles...</option>
                    <option value="#">Wintersport</option>
                    <option value="#">Zon</option>
                </select>
                <label for="datum"></label>
                <select id="country" name="country">
                    <option value="januari">Alle Periodes...</option>
                    <option value="januari">Januari</option>
                    <option value="februari">Februari</option>
                </select>
        </div>
    </div> 
    <div class="container-stuk">
        <div class="container-stukje">
            <h1>TravelSpace brengt je dichterbij</h1>
           <p>Welkom bij TravelSpace, een persoonlijke en eigenwijze reisorganisatie. Voor ons is reizen het mooiste dat er is. We laten je de highlights zien, maar ook de onbekende plekken. Wij reizen veelvuldig de wereld over en creëren onze eigen routes en ervaringen. Dit doen we samen met onze partners ter plaatse zodat we jou écht het land kunnen laten zien. Het liefst zo ver mogelijk van de platgetrapte paden, dichtbij de natuur en veel in contact met de bevolking en cultuur van een land, waardoor de bevolking maximaal mee profiteert. Onze hotels zijn handpicked, kleinschalig en liggen veelal op unieke plekken. Zo brengen we je dichterbij je bestemming én zo ook dichterbij een mooiere wereld. Want als je met Riksja reist ben je ervan verzekerd dat je verantwoord reist en positief bijdraagt.</p>
        </div>
    </div>
</body>
</html>