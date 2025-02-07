<?php

namespace App\Registries\Type;

class RegistryRowValue
{
    /**
     * @var null | string
     */
    private ?string $columnId = null;

    /**
     * @var null | non-empty-array<int<0,0>, mixed>
     */
    private ?array $cellData = null;

    /**
     * @return null | string
     */
    public function getColumnId() : ?string
    {
        return $this->columnId;
    }

    /**
     * @param null | string $columnId
     * @return $this
     */
    public function setColumnId(?string $columnId) : static
    {
        $this->columnId = $columnId;
        return $this;
    }

    /**
     * @return null | non-empty-array<int<0,0>, mixed>
     */
    public function getCellData() : ?array
    {
        return $this->cellData;
    }

    /**
     * @param null | non-empty-array<int<0,0>, mixed> $cellData
     * @return $this
     */
    public function setCellData(?array $cellData) : static
    {
        $this->cellData = $cellData;
        return $this;
    }
}

