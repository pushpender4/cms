<?php

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Product;

class dataCommand extends AbstractCommand
{
    protected function configure(): void
    {
        $this
            ->setName('import:command')
            ->setDescription('Awesome command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
                $csvFilePath="/var/www/skel/file.csv";
                $csvFile = fopen($csvFilePath, 'r');
                $i=0;
                while (($data = fgetcsv($csvFile)) !== false) {

                    if($i==0){
                        ++$i;
                        continue;
                    }
                    $Object = new product();
                    $Object->setKey(\Pimcore\Model\Element\Service::getValidKey($data[0], 'object'));
                    $Object->setParentId(1);
                    $Object->setName($data[0]);
                    $Object->setDescription($data[1]);
        
                    $Object->save();
                }
                fclose($csvFile);
                return 0;
            }
        }