<?php

namespace App\Registries\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MessagePartResponse implements ResultInterface
{
    /**
     * @var null | int
     */
    private ?int $code = null;

    /**
     * @var null | string
     */
    private ?string $xml = null;

    /**
     * @return null | int
     */
    public function getCode() : ?int
    {
        return $this->code;
    }

    /**
     * @param null | int $code
     * @return $this
     */
    public function setCode(?int $code) : static
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getXml() : ?string
    {
        return $this->xml;
    }

    /**
     * @param null | string $xml
     * @return $this
     */
    public function setXml(?string $xml) : static
    {
        $this->xml = $xml;
        return $this;
    }
}

