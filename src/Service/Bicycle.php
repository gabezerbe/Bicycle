<?php

namespace App\Service;

class Bicycle
{
    private string $brand, $model, $seat;
    private Wheels $wheels;
    private Frame $frame;
    private DriveTrain $driveTrain;
    private Brakes $brakes;
    private int $timesPeddaled;

    public function __construct(string $seat = "Bontrager Arvada, 138mm wide", string $brand = "Trek", string $model = "Fuel EX 9.9 XX1 AXS Gen 6", Frame $frame = new Frame(), Brakes $brakes = new Brakes(),
                                DriveTrain $driveTrain = new DriveTrain(), Wheels $wheels = new Wheels()){

        $this->brand = $brand;
        $this->model = $model;
        $this->seat = $seat;
        $this->frame = $frame;
        $this->driveTrain = $driveTrain;
        $this->brakes = $brakes;
        $this->timesPeddaled = 0;
        $this->wheels = $wheels;

    }

    public function peddleBike(int $i = 1){
        if($i == 0){
            return "You decided not to peddle the bike";
        } else if($i > 1){
            $this->timesPeddaled += $i;
            return "You peddled " . $i . " times.";
        } else if($i < 0) {
            $this->timesPeddaled -= $i;
            return "You peddled backwards " . $i . " times.";
        } else {
            $this->timesPeddaled++;
            return "You peddled the bike once.";
        }
    }

    /**
     * Getter and setter functions for returning parts of the bike
     * and setting parts of the bike
     */

    public function setSeat($seat){
        $this->seat = $seat;
    }

    public function getSeat(){
        return $this->seat;
    }

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