<?php 
use Riad\ProjetTest\Carre ;
use PHPUnit\Framework\TestCase;
class CarreTest extends TestCase
{
public function testSurface(){
$objet =new Carre(10);
$this->assertEquals(110,$objet->surface());
} 
}