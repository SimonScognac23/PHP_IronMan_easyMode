<?php

require_once('laser.php');
require_once('repulsor.php');
require_once('flight.php');
require_once('shield.php');

// non abbiamo bisogno di richiamare le due classi astratte in quanto sono state gia chiamate nelle rispettive classi figlie


class IronmanArmor {

    public $attacck;
    public $defense;

    public static $counter = 0;

    public function __construct(Attack $attacco, Defense $difesa)

    {
        $this->attack = $attacco;
        $this->defense = $difesa;

        self::$counter++;



        
    }


    // funzione fatte appposta per questo scope

    public function ironmanAttack(){

        $this->attack->attacco();
    }

    
    public function ironmanDefense(){

        $this->defense->defend();   // prendiamo defense che è un oggetto di classe defense che avra accesso alla funzione defende
    }


    // metodo per contare ogni nuovo oggetto di classe IronmanArmor istanziato

}


$ironman = new IronmanArmor( new Laser(), new EnergyShield() );

var_dump($ironman);

$ironman->ironmanAttack();
$ironman->ironmanDefense();

 // metodo per contare ogni nuovo oggetto di classe IronmanArmor istanziato

 echo IronmanArmor::$counter . "\n";