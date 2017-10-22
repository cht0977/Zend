<?php
/**
 * Created by PhpStorm.
 * User: Christopher
 * Date: 22.10.2017
 * Time: 18:06
 */
namespace Album;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}