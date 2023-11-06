<?php

declare(strict_types=1);

use Pimcore\Bundle\DataHubBundle\PimcoreDataHubBundle;
use Pimcore\Bundle\DataImporterBundle\PimcoreDataImporterBundle;

return [
    Pimcore\Bundle\SimpleBackendSearchBundle\PimcoreSimpleBackendSearchBundle::class => ['all' => true],
    Pimcore\Bundle\TinymceBundle\PimcoreTinymceBundle::class => ['all' => true],
    PimcoreDataHubBundle::class => ['all'=> true],
    PimcoreDataImporterBundle::class => ['all' => true],
];
