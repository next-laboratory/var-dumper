<?php

declare(strict_types=1);

/**
 * This file is part of MaxPHP.
 *
 * @link     https://github.com/marxphp
 * @license  https://github.com/marxphp/max/blob/master/LICENSE
 */

namespace Max\VarDumper;

use RuntimeException;

class Dumper extends RuntimeException
{
    public array $vars;

    public function __construct(array $vars)
    {
        $this->vars = $vars;
    }
}
