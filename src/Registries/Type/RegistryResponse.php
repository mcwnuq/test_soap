<?php

namespace App\Registries\Type;

class RegistryResponse
{
    /**
     * @var null | string
     */
    private ?string $id = null;

    /**
     * @var null | string
     */
    private ?string $type = null;

    /**
     * @var null | int
     */
    private ?int $success = null;

    /**
     * @var null | string
     */
    private ?string $description = null;

    /**
     * 'Array' is a complex type for accessors identified by position
     *
     * @var null | array
     */
    private ?array $fileTokens = null;

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
    public function getSuccess() : ?int
    {
        return $this->success;
    }

    /**
     * @param null | int $success
     * @return $this
     */
    public function setSuccess(?int $success) : static
    {
        $this->success = $success;
        return $this;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }

    /**
     * @param null | string $description
     * @return $this
     */
    public function setDescription(?string $description) : static
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return null | array
     */
    public function getFileTokens() : ?array
    {
        return $this->fileTokens;
    }

    /**
     * @param null | array $fileTokens
     * @return $this
     */
    public function setFileTokens(?array $fileTokens) : static
    {
        $this->fileTokens = $fileTokens;
        return $this;
    }
}

