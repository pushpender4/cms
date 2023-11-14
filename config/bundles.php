<?php

use Pimcore\Bundle\BundleGeneratorBundle\PimcoreBundleGeneratorBundle;
use Pimcore\Bundle\DataImporterBundle\PimcoreDataImporterBundle;
use Pimcore\Bundle\DataHubBundle\PimcoreDataHubBundle;

return [
    //Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
     //Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
     \Pimcore\Bundle\EcommerceFrameworkBundle\PimcoreEcommerceFrameworkBundle::class => ['all' => true], 
     \Pimcore\Bundle\PersonalizationBundle\PimcorePersonalizationBundle::class => ['all' => true],
     \Pimcore\Bundle\GlossaryBundle\PimcoreGlossaryBundle::class => ['all' => true],
     \Pimcore\Bundle\SeoBundle\PimcoreSeoBundle::class => ['all' => true],
     \Pimcore\Bundle\SimpleBackendSearchBundle\PimcoreSimpleBackendSearchBundle::class => ['all' => true],
     \Pimcore\Bundle\CustomReportsBundle\PimcoreCustomReportsBundle::class => ['all' => true],
     \Pimcore\Bundle\GoogleMarketingBundle\PimcoreGoogleMarketingBundle::class => ['all' => true],
     \Pimcore\Bundle\ApplicationLoggerBundle\PimcoreApplicationLoggerBundle::class => ['all' => true],
     \Pimcore\Bundle\WebToPrintBundle\PimcoreWebToPrintBundle::class => ['all' => true], 
     \Pimcore\Bundle\TinymceBundle\PimcoreTinymceBundle::class => ['all' => true],
     \Pimcore\Bundle\StaticRoutesBundle\PimcoreStaticRoutesBundle::class => ['all' => true],
     \Pimcore\Bundle\NewsletterBundle\PimcoreNewsletterBundle::class => ['all' => true],
     \Pimcore\Bundle\WordExportBundle\PimcoreWordExportBundle::class => ['all' => true],
     \Pimcore\Bundle\XliffBundle\PimcoreXliffBundle::class => ['all' => true],
     \Pimcore\Bundle\FileExplorerBundle\PimcoreFileExplorerBundle::class => ['all' => true],
     \Pimcore\Bundle\SystemInfoBundle\PimcoreSystemInfoBundle::class => ['all' => true],
     \Pimcore\Bundle\BundleGeneratorBundle\PimcoreBundleGeneratorBundle::class => ['all' => true],
     \Pimcore\Bundle\UuidBundle\PimcoreUuidBundle::class => ['all' => true],
    //  Rishu\TestBundle\TestBundle::class => ['all' => true],
     // bundles\rest\blogBundle::class => ['all' => true],
    //  awsBundle\awsBundle::class => ['all' => true],
     PimcoreDataHubBundle::class => ['all' => true],
     PimcoreDataImporterBundle::class => ['all' => true],
     PimcoreBundleGeneratorBundle::class => ['all' => true],
     awsBundle\awsBundle::class => ['all' => true],
     DynamicSearchBundle\DynamicSearchBundle::class => ['all' => true],
     Elements\Bundle\ProcessManagerBundle\ElementsProcessManagerBundle::class => ['all' => true]
];
