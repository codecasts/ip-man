<?php

namespace IpMan\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Query extends Command
{
    protected function configure()
    {
        $this->setName('query');

        $this->setDescription('Get information about a given IP Address');

        $this->addArgument('ip_address', InputArgument::REQUIRED, 'Ip address to query');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $ip_address = $input->getArgument('ip_address');
        
        $output->writeln("Querying data about {$ip_address}");
    }
}