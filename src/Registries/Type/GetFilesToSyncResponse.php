<?php

namespace App\Registries\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetFilesToSyncResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $url = null;

    /**
     * @var null | non-empty-array<int<0,0>, mixed>
     */
    private ?array $files = null;

    /**
     * @return null | string
     */
    public function getUrl() : ?string
    {
        return $this->url;
    }

    /**
     * @param null | string $url
     * @return $this
     */
    public function setUrl(?string $url) : static
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return null | non-empty-array<int<0,0>, mixed>
     */
    public function getFiles() : ?array
    {
        return $this->files;
    }

    /**
     * @param null | non-empty-array<int<0,0>, mixed> $files
     * @return $this
     */
    public function setFiles(?array $files) : static
    {
        $this->files = $files;
        return $this;
    }
}

