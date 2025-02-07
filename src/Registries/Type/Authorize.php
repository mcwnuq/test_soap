<?php

namespace App\Registries\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Authorize implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $synchronizationClientUID = null;

    /**
     * @var null | string
     */
    private ?string $synchronizationClientPassword = null;

    /**
     * Constructor
     *
     * @param null | string $synchronizationClientUID
     * @param null | string $synchronizationClientPassword
     */
    public function __construct(?string $synchronizationClientUID, ?string $synchronizationClientPassword)
    {
        $this->synchronizationClientUID = $synchronizationClientUID;
        $this->synchronizationClientPassword = $synchronizationClientPassword;
    }

    /**
     * @return null | string
     */
    public function getSynchronizationClientUID() : ?string
    {
        return $this->synchronizationClientUID;
    }

    /**
     * @param null | string $synchronizationClientUID
     * @return $this
     */
    public function setSynchronizationClientUID(?string $synchronizationClientUID) : static
    {
        $this->synchronizationClientUID = $synchronizationClientUID;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getSynchronizationClientPassword() : ?string
    {
        return $this->synchronizationClientPassword;
    }

    /**
     * @param null | string $synchronizationClientPassword
     * @return $this
     */
    public function setSynchronizationClientPassword(?string $synchronizationClientPassword) : static
    {
        $this->synchronizationClientPassword = $synchronizationClientPassword;
        return $this;
    }
}

