<?php

declare(strict_types=1);

namespace App\UserInterface\Cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

final class ImportOrdersCommand extends Command
{
    private const COMMAND_NAME = 'app:import:orders';

    private SymfonyStyle $io;

    public function __construct()
    {
        parent::__construct(self::COMMAND_NAME);
    }

    protected function interact(InputInterface $input, OutputInterface $output): void
    {
        $this->io = new SymfonyStyle($input, $output);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // TODO your code here...

        return 0;
    }
}
