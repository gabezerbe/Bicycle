<?php

namespace App\Service;

/**
 * Wheels class - a component class for storing the Wheels of a Bicycle
 * @author - Gabe Zerbe
 */
class Wheels
{
    private string $material;
    private bool $tubeless;
    private int $tireSize;

    /**
     * @param string $material
     * @param bool $tubeless
     * @param int $tireSize
     */
    public function __construct(string $material = "Aluminum", bool $tubeless = false, int $tireSize = 29){
        $this->material = $material;
        $this->tubeless = $tubeless;
        $this->tireSize = $tireSize;
    }

    /**
     * @return string
     */
    public function getMaterial(){
        if($this->material !== ""){
            return $this->material;
        }

        return "You're not sure what material these wheels are.";
    }

    /**
     * @param string $material
     * @return string
     */
    public function setMaterial(string $material){
        $this->material = $material;
        return "You've replaced your old wheels with " . $material . " wheels.";
    }

    /**
     * @return bool
     */
    public function getTubeless(){
        return $this->tubeless;
    }

    /**
     * @param bool $tubeless
     * @return void
     */
    public function setTubeless(bool $tubeless){
        $this->tubeless = $tubeless;
    }

    /**
     * @return int|string
     */
    public function getTireSize(){
        if($this->tireSize !== 0){
            return $this->tireSize;
        }

        return "It looks like the your bike is missing tires.";
    }

    /**
     * @param int $tireSize
     * @return void
     */
    public function setTireSize(int $tireSize){
        $this->tireSize = $tireSize;
    }
}