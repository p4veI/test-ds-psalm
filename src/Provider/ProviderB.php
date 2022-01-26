<?php

declare(strict_types=1);

namespace P4vel\TestDs\Provider;

final class ProviderB implements Provider
{
    public static function key() : int
    {
        return 1;
    }
}
