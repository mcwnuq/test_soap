<?php

namespace App\Registries\Type;

class RegistryRowInformations
{
    /**
     * @var null | string
     */
    private ?string $rowId = null;

    /**
     * @var null | string
     */
    private ?string $rowCreateDate = null;

    /**
     * @var null | non-empty-array<int<0,0>, mixed>
     */
    private ?array $rowValue = null;

    /**
     * @var null | int
     */
    private ?int $deleted = null;

    /**
     * @var null | int
     */
    private ?int $sort = null;

    /**
     * @return null | string
     */
    public function getRowId() : ?string
    {
        return $this->rowId;
    }

    /**
     * @param null | string $rowId
     * @return $this
     */
    public function setRowId(?string $rowId) : static
    {
        $this->rowId = $rowId;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getRowCreateDate() : ?string
    {
        return $this->rowCreateDate;
    }

    /**
     * @param null | string $rowCreateDate
     * @return $this
     */
    public function setRowCreateDate(?string $rowCreateDate) : static
    {
        $this->rowCreateDate = $rowCreateDate;
        return $this;
    }

    /**
     * @return null | non-empty-array<int<0,0>, mixed>
     */
    public function getRowValue() : ?array
    {
        return $this->rowValue;
    }

    /**
     * @param null | non-empty-array<int<0,0>, mixed> $rowValue
     * @return $this
     */
    public function setRowValue(?array $rowValue) : static
    {
        $this->rowValue = $rowValue;
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

