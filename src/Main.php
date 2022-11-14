<?php

namespace Monal\Poo2;

class Main
{
 private Padre $objeto;

 public function main()
 {
     $this->objeto = new Padre();
     echo $this->objeto->hello();
     $this->objeto = new Hijo();
     $this->objeto = new Padre();

  echo $this->objeto->hello();


 }

}