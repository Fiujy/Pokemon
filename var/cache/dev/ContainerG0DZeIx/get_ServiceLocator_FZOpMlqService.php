<?php

namespace ContainerG0DZeIx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FZOpMlqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FZOpMlq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FZOpMlq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pokemonRepository' => ['privates', 'App\\Repository\\PokemonRepository', 'getPokemonRepositoryService', true],
        ], [
            'pokemonRepository' => 'App\\Repository\\PokemonRepository',
        ]);
    }
}
