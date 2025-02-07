<?php

namespace App\Registries;

use App\Registries\RegistriesClient;
use App\Registries\RegistriesClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;
use Soap\Encoding\EncoderRegistry;

class RegistriesClientFactory
{
    /**
     * This factory can be used as a starting point to create your own specialized
     * factory. Feel free to modify.
     *
     * @param non-empty-string $wsdl
     */
    public static function factory(string $wsdl) : \App\Registries\RegistriesClient
    {
        $engine = DefaultEngineFactory::create(
            EngineOptions::defaults($wsdl)
                ->withEncoderRegistry(
                    EncoderRegistry::default()
                        ->addClassMapCollection(RegistriesClassmap::types())
                        ->addBackedEnumClassMapCollection(RegistriesClassmap::enums())
                )
                // If you want to enable WSDL caching:
                // ->withCache() 
                // If you want to use Alternate HTTP settings:
                // ->withWsdlLoader()
                // ->withTransport()
                // If you want specific SOAP setting:
                // ->withWsdlParserContext()
                // ->withWsdlServiceSelectionCriteria()
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new RegistriesClient($caller);
    }
}

