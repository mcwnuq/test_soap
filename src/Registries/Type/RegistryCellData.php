<?php

namespace App\Registries\Type;

class RegistryCellData
{
    /**
     * @var null | int
     */
    private ?int $sort = null;

    /**
     * @var null | string
     */
    private ?string $type = null;

    /**
     * @var null | string
     */
    private ?string $content = null;

    /**
     * @var null | string
     */
    private ?string $fileName = null;

    /**
     * @var null | string
     */
    private ?string $fileContent = null;

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
     * @return null | string
     */
    public function getContent() : ?string
    {
        return $this->content;
    }

    /**
     * @param null | string $content
     * @return $this
     */
    public function setContent(?string $content) : static
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getFileName() : ?string
    {
        return $this->fileName;
    }

    /**
     * @param null | string $fileName
     * @return $this
     */
    public function setFileName(?string $fileName) : static
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getFileContent() : ?string
    {
        return $this->fileContent;
    }

    /**
     * @param null | string $fileContent
     * @return $this
     */
    public function setFileContent(?string $fileContent) : static
    {
        $this->fileContent = $fileContent;
        return $this;
    }
}

