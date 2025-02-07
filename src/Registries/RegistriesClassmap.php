<?php

namespace App\Registries;

use App\Registries\Type;
use Soap\Encoding\ClassMap\ClassMapCollection;
use Soap\Encoding\ClassMap\ClassMap;

class RegistriesClassmap
{
    public static function types() : \Soap\Encoding\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('https://test-api.example.com/webservice/registries', 'FileToSync', Type\FileToSync::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'GetFilesToSyncResponse', Type\GetFilesToSyncResponse::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'SendRegistryFilesResponse', Type\SendRegistryFilesResponse::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'RegistryInformations', Type\RegistryInformations::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'RegistryColumnInformations', Type\RegistryColumnInformations::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'RegistryCellData', Type\RegistryCellData::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'RegistryRowValue', Type\RegistryRowValue::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'RegistryRowInformations', Type\RegistryRowInformations::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'DocflowRegistry', Type\DocflowRegistry::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'SendRegistries', Type\SendRegistries::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'RegistryResponse', Type\RegistryResponse::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'SendRegistriesResponse', Type\SendRegistriesResponse::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'authorize', Type\Authorize::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'authorizeResponse', Type\AuthorizeResponse::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'logoutResponse', Type\LogoutResponse::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'messagePart', Type\MessagePart::class),
            new ClassMap('https://test-api.example.com/webservice/registries', 'MessagePartResponse', Type\MessagePartResponse::class),
        );
    }

    public static function enums() : \Soap\Encoding\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(

        );
    }
}

