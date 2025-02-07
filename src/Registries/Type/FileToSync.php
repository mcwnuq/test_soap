<?php

namespace App\Registries\Type;

class FileToSync
{
    /**
     * @var null | string
     */
    private ?string $zalacznikUid = null;

    /**
     * @var null | string
     */
    private ?string $token = null;

    /**
     * @return null | string
     */
    public function getZalacznikUid() : ?string
    {
        return $this->zalacznikUid;
    }

    /**
     * @param null | string $zalacznikUid
     * @return $this
     */
    public function setZalacznikUid(?string $zalacznikUid) : static
    {
        $this->zalacznikUid = $zalacznikUid;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getToken() : ?string
    {
        return $this->token;
    }

    /**
     * @param null | string $token
     * @return $this
     */
    public function setToken(?string $token) : static
    {
        $this->token = $token;
        return $this;
    }
}

