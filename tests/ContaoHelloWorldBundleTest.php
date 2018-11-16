<?php


namespace Humandigital\ContaoHelloWorldBundle\Tests;

use Humandigital\ContaoHelloWorldBundle\ContaoHelloWorldBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoHelloWorldBundle();

        $this->assertInstanceOf('Humandigital\ContaoHelloWorldBundle\ContaoHelloWorldBundle', $bundle);
    }
}
