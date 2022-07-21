<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <?php
    
    $paragraph = "Da un rapporto dell'Accademia italiana della cucina, la ricetta originale della pasta alla carbonara risulta la più 'falsificata' tra tutte le ricette italiane all'estero[18]. Nelle principali varianti, soprattutto di cucina internazionale, si usa sostituire il pecorino con il parmigiano o anche utilizzarli entrambi.[2] In alcune varianti si usa la panna[1], la quale rende il composto più denso e corposo (ma di conseguenza anche più pesante). Frequente anche l'aggiunta di cipolla, anche se la ricetta tradizionale non la comprende.[19]";
?>
<?php 
$badWord = $_GET["badword"];
?>

<h2>Testo Originale</h2>
<p> Secondo Wikipedia: <?php echo $paragraph ?>. Lunghezza testo: <?php echo strlen($paragraph); ?></p>


<h2>Testo censurato</h2>
<?php $censoredParagraph = str_replace($badWord, '***', $paragraph); ?> 
<p>Secondo Wikipedia: <?php echo $censoredParagraph ?>. Lunghezza testo: <?php echo strlen($censoredParagraph); ?></p>

</body>
</html>