<?php

declare(strict_types=1);

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\PriorityShuffleRandom\Exception;

class NegativePriorityException extends InvalidPriorityException
{
    public function __construct(int $priority)
    {
        parent::__construct('Priority should be positive: '.$priority.' given');
    }
}
