<?php

namespace App\Service;

class Wheels
{
    private string $material;
    private bool $tubeless;
    private int $tireSize;

    public function __construct(string $material = "Aluminum", bool $tubeless = false, int $tireSize = 29){
        $this->material = $material;
        $this->tubeless = $tubeless;
        $this->tireSize = $tireSize;
    }

    public function getMaterial(){
        if($this->material !== ""){
            return $this->material;
        }

        return "You're not sure what material these wheels are.";
    }

    public function setMaterial(string $material){
        $this->material = $material;
        return "You've replaced your old wheels with " . $material . " wheels.";
    }

    public function getTubeless(){
        return $this->tubeless;
    }

    public function setTubeless(bool $tubeless){
        $this->tubeless = $tubeless;
    }

    public function getTireSize(){
        if($this->tireSize !== 0){
            return $this->tireSize;
        }

        return "It looks like the your bike is missing tires.";
    }

    public function setTireSize(int $tireSize){
        $this->tireSize = $tireSize;
    }
}