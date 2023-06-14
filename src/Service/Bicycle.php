<?php

namespace App\Service;

class Bicycle
{
    private string $brand, $model;
    private Wheels $wheels;
    private Frame $frame;
    private DriveTrain $driveTrain;
    private Brakes $brakes;

    public function __construct(string $brand = "Trek", string $model = "Fuel EX 9.9 XX1 AXS Gen 6", Frame $frame = new Frame(), Brakes $brakes = new Brakes(),
                                DriveTrain $driveTrain = new DriveTrain()){

    }

    /**
     * Getter and setter functions for returning parts of the bike
     * and setting parts of the bike
     */

    public function getWheels(){
        return $this->wheels;
    }

    public function getFrame(){
        return $this->frame;
    }

    public function getDriveTrain(){
        return $this->driveTrain;
    }

    public function getBrakes(){
        return $this->brakes;
    }

    public function getBrand(){
        if($this->brand){
            return $this->brand;
        }
        return "You're not sure what brand this bike is.";
    }

    public function getModel(){
        if($this->model && $this->model !== ""){
            return $this->model;
        }
        return "You're not sure what model this bike is.";
    }

    public function setBrand(string $brand){
        $this->brand = $brand;
    }

    public function setModel(string $model){
        $this->model = $model;
    }

    public function setBrakes(Brakes $brakes){
        $this->brakes = $brakes;
    }

    public function setDriveTrain(DriveTrain $driveTrain){
        $this->driveTrain = $driveTrain;
    }

    public function setFrame(Frame $frame){
        $this->frame = $frame;
    }

    public function setWheels(Wheels $wheels){
        $this->wheels = $wheels;
    }
}