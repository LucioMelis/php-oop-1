<?php
class Movie {
    public $nome;
    public $genere;
    public $voto = 0;
    public $anno;
    public $trama;
    public $regista;
    public $attori;
    public $noleggio = 'SI';

    private $sconto;

    public function __construct($_name,$_genere,$_anno,$_regista)
		{
			$this->nome = $_name;
            $this->genere = $_genere;
            $this->anno = $_anno;
            $this->regista = $_regista;
		}	
}

$film_uno = new Movie('Inception','Thriller',2010,'Cristopher Nolan');
$film_uno->trama = "Dominic 'Dom' Cobb è un 'estrattore', un professionista che si occupa di estrarre segreti dalle menti delle persone mentre queste dormono, infiltrandosi nei loro sogni tramite uno speciale apparecchio che permette a un gruppo di partecipare a un 'sogno condiviso'";
$film_uno->attori= ['Leonardo di Caprio','Joseph Gordon-Levitt','Ellen Page','Tom Hardy'];
// $film_due = new Movie();
var_dump($film_uno);
// var_dump($film_due);
?>