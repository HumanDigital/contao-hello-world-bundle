<?php

declare(strict_types=1);

/*
 * This file is part of Contao Hello World Bundle.
 *
 * (c) HumanDigital
 *
 * @license LGPL-3.0-or-later
 */

namespace Humandigital\ContaoHelloWorldBundle\Library;

class MessageGenerator
{
    public function sayHelloTo(string $target): string
    {
        if (empty($target)) {
            throw new \InvalidArgumentException('Target must not be empty.');
        }

        $message = 'Hello '.$target;

        return $message;
    }
}
