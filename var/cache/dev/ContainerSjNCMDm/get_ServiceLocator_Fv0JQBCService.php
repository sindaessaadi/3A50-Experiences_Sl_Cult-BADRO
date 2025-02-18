<?php

namespace ContainerSjNCMDm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fv0JQBCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Fv0JQBC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Fv0JQBC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\MatchingController::delete' => ['privates', '.service_locator.WhK3Kx7', 'get_ServiceLocator_WhK3Kx7Service', true],
            'App\\Controller\\MatchingController::edit' => ['privates', '.service_locator.u8IWU43', 'get_ServiceLocator_U8IWU43Service', true],
            'App\\Controller\\MatchingController::index' => ['privates', '.service_locator.ys3dFlY', 'get_ServiceLocator_Ys3dFlYService', true],
            'App\\Controller\\MatchingController::new' => ['privates', '.service_locator.gxkSA7l', 'get_ServiceLocator_GxkSA7lService', true],
            'App\\Controller\\MatchingController::show' => ['privates', '.service_locator.BXUgyVm', 'get_ServiceLocator_BXUgyVmService', true],
            'App\\Controller\\UserController::register' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\MatchingController:delete' => ['privates', '.service_locator.WhK3Kx7', 'get_ServiceLocator_WhK3Kx7Service', true],
            'App\\Controller\\MatchingController:edit' => ['privates', '.service_locator.u8IWU43', 'get_ServiceLocator_U8IWU43Service', true],
            'App\\Controller\\MatchingController:index' => ['privates', '.service_locator.ys3dFlY', 'get_ServiceLocator_Ys3dFlYService', true],
            'App\\Controller\\MatchingController:new' => ['privates', '.service_locator.gxkSA7l', 'get_ServiceLocator_GxkSA7lService', true],
            'App\\Controller\\MatchingController:show' => ['privates', '.service_locator.BXUgyVm', 'get_ServiceLocator_BXUgyVmService', true],
            'App\\Controller\\UserController:register' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\MatchingController::delete' => '?',
            'App\\Controller\\MatchingController::edit' => '?',
            'App\\Controller\\MatchingController::index' => '?',
            'App\\Controller\\MatchingController::new' => '?',
            'App\\Controller\\MatchingController::show' => '?',
            'App\\Controller\\UserController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\MatchingController:delete' => '?',
            'App\\Controller\\MatchingController:edit' => '?',
            'App\\Controller\\MatchingController:index' => '?',
            'App\\Controller\\MatchingController:new' => '?',
            'App\\Controller\\MatchingController:show' => '?',
            'App\\Controller\\UserController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
