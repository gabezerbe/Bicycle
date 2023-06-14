<?php

namespace App\Service;

class Brakes
{
    private string $rotor;
    private string $size;
    private string $set;

    public function __construct(string $rotor = "SRAM HS2, 6-bolt, 180mm", string $size = "Medium", string $set= "SRAM Code RSC 4-piston hydraulic disc"){
        $this->rotor = $rotor;
        $this->size = $size;
        $this->set = $set;
    }

    public function getRotor(){
        return $this->rotor;
    }

    public function setRotor(string $rotor){
        $this->rotor = $rotor;
    }

    public function getRotorSize(){
        return $this->size;
    }

    public function setRotorSize(string $size){
        $this->size = $size;
    }

    public function getBreakeSet(){
        return $this->set;
    }

    public function setBrakeSet(string $brakeset){
        $this->set = $brakeset;
    }
}
