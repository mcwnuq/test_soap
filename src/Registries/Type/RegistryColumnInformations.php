<?php

namespace App\Registries\Type;

class RegistryColumnInformations
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
    private ?int $sort = null;

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
    public function getSort() : ?int
    {
        return $this->sort;
    }

    /**
     * @param null | int $sort
     * @return $this
     */
    public function setSort(?int $sort) : static
    {
        $this->sort = $sort;
        return $this;
    }
}

