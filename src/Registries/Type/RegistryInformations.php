<?php

namespace App\Registries\Type;

class RegistryInformations
{
    /**
     * @var null | string
     */
    private ?string $id = null;

    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | int
     */
    private ?int $toSynchronize = null;

    /**
     * @var null | int
     */
    private ?int $spId = null;

    /**
     * @var null | string
     */
    private ?string $type = null;

    /**
     * @var null | int
     */
    private ?int $zalacznikiUid = null;

    /**
     * @var null | int
     */
    private ?int $deleted = null;

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->id;
    }

    /**
     * @param null | string $id
     * @return $this
     */
    public function setId(?string $id) : static
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return $this
     */
    public function setName(?string $name) : static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return null | int
     */
    public function getToSynchronize() : ?int
    {
        return $this->toSynchronize;
    }

    /**
     * @param null | int $toSynchronize
     * @return $this
     */
    public function setToSynchronize(?int $toSynchronize) : static
    {
        $this->toSynchronize = $toSynchronize;
        return $this;
    }

    /**
     * @return null | int
     */
    public function getSpId() : ?int
    {
        return $this->spId;
    }

    /**
     * @param null | int $spId
     * @return $this
     */
    public function setSpId(?int $spId) : static
    {
        $this->spId = $spId;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @param null | string $type
     * @return $this
     */
    public function setType(?string $type) : static
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return null | int
     */
    public function getZalacznikiUid() : ?int
    {
        return $this->zalacznikiUid;
    }

    /**
     * @param null | int $zalacznikiUid
     * @return $this
     */
    public function setZalacznikiUid(?int $zalacznikiUid) : static
    {
        $this->zalacznikiUid = $zalacznikiUid;
        return $this;
    }

    /**
     * @return null | int
     */
    public function getDeleted() : ?int
    {
        return $this->deleted;
    }

    /**
     * @param null | int $deleted
     * @return $this
     */
    public function setDeleted(?int $deleted) : static
    {
        $this->deleted = $deleted;
        return $this;
    }
}

