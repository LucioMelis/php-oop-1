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

    public $sconto = 0;

    public function __construct($_name,$_genere,$_anno,$_regista)
		{
			$this->nome = $_name;
            $this->genere = $_genere;
            $this->anno = $_anno;
            $this->regista = $_regista;
		}

    private function scontoFilm (){
        if ($this->anno < 2010 && $this->noleggio = 'SI'){
           return $this->sconto = 5;
        }else{
            return $this ->sconto;
        }
    }

    private function generaVoto(){
        if($this->voto == 0){
            return $this->voto = rand(1,5);
        }
    }

    public function aggiornaDati(){
        $this->scontoFilm ();
        $this->generaVoto ();
    }

    public function cicloAttori(){
        foreach($this->attori as $item ){
            echo("<span> $item, </span>");
        }
    }
}

$film_uno = new Movie('Inception','Thriller',2010,'Cristopher Nolan');
$film_uno->trama = "Dominic 'Dom' Cobb è un 'estrattore', un professionista che si occupa di estrarre segreti dalle menti delle persone mentre queste dormono, infiltrandosi nei loro sogni tramite uno speciale apparecchio che permette a un gruppo di partecipare a un 'sogno condiviso'";
$film_uno->attori= ['Leonardo di Caprio','Joseph Gordon-Levitt','Ellen Page','Tom Hardy'];
$film_uno->aggiornaDati();


$film_due = new Movie('Seven','Noir',1995, 'David Fincher');
$film_due->trama = "Un anziano ed esperto detective vicino alla pensione viene affiancato da un giovane e irruento collega per indagare su un serial killer specializzato nei sette peccati capitali.";
$film_due->attori = ['Brad Pitt','Morgan Freeman','Gwyneth Paltrow','Kevin Spacey'];
$film_due->aggiornaDati();
?>