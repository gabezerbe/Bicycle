<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 *
 */
class CreateBicycleCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {



        return Command::SUCCESS;

        return Command::INVALID;
    }
}