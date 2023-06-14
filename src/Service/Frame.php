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
}