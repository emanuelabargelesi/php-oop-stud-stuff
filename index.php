<!-- TODO TODAY:

REPO: php-oop-stud-stuff




Estendere le classi dove possibile -->


<?php

// Disegnare il trait FullName con una funzione in grado di ritornare una stringa contenente nome e cognome separati da spazio, e utilizzarlo dove ritenuto utile.
trait FullName{
  public function printDati(){
    return 'Persona: ' . $this -> name . ' ' . $this -> lastname . ' ' . $this -> address;
  }
}

// Disegnare la classe Persona con nome, cognome e indirizzo
class Person{
  public $name;
  public $lastname;
  public $address;
  use FullName;
  public function __construct($name, $lastname, $address){
    $this -> name = $name;
    $this -> lastname = $lastname;
    $this -> address = $address;
  }
//   Definire la funzione toString() in ogni classe in modo da poter loggare i risultati
  public function toString(){
    return $this -> printDati();
  }
}

// Disegnare la classe Studente con nome, cognome, indirizzo, programma di studi e tasse
class Student extends Person{
  public $study;
  public $taxes;
  public function __construct($name, $lastname, $address, $study, $taxes){
    $this -> name = $name;
    $this -> lastname = $lastname;
    $this -> address = $address;
    $this -> study = $study;
    $this -> taxes = $taxes;
  }
//   Definire la funzione toString() in ogni classe in modo da poter loggare i risultati
  public function toString(){
    return parent::toString() . ' ' . $this -> study . ' ' . $this -> taxes;
  }
}

// Disegnare la classe Professore con nome, cognome, indirizzo, specializzazione e paga
class Professor extends Person{
public $degree;
public $salary;
  public function __construct($name,$lastname,$address,$degree, $salary){
    $this -> name = $name;
    $this -> lastname = $lastname;
    $this -> address = $address;
    $this -> degree = $degree;
    $this -> salary = $salary;
  }
//   Definire la funzione toString() in ogni classe in modo da poter loggare i risultati
  public function toString(){
    return parent::toString() . ' ' . $this -> degree . ' ' . $this -> salary;
  }
}

// Definire i costruttori di ogni classe.
$pers1 = new Person('Giovanni', 'Veronese', 'Vicolo Broglio');
$stud1 = new Student('Cinzia', 'Di Donato', 'Viale della Repubblica', 'Comunicazione', '2000');
$prof1 = new Professor('Deanna', 'Monari','Via Gramsci', 'Ragioneria', '1000');

//Stampo i tre dati.
echo $pers1 -> toString() . '<br>';
echo $stud1 -> toString() . '<br>';
echo $prof1 -> toString() . '<br>';
?>