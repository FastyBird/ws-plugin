<?php declare(strict_types = 1);

use FastyBird\Metadata;
use Nette\Utils;

return [
	'create' => [
		Utils\ArrayHash::from([
			'id'      => 'd627e987-a9aa-4f23-90c3-4fc38ae81ee1',
			'device'  => 'device-name',
			'channel' => 'channel-name',
			'name'    => 'Channel custom name',
			'title'   => null,
			'comment' => null,
			'control' => [],
		]),
		Metadata\Types\RoutingKeyType::get(Metadata\Types\RoutingKeyType::ROUTE_CHANNELS_ENTITY_CREATED),
		Metadata\Types\ModuleOriginType::get(Metadata\Types\ModuleOriginType::ORIGIN_MODULE_DEVICES),
	],
	'update' => [
		Utils\ArrayHash::from([
			'id'      => 'd627e987-a9aa-4f23-90c3-4fc38ae81ee1',
			'device'  => 'device-name',
			'channel' => 'channel-name',
			'name'    => 'Channel custom name',
			'title'   => null,
			'comment' => null,
			'control' => [],
		]),
		Metadata\Types\RoutingKeyType::get(Metadata\Types\RoutingKeyType::ROUTE_CHANNELS_ENTITY_UPDATED),
		Metadata\Types\ModuleOriginType::get(Metadata\Types\ModuleOriginType::ORIGIN_MODULE_DEVICES),
	],
	'delete' => [
		Utils\ArrayHash::from([
			'id'      => 'd627e987-a9aa-4f23-90c3-4fc38ae81ee1',
			'device'  => 'device-name',
			'channel' => 'channel-name',
			'name'    => 'Channel custom name',
			'title'   => null,
			'comment' => null,
			'control' => [],
		]),
		Metadata\Types\RoutingKeyType::get(Metadata\Types\RoutingKeyType::ROUTE_CHANNELS_ENTITY_DELETED),
		Metadata\Types\ModuleOriginType::get(Metadata\Types\ModuleOriginType::ORIGIN_MODULE_DEVICES),
	],
];
