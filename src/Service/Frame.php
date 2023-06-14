<?php

namespace App\Service;

class Frame
{

    private string $type;
    private string $fork;
    private string $shock;
    private int $maxMilTravel;

    public function __construct(string $type = "OCLV Mountain Carbon", string $fork = "Fox Factory 36", string $shock = "Fox Factory Float X",
                                int $maxMilTravel = 160){
        $this->type = $type;
        $this->fork = $fork;
        $this->shock = $shock;
        $this->maxMilTravel = $maxMilTravel;

    }

    public function setFrameType(string $type){
        $this->type = $type;
    }

    public function getFrameType(){
        return $this->type;
    }

    public function setFork(string $fork){
        $this->fork = $fork;
    }

    public function getFork(){
        return $this->fork;
    }

    public function setShock(string $shock){
        $this->shock = $shock;
    }

    public function getShock(){
        return $this->shock;
    }

    public function setMaxMilTravel(int $maxMilTravel){
        $this->maxMilTravel = $maxMilTravel;
    }

    public function getMaxMilTravel(){
        return $this->maxMilTravel;
    }
}