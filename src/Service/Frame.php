<?php

namespace App\Service;

/**
 * Frame class - a component class for storing the frame of a Bicycle
 * @author - Gabe Zerbe
 */
class Frame
{
    private string $type;
    private string $fork;
    private string $shock;
    private int $maxMilTravel;

    /**
     * @param string $type
     * @param string $fork
     * @param string $shock
     * @param int $maxMilTravel
     */
    public function __construct(string $type = "OCLV Mountain Carbon", string $fork = "Fox Factory 36", string $shock = "Fox Factory Float X",
                                int $maxMilTravel = 160){
        $this->type = $type;
        $this->fork = $fork;
        $this->shock = $shock;
        $this->maxMilTravel = $maxMilTravel;

    }

    /**
     * @param string $type
     * @return void
     */
    public function setFrameType(string $type){
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getFrameType(){
        return $this->type;
    }

    /**
     * @param string $fork
     * @return void
     */
    public function setFork(string $fork){
        $this->fork = $fork;
    }

    /**
     * @return string
     */
    public function getFork(){
        return $this->fork;
    }

    /**
     * @param string $shock
     * @return void
     */
    public function setShock(string $shock){
        $this->shock = $shock;
    }

    /**
     * @return string
     */
    public function getShock(){
        return $this->shock;
    }

    /**
     * @param int $maxMilTravel
     * @return void
     */
    public function setMaxMilTravel(int $maxMilTravel){
        $this->maxMilTravel = $maxMilTravel;
    }

    /**
     * @return int
     */
    public function getMaxMilTravel(){
        return $this->maxMilTravel;
    }
}