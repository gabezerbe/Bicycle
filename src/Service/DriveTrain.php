<?php

namespace App\Service;

class DriveTrain
{
    private string $shifter;
    private string $crank;
    private string $chain;
    private string $rearDerailleur;

    public function __construct(string $shifter = "SRAM Eagle AXS, 12 Speed", string $crank = "SRAM XX1 Eagle", string $chain = " SRAM XX1 Eagle, 12 Speed",
                                string $rearDerailleur = "SRAM XX1 Eagle AXS"){
        $this->shifter = $shifter;
        $this->crank = $crank;
        $this->chain = $chain;
        $this->rearDerailleur = $rearDerailleur;
    }

    public function getChain(){
        return $this->chain;
    }

    public function setChain(string $chain){
        $this->chain = $chain;
    }

    public function getCrank(){
        return $this->crank;
    }

    public function setCrank(string $crank){
        $this->crank = $crank;
    }

    public function getShifter(){
        return $this->shifter;
    }

    public function setShifter(string $shifter){
        $this->shifter = $shifter;
    }

    public function getRearDerailleur(){
        return $this->rearDerailleur;
    }

    public function setRearDerailleur(string $rearDerailleur){
        $this->rearDerailleur = $rearDerailleur;
    }
}