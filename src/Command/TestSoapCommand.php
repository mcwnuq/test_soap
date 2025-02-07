<?php

namespace App\Command;

use App\Registries\RegistriesClientFactory;
use App\Registries\Type\DocflowRegistry;
use App\Registries\Type\RegistryColumnInformations;
use App\Registries\Type\RegistryInformations;
use App\Registries\Type\RegistryRowInformations;
use App\Registries\Type\SendRegistries;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:test-soap',
)]
class TestSoapCommand extends Command
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        $client = RegistriesClientFactory::factory('src/Registries/registries.wsdl');

        $registries = [];

        $docflowRegistry = new DocflowRegistry();

        $docflowRegistry->setRegistry(
            (new RegistryInformations())
                ->setId('c27r38')
                ->setName('test')
                ->setToSynchronize(1)
                ->setSpId(429186)
                ->setType('docflow')
                ->setZalacznikiUid(2643)
                ->setDeleted(0)
        );

        $docflowRegistry->setColumns(
            [
                (new RegistryColumnInformations())
                    ->setId('1532')
                    ->setName('test'),
                (new RegistryColumnInformations())
                    ->setId('714826')
                    ->setName('test')
            ]
        );

        $docflowRegistry->setRows(
            [
                (new RegistryRowInformations())
                    ->setRowId('467129')
                    ->setRowCreateDate('2021-09-01 00:00:00')
                    ->setRowValue(null)
                    ->setDeleted(0)
                    ->setSort(null)
            ]
        );

        $registries[] = $docflowRegistry;
        $sendRegistries = new SendRegistries($registries);
        $response = $client->sendRegistries($sendRegistries);

        dump($response);

        return Command::SUCCESS;
    }
}
