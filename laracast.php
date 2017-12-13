#! /usr/bin/env php

<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

require 'vendor/autoload.php';


$app = new Application('Laracast Demo', '1.0');

$app->register('SayHelloTo')
    ->SetDescription('Offer a greeting to the given person.')
    ->addArgument('name', InputArgument::REQUIRED, 'Your name.')
    ->setCode(function(InputInterface $input, OutputInterface $output)
    {
        $message = 'Hello ' . $input->getArgument('name');
    
        $output->writeln("<info>{$message}</info>");

    });

$app->run();

