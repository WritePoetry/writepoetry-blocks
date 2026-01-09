<?php
/**
 * Dependency Injection container configuration for WritePoetry Blocks.
 *
 * Defines service bindings, adapters, and factories for the plugin.
 *
 * @package WritePoetry
 * @subpackage Blocks
 */

use DI\ContainerBuilder;


$builder = new ContainerBuilder();


$builder->addDefinitions(
	array()
);

$container = $builder->build();

return $container;
