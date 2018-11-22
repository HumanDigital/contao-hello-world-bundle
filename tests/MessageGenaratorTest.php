<?php

declare(strict_types=1);

/*
 * This file is part of Contao Hello World Bundle.
 *
 * (c) HumanDigital
 *
 * @license LGPL-3.0-or-later
 */

namespace Humandigital\ContaoHelloWorldBundle\Tests;

use Humandigital\ContaoHelloWorldBundle\Library\MessageGenerator;
use PHPUnit\Framework\TestCase;

class MessageGenaratorTest extends TestCase
{
    public function testCanSayHelloToWorld()
    {
        $messageGenerator = new MessageGenerator();

        $message = $messageGenerator->sayHelloTo('World');

        $this->assertSame('Hello World', $message);
    }

    public function testCanNotSayHelloToEmptyTarget()
    {
        $messageGenerator = new MessageGenerator();

        $this->expectException(\InvalidArgumentException::class);

        $message = $messageGenerator->sayHelloTo('');
    }
}
