<?php

namespace App\Registries\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendRegistries implements RequestInterface
{
    /**
     * @var null | non-empty-array<int<0,0>, mixed>
     */
    private ?array $registries = null;

    /**
     * Constructor
     *
     * @param null | non-empty-array<int<0,0>, mixed> $registries
     */
    public function __construct(?array $registries)
    {
        $this->registries = $registries;
    }

    /**
     * @return null | non-empty-array<int<0,0>, mixed>
     */
    public function getRegistries() : ?array
    {
        return $this->registries;
    }

    /**
     * @param null | non-empty-array<int<0,0>, mixed> $registries
     * @return $this
     */
    public function setRegistries(?array $registries) : static
    {
        $this->registries = $registries;
        return $this;
    }
}

