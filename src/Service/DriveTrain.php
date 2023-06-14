<?php

namespace App\Service;
/**
 * DriveTrain class - a component class for storing the drive train of a bicycle
 * @author - Gabe Zerbe
 */
class DriveTrain
{
    private string $shifter;
    private string $crank;
    private string $chain;
    private string $rearDerailleur;

    /**
     * @param string $shifter
     * @param string $crank
     * @param string $chain
     * @param string $rearDerailleur
     */
    public function __construct(string $shifter = "SRAM Eagle AXS, 12 Speed", string $crank = "SRAM XX1 Eagle", string $chain = " SRAM XX1 Eagle, 12 Speed",
                                string $rearDerailleur = "SRAM XX1 Eagle AXS"){
        $this->shifter = $shifter;
        $this->crank = $crank;
        $this->chain = $chain;
        $this->rearDerailleur = $rearDerailleur;
    }

    /**
     * @return string
     */
    public function getChain(){
        return $this->chain;
    }

    /**
     * @param string $chain
     * @return void
     */
    public function setChain(string $chain){
        $this->chain = $chain;
    }

    /**
     * @return string
     */
    public function getCrank(){
        return $this->crank;
    }

    /**
     * @param string $crank
     * @return void
     */
    public function setCrank(string $crank){
        $this->crank = $crank;
    }

    /**
     * @return string
     */
    public function getShifter(){
        return $this->shifter;
    }

    /**
     * @param string $shifter
     * @return void
     */
    public function setShifter(string $shifter){
        $this->shifter = $shifter;
    }

    /**
     * @return string
     */
    public function getRearDerailleur(){
        return $this->rearDerailleur;
    }

    /**
     * @param string $rearDerailleur
     * @return void
     */
    public function setRearDerailleur(string $rearDerailleur){
        $this->rearDerailleur = $rearDerailleur;
    }
}