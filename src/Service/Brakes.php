<?php

namespace App\Service;

/**
 * Brakes Class - a simple component class to store the brakes of a bicycle
 * @author - Gabe Zerbe
 */
class Brakes
{
    private string $rotor;
    private string $size;
    private string $set;

    /**
     * @param string $rotor - String value for name of the rotor
     * @param string $size - String value for the size of a rotor
     * @param string $set - String value for the name of the brakes set
     */

    public function __construct(string $rotor = "SRAM HS2, 6-bolt, 180mm", string $size = "Medium", string $set= "SRAM Code RSC 4-piston hydraulic disc"){
        $this->rotor = $rotor;
        $this->size = $size;
        $this->set = $set;
    }

    /**
     * @return string
     */
    public function getRotor(){
        return $this->rotor;
    }

    /**
     * @param string $rotor
     * @return void
     */
    public function setRotor(string $rotor){
        $this->rotor = $rotor;
    }

    /**
     * @return string
     */
    public function getRotorSize(){
        return $this->size;
    }

    /**
     * @param string $size
     * @return void
     */
    public function setRotorSize(string $size){
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getBreakeSet(){
        return $this->set;
    }

    /**
     * @param string $brakeset
     * @return void
     */
    public function setBrakeSet(string $brakeset){
        $this->set = $brakeset;
    }
}
