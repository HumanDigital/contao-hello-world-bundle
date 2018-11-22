<?php

/*
 * This file is part of Contao Hello World Bundle.
 *
 * (c) HumanDigital
 *
 * @license LGPL-3.0-or-later
 */

namespace Humandigital\ContaoHelloWorldBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Humandigital\ContaoHelloWorldBundle\ContaoHelloWorldBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoHelloWorldBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
