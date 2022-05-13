<?php
include ('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- BOOSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP OOP</title>
</head>
<body>
    <div class="container">
        <div class="row gap-2">
            <div  class="col-5 card lm-margin">
                <img class="lm-width" src="https://m.media-amazon.com/images/I/912AErFSBHL._SY550_.jpg" alt="inception">
                <h3><?php echo($film_uno->nome) ?></h3>
                <p>Anno: <span><?php echo($film_uno->anno) ?></span></p>
                <p>Genere: <span><?php echo($film_uno->genere) ?></span></p>
                <p>Trama:</p>
                <p class="fw-normal"><?php echo($film_uno->trama) ?></p> 
                <p>Attori: <span><?php $film_uno->cicloAttori() ?></span></p>
                <p>Regista: <span><?php echo($film_uno->regista) ?></span></p>
                <p>Voto: <span><?php echo($film_uno->voto) ?></span> </p>
                <p>Noleggio: <span><?php echo($film_uno->noleggio .'<span class ="fw-bold"> Sconto: </span>' . $film_uno->sconto . '$')?></span></p>
            </div>
            <div class="col-5 card lm-margin">
            <img class="lm-width" src="https://mr.comingsoon.it/imgdb/locandine/big/1242.jpg" alt="seven">
                <h3><?php echo($film_due->nome) ?></h3>
                <p>Anno: <span><?php echo($film_due->anno) ?></span></p>
                <p>Genere: <span><?php echo($film_due->genere) ?></span></p>
                <p>Trama:</p>
                <p class="fw-normal"><?php echo($film_due->trama) ?></p> 
                <p>Attori: <span><?php $film_due->cicloAttori() ?></span></p>
                <p>Regista: <span><?php echo($film_due->regista) ?></span></p>
                <p>Voto: <span><?php echo($film_due->voto) ?></span> </p>
                <p>Noleggio: <span><?php echo($film_due->noleggio  .'<span class ="fw-bold"> Sconto: </span>' . $film_due->sconto . '$')?></span></p>
            </div>
        </div>
    </div>
</body>
</html>