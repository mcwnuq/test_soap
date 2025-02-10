<?php

namespace App\Registries;

use App\Registries\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class RegistriesClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('FileToSync', Type\FileToSync::class),
            new ClassMap('ArrayOfFileToSync', Type\ArrayOfFileToSync::class),
            new ClassMap('GetFilesToSyncResponse', Type\GetFilesToSyncResponse::class),
            new ClassMap('SendRegistryFilesResponse', Type\SendRegistryFilesResponse::class),
            new ClassMap('RegistryInformations', Type\RegistryInformations::class),
            new ClassMap('RegistryColumnInformations', Type\RegistryColumnInformations::class),
            new ClassMap('ArrayOfRegistryColumnInformations', Type\ArrayOfRegistryColumnInformations::class),
            new ClassMap('RegistryCellData', Type\RegistryCellData::class),
            new ClassMap('ArrayOfRegistryCellData', Type\ArrayOfRegistryCellData::class),
            new ClassMap('RegistryRowValue', Type\RegistryRowValue::class),
            new ClassMap('ArrayOfRegistryRowValue', Type\ArrayOfRegistryRowValue::class),
            new ClassMap('RegistryRowInformations', Type\RegistryRowInformations::class),
            new ClassMap('ArrayOfRegistryRowInformations', Type\ArrayOfRegistryRowInformations::class),
            new ClassMap('DocflowRegistry', Type\DocflowRegistry::class),
            new ClassMap('ArrayOfDocflowRegistry', Type\ArrayOfDocflowRegistry::class),
            new ClassMap('SendRegistries', Type\SendRegistries::class),
            new ClassMap('RegistryResponse', Type\RegistryResponse::class),
            new ClassMap('SendRegistriesResponse', Type\SendRegistriesResponse::class),
            new ClassMap('authorize', Type\Authorize::class),
            new ClassMap('authorizeResponse', Type\AuthorizeResponse::class),
            new ClassMap('logoutResponse', Type\LogoutResponse::class),
            new ClassMap('messagePart', Type\MessagePart::class),
            new ClassMap('MessagePartResponse', Type\MessagePartResponse::class),
        );
    }
}

