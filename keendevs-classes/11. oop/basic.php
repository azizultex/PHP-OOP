<?php 
class Company {

    public $name;
    public $team = [];

    public function __construct($n){
        $this->name = $n;
    }

    function addTeam($n){
        array_push($this->team, $n);
    }
    function services(){
        echo 'PSD to HTML';
    }
}

$keendevs = new Company("Keendevs");
$temm = $keendevs->team;
$keendevs->addTeam("Sabbir");
$keendevs->addTeam("Jakir");

// var_dump($temm);
// echo $keendevs->services();
echo "{$keendevs->name} has below team members:\n";
foreach($keendevs->team as $t){
    echo $t . "\n";
}


$wedevs = new Company("Wedevs");
$wedevs->addTeam("Tareq Rahman");
$wedevs->addTeam("Asif Rahman");
$wedevs->addTeam("Sikandar Badshah");

echo "{$wedevs->name} has below team members:\n";
var_dump($wedevs->team);