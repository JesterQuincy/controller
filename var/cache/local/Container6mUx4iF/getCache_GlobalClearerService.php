<?php

namespace Container6mUx4iF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_GlobalClearerService extends App_KernelLocalDebugContainer
{
    /**
     * Gets the public 'cache.global_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/CacheClearerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheClearer/Psr6CacheClearer.php';

        return $container->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ($container->services['cache.app'] ?? $container->load('getCache_AppService')), 'cache.system' => ($container->services['cache.system'] ?? $container->load('getCache_SystemService')), 'cache.annotations' => ($container->privates['cache.annotations'] ?? $container->getCache_AnnotationsService()), 'cache.validator_expression_language' => ($container->services['cache.validator_expression_language'] ?? $container->load('getCache_ValidatorExpressionLanguageService')), 'cache.security_expression_language' => ($container->privates['cache.security_expression_language'] ?? $container->getCache_SecurityExpressionLanguageService()), 'cache.security_is_granted_attribute_expression_language' => ($container->services['cache.security_is_granted_attribute_expression_language'] ?? $container->getCache_SecurityIsGrantedAttributeExpressionLanguageService()), 'cache.doctrine.orm.default.result' => ($container->privates['cache.doctrine.orm.default.result'] ??= new \Symfony\Component\Cache\Adapter\ArrayAdapter()), 'cache.doctrine.orm.default.query' => ($container->privates['cache.doctrine.orm.default.query'] ??= new \Symfony\Component\Cache\Adapter\ArrayAdapter()), 'api_platform.cache.metadata.resource' => ($container->privates['api_platform.cache.metadata.resource'] ?? $container->getApiPlatform_Cache_Metadata_ResourceService()), 'api_platform.cache.metadata.property' => ($container->privates['api_platform.cache.metadata.property'] ?? $container->getApiPlatform_Cache_Metadata_PropertyService()), 'api_platform.cache.metadata.resource_collection' => ($container->privates['api_platform.cache.metadata.resource_collection'] ?? $container->getApiPlatform_Cache_Metadata_ResourceCollectionService())]);
    }
}
