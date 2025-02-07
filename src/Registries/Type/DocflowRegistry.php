<?php

namespace App\Registries\Type;

class DocflowRegistry
{
    /**
     * @var null | \App\Registries\Type\RegistryInformations
     */
    private ?\App\Registries\Type\RegistryInformations $registry = null;

    /**
     * @var null | non-empty-array<int<0,0>, mixed>
     */
    private ?array $columns = null;

    /**
     * @var null | non-empty-array<int<0,0>, mixed>
     */
    private ?array $rows = null;

    /**
     * @return null | \App\Registries\Type\RegistryInformations
     */
    public function getRegistry() : ?\App\Registries\Type\RegistryInformations
    {
        return $this->registry;
    }

    /**
     * @param null | \App\Registries\Type\RegistryInformations $registry
     * @return $this
     */
    public function setRegistry(?\App\Registries\Type\RegistryInformations $registry) : static
    {
        $this->registry = $registry;
        return $this;
    }

    /**
     * @return null | non-empty-array<int<0,0>, mixed>
     */
    public function getColumns() : ?array
    {
        return $this->columns;
    }

    /**
     * @param null | non-empty-array<int<0,0>, mixed> $columns
     * @return $this
     */
    public function setColumns(?array $columns) : static
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return null | non-empty-array<int<0,0>, mixed>
     */
    public function getRows() : ?array
    {
        return $this->rows;
    }

    /**
     * @param null | non-empty-array<int<0,0>, mixed> $rows
     * @return $this
     */
    public function setRows(?array $rows) : static
    {
        $this->rows = $rows;
        return $this;
    }
}

