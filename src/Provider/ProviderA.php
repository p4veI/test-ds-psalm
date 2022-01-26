<?php

declare(strict_types=1);

namespace P4vel\TestDs\Provider;

final class ProviderA implements Provider
{
    public static function key() : int
    {
        return 0;
    }
}
