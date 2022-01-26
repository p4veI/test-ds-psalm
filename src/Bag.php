<?php

declare(strict_types=1);

namespace P4vel\TestDs;

use Ds\Map;
use Ds\Pair;
use P4vel\TestDs\Provider\Provider;
use P4vel\TestDs\Provider\ProviderA;
use P4vel\TestDs\Provider\ProviderB;

final class Bag
{
    /** @var Map<int, Provider> */
    private Map $providers;

    public function __construct(ProviderA $providerA, ProviderB $providerB)
    {
        $this->providers = mapFromIterable(
            [$providerA, $providerB],
            static fn (mixed $_, Provider $provider) : Pair => new Pair(
                $provider::key(),
                $provider,
            )
        );
    }

    public function get(int $key) : Provider
    {
        return $this->providers->get($key);
    }
}
