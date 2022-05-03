<?php

Flight::set('flight.views.path', dirname( __FILE__, 3).'/views');

$loader = new \Twig\Loader\FilesystemLoader(Flight::get('flight.views.path'));
$cachePath = [
    'cache' => dirname( __FILE__, 3).'/compilation_cache',
    'debug' => true
];

Flight::register('view', 'Twig\Environment', array($loader, $cachePath), function($twigExt){
	$twigExt->addExtension(new \Twig\Extension\DebugExtension());
});

Flight::map('render', function($layout, $data){
	echo Flight::view()->render($layout, $data);
});