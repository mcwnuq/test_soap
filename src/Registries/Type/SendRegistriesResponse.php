<?php

namespace App\Registries\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendRegistriesResponse implements ResultInterface
{
    /**
     * @var null | \App\Registries\Type\RegistryResponse
     */
    private ?\App\Registries\Type\RegistryResponse $return = null;

    /**
     * @return null | \App\Registries\Type\RegistryResponse
     */
    public function getReturn() : ?\App\Registries\Type\RegistryResponse
    {
        return $this->return;
    }

    /**
     * @param null | \App\Registries\Type\RegistryResponse $return
     * @return $this
     */
    public function setReturn(?\App\Registries\Type\RegistryResponse $return) : static
    {
        $this->return = $return;
        return $this;
    }
}

