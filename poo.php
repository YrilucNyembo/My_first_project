<?php

abstract class FootballTeam {
    private string $name;
    private string $name_staduim;
    private int $number_players;
    private string $name_president;
    private string $name_of_coach;
    private int $numbers_titles;
    private string $composition;
    private string $names_players;

    // GET et   SET pour le nom

    public function getName():string{
        return $this->name;
    }
    public function setName(string $name):void{
        $this->name=$name;
    }

    // GET et SET pour le nom du terrain 
    public function getName_staduim():string {
        return $this->name_staduim;
    }
    public function setName_staduim(string $name_staduim):void{
        $this->name_staduim = $name_staduim;
    }

    // GET et SET du nombre de joueurs 
    public function getNumber_players():int{
        return $this->number_players;
    }
    public function setNumber_players(int $number_of_players):void{
        $this->number_players = $number_players;
    }

    // GET et SET nom du président 
    public function getName_president():string{
        return $this->getName_president;
    }
    public function setName_president(string $name_president):void{
        $this->name_president = $$name_president;
    }

    // GET et SET nom du coach 
    public function getName_of_coach():string{
        return $this->name_of_coach;
    }
    public function setName_of_coach(string $name_of_coach):void{
        $this->name_of_coach = $name_nof_coach;
    }

    // GET et SET nombres de titres 
    public function getNumbers_tiltles():int{
        return $this ->getNumbers_tiltles;
    }
    public function setNumbers_titles(string $numbers_titles):void{
        $this->numbers_titles = $numbers_titles;
    }

    // GET et SET de la composition 
    public function getComposition():string{
        return $this->composition;
    } 
    public function setComposition(string $composition):void{
        $this->composition = $composition;
    }

    // GET et SET du nom des joueurs 
    public function getNames_players():string {
        return $this->names_players;
    }
    public function setNames_players(string $names_players):void{
        $this->names_players = $names_players;
    }
}

// premiere équipe
class Real extends FootballTeam{
    public function __construct(){
        $this->setName("Réal Madrid");
        $this->setName_staduim("Santiago Bernabeu");
        $this->setNames_players(24);
        $this->setName_president("Florentino Perez");
        $this->setName_of_coach("Carlos Ancelotti")
        $this->setNumbers_titles(109) 
        $this->setComposition("4-3-3")
        $this->setNames_players(["T.Courtois","Kepa","A.Lunin","Dani Carvajal","Eder Militao","D.Alaba","Nacho","Fran Garcia","A.Rudiger","F.Mendy","J.Belligham","T.kross","L.Modric","E.Camavinga","Lucas Vazquez","Vinicuis","Rodrygo","Joselu","Brahim Diaz","A.Guler","A.Rodriguez","T.Zidane","D.Ceballos","N.Paz"]);
    }
}
// deuxieme équipe 

 class PSG extends FootballTeam{
    public function __construct(){
        $this->setName("Paris Saint Germain");
        $this->setName_staduim("Parcs des Princes");
        $this->setNames_players(22);
        $this->setName_president("Nasser al-Khelaifi");
        $this->setName_of_coach("Luis Enrique")
        $this->setNumbers_titles(50) 
        $this->setComposition("4-3-3")
        $this->setNames_players(["G.Donnarumma","L.Hernandez","A.Hakimi","Marquinhos","N.Mukiele","M.Skriniar","L.Beraldo","L.Kurzawa","M.Ugarte","F.Ruiz","Vitinha","K.lee","C.Soler","W.Zaire-Emery","E.Mbappe","S.Mayulu","K.Mbappe","G.Ramos","O.Dembele","M.Asension","R.Kolo Muani","B.Barcola"]);
    }
}

$team1 = new Real();
echo "Nom de l'équipe : ".$team1->getName()."\n";
echo "Nom du stade : ".$team1->getName_staduim()."\n";
echo "Nombre de joueurs : ".$team1->getNames_players()."\n";
echo " Nom du Président : ".$team1->getName_president()."\n";
echo " Nom du coach : ".$team1->getName_of_coach()."\n";
echo " Nombres de titre : ".$team1->getNumbers_tiltles()."\n";
echo " Composition de l'équipe : ".$team1->getComposition()."\n";
echo " Joueurs : ".implode(",",$team1->getNames_players())."\n";

$team2 = new PSG();
echo "Nom de l'équipe : ".$team2->getName()."\n";
echo "Nom du stade : ".$team2->getName_staduim()."\n";
echo "Nombre de joueurs : ".$team2->getNames_players()."\n";
echo " Nom du Président : ".$team2->getName_president()."\n";
echo " Nom du coach : ".$team2->getName_of_coach()."\n";
echo " Nombres de titre : ".$team2->getNumbers_tiltles()."\n";
echo " Composition de l'équipe : ".$team2->getComposition()."\n";
echo " Joueurs : ".implode(",",$team2->getNames_players())."\n";

?>
    