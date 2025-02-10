<?php

namespace App\Registries;

use Phpro\SoapClient\Caller\Caller;
use App\Registries\Type;
use Phpro\SoapClient\Type\MultiArgumentRequest;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class RegistriesClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * Zwraca listę plików wymagających synchronizacji
     *
     * @return ResultInterface & Type\GetFilesToSyncResponse
     * @throws SoapException
     */
    public function getFilesToSync() : \App\Registries\Type\GetFilesToSyncResponse
    {
        $response = ($this->caller)('getFilesToSync', new MultiArgumentRequest([]));

        \Psl\Type\instance_of(\App\Registries\Type\GetFilesToSyncResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Zwraca listę plików wymagających synchronizacji
     *
     * @return ResultInterface & Type\SendRegistryFilesResponse
     * @throws SoapException
     */
    public function sendRegistryFiles() : \App\Registries\Type\SendRegistryFilesResponse
    {
        $response = ($this->caller)('sendRegistryFiles', new MultiArgumentRequest([]));

        \Psl\Type\instance_of(\App\Registries\Type\SendRegistryFilesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Synchronizuje dostarczone rejstry
     *
     * @param RequestInterface & Type\SendRegistries $sendRegistries
     * @return ResultInterface & Type\SendRegistriesResponse
     * @throws SoapException
     */
    public function sendRegistries(\App\Registries\Type\SendRegistries $sendRegistries) : \App\Registries\Type\SendRegistriesResponse
    {
        $response = ($this->caller)('sendRegistries', $sendRegistries);

        \Psl\Type\instance_of(\App\Registries\Type\SendRegistriesResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Uwierzytelnienie aplikacji klienckiej
     *
     * @param RequestInterface & Type\Authorize $request
     * @return ResultInterface & Type\AuthorizeResponse
     * @throws SoapException
     */
    public function authorize(\App\Registries\Type\Authorize $request) : \App\Registries\Type\AuthorizeResponse
    {
        $response = ($this->caller)('authorize', $request);

        \Psl\Type\instance_of(\App\Registries\Type\AuthorizeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Wylogowanie aplikacji klienckiej
     *
     * @return ResultInterface & Type\LogoutResponse
     * @throws SoapException
     */
    public function logout() : \App\Registries\Type\LogoutResponse
    {
        $response = ($this->caller)('logout', new MultiArgumentRequest([]));

        \Psl\Type\instance_of(\App\Registries\Type\LogoutResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Pozwala na przesłanie komunikatu podzielonego na części
     *
     * @param RequestInterface & Type\MessagePart $messagePart
     * @return ResultInterface & Type\MessagePartResponse
     * @throws SoapException
     */
    public function messagePart(\App\Registries\Type\MessagePart $messagePart) : \App\Registries\Type\MessagePartResponse
    {
        $response = ($this->caller)('messagePart', $messagePart);

        \Psl\Type\instance_of(\App\Registries\Type\MessagePartResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

