<?php

namespace App\Command;

use App\Service\Bicycle;
use App\Service\Wheels;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:ride-bike',
    description: 'Lets the user of this command ride a bike through the Symfony CLI',
    aliases:['app:ride-bike'],
    hidden: false
)]

class RideBicycle extends Command
{

    protected static $defaultDescription = 'This command creates a new bicycle and lets you ride it.';

    protected function configure(){
        $this->setHelp('Running this command will instantiate a new Bicycle Class and allow you to ride the bike.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $bike = new Bicycle();

        if(!$output instanceof ConsoleOutputInterface){
            throw new \LogicException('This command only accepts instances of "ConsoleOutputInterface".');
        }

        $output->writeln([
            'Bicycle Rider',
            '=============',
            'Created by: Gabe Zerbe',
            'You just got a new bike! Lets take it for a test ride, but first lets take a look at it!',
            '...',
        ]);

        $output->writeln(
            ['This bike is a ' . $bike->getBrand() . ' ' . $bike->getModel(). '!',
                'It has ' . $bike->getWheels()->getTireSize() . ' inch tires! And a ' . $bike->getDriveTrain()->getChain() . ' chain!',
                'This thing will go really fast!']
        );

        $output->writeln([
            'Lets take it for a ride!',
            $bike->peddleBike(15),
            $bike->peddleBike(-5),
            $bike->peddleBike(0)
        ]);

        $output->writeln([
            'What a ride!',
            'Lets swap out the wheels!'
        ]);

        $bike->setWheels(new Wheels('Stainless Steel', true, 43));

        $output->writeln([
            'Alright! Lets check these bad boys out!',
            'Size: ' . $bike->getWheels()->getTireSize(),
            'Material: ' . $bike->getWheels()->getMaterial(),
            'Tubeless: ' . $bike->getWheels()->getTubeless(),
        ]);

        return Command::SUCCESS;
    }
}