<?php

namespace App\Command;

use Pimcore\Console\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Pimcore\Model\DataObject\Product;
use Pimcore\Model\DataObject;

class expCommand extends AbstractCommand
{
    protected function configure(): void
    {
        $this
            ->setName('export:command')
            ->setDescription('Awesome command');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $val = new DataObject\Product\Listing();
        $val->load();

        $arr = [array('Name', 'Description')];
        foreach ($val as $v) {
            $row = array($v->getName(), $v->getDescription());
            array_push($arr, $row);
        }

        // Open a file in this path in a write mode
        $t = time();
        $mode = fopen('/var/www/skel/public/Asset/file-' . date("h:i:sa") . '.csv', 'w');
        //iterate over all the item that in arr and put in csvfile
        foreach ($arr as $arr_item) {
            fputcsv($mode, $arr_item);
        }
        fclose($mode);
        return 0;
    }
}
