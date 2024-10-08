<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src/',
        __DIR__ . '/tests/',
    ])
    ->withPhpVersion(PhpVersion::PHP_83)
    ->withPhpSets(true)
    ->withSets([
        // Rector sets

        LevelSetList::UP_TO_PHP_83,

        // SetList::CODE_QUALITY,
        // SetList::CODING_STYLE,
        // SetList::DEAD_CODE,
        // SetList::EARLY_RETURN,
        // SetList::INSTANCEOF,
        // SetList::NAMING,
        // SetList::PRIVATIZATION,
        // SetList::STRICT_BOOLEANS,
        SetList::TYPE_DECLARATION,

        // PHPUnit sets

        // PHPUnitSetList::PHPUNIT80_DMS,
        // PHPUnitSetList::PHPUNIT_40,
        // PHPUnitSetList::PHPUNIT_50,
        // PHPUnitSetList::PHPUNIT_60,
        // PHPUnitSetList::PHPUNIT_70,
        // PHPUnitSetList::PHPUNIT_80,
        // PHPUnitSetList::PHPUNIT_90,
        // PHPUnitSetList::PHPUNIT_100,
        // PHPUnitSetList::PHPUNIT_CODE_QUALITY,
    ]);
