<?php

namespace Monal\Poo2;

class Padre
{
    protected string $name;

    /**
     * @param string $name
     */
    public function __construct()
    {
        $this->name = "padre";
    }


    public function hello()
    {

        return "Hola soy tu $this->name";
    }



}