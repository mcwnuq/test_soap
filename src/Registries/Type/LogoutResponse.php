<?php

namespace App\Registries\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LogoutResponse implements ResultInterface
{
    /**
     * @var null | bool
     */
    private ?bool $return = null;

    /**
     * @return null | bool
     */
    public function getReturn() : ?bool
    {
        return $this->return;
    }

    /**
     * @param null | bool $return
     * @return $this
     */
    public function setReturn(?bool $return) : static
    {
        $this->return = $return;
        return $this;
    }
}

