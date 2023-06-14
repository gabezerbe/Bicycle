<?php

namespace App\Service;

/**
 * Bicycle Class - A simple bicycle class with a few component classes for constructing a bicycle
 * @author - Gabe Zerbe
 */
class Bicycle
{
    private string $brand, $model, $seat;
    private Wheels $wheels;
    private Frame $frame;
    private DriveTrain $driveTrain;
    private Brakes $brakes;
    private int $timesPedaled;

    /**
     * Constructor for Bicycle class. Accepts several strings and specified objects to override the default bicycle
     * @param string $seat - [Optional] String override for seat
     * @param string $brand - [Optional] String override for brand
     * @param string $model - [Optional] String override for model
     * @param Frame $frame - [Optional] a Frame object | See Frame.php to inspect defaults parameters
     * @param Brakes $brakes - [Optional] a Brakes object | See Brakes.php to inspect default parameters
     * @param DriveTrain $driveTrain - [Optional] a DriveTrain object | See DriveTrain.php to inspect default parameters
     * @param Wheels $wheels - [Optional] a Wheels object | See Wheels.php to inspect default parameters
     */

    public function __construct(string $seat = "Bontrager Arvada, 138mm wide", string $brand = "Trek", string $model = "Fuel EX 9.9 XX1 AXS Gen 6", Frame $frame = new Frame(), Brakes $brakes = new Brakes(),
                                DriveTrain $driveTrain = new DriveTrain(), Wheels $wheels = new Wheels()){

        $this->brand = $brand;
        $this->model = $model;
        $this->seat = $seat;
        $this->frame = $frame;
        $this->driveTrain = $driveTrain;
        $this->brakes = $brakes;
        $this->timesPedaled = 0;
        $this->wheels = $wheels;

    }

    /**
     * Allows the bike to be pedalled
     * @param int $i - Integer value of how many times pedalled
     * @return string
     */
    public function peddleBike(int $i = 1): string{
        if($i == 0){
            return "You decided not to peddle the bike";
        } else if($i > 1){
            $this->timesPedaled += $i;
            return "You peddled " . $i . " times.";
        } else if($i < 0) {
            $this->timesPedaled -= $i;
            return "You peddled backwards " . $i . " times.";
        } else {
            $this->timesPedaled++;
            return "You peddled the bike once.";
        }
    }


    /**
     * @param $seat - set the seat string
     * @return void
     */
    public function setSeat($seat){
        $this->seat = $seat;
    }

    /**
     * @return string - gets the seat and returns as a string value
     */
    public function getSeat(){
        return $this->seat;
    }

    /**
     * @return Wheels - returns the Wheel object
     */
    public function getWheels(){
        return $this->wheels;
    }

    /**
     * @return Frame returns the Frame object
     */
    public function getFrame(){
        return $this->frame;
    }

    /**
     * @return DriveTrain - returns the DriveTrain object
     */
    public function getDriveTrain(){
        return $this->driveTrain;
    }

    /**
     * @return Brakes - returns the Brakes object
     */
    public function getBrakes(){
        return $this->brakes;
    }

    /**
     * @return string returns the brand as a string value
     */
    public function getBrand(){
        if($this->brand){
            return $this->brand;
        }
        return "You're not sure what brand this bike is.";
    }

    /**
     * @return string - returns the model as a string value
     */
    public function getModel(){
        if($this->model && $this->model !== ""){
            return $this->model;
        }
        return "You're not sure what model this bike is.";
    }

    /**
     * @param string $brand - string value to replace the current brand
     * @return void
     */
    public function setBrand(string $brand){
        $this->brand = $brand;
    }

    /**
     * @param string $model - string value to replace the model
     * @return void
     */
    public function setModel(string $model){
        $this->model = $model;
    }

    /**
     * @param Brakes $brakes - Brakes object to replace the current Brakes object
     * @return void
     */
    public function setBrakes(Brakes $brakes){
        $this->brakes = $brakes;
    }

    /**
     * @param DriveTrain $driveTrain - DriveTrain object to replace the current DriveTrain Object
     * @return void
     */
    public function setDriveTrain(DriveTrain $driveTrain){
        $this->driveTrain = $driveTrain;
    }

    /**
     * @param Frame $frame - Frame object to replace the current Frame object
     * @return void
     */
    public function setFrame(Frame $frame){
        $this->frame = $frame;
    }

    /**
     * @param Wheels $wheels - Wheels object to replace the current Wheels object
     * @return void
     */
    public function setWheels(Wheels $wheels){
        $this->wheels = $wheels;
    }
}