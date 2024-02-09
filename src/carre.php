<?php
namespace Riad\ProjetTest;
use Exception;
class Carre {
private  $cote;
public function __construct($cote){
$this->setCote($cote);
}
public function setCote($cote) {
if($cote <0)throw new Exception("Valeur invalide!");
$this->cote = $cote;
}
public function surface(){
return $this->cote *$this->cote;
}
}