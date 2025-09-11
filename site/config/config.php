<?php

/*
|--------------------------------------------------------------------------
| Kirby Configuration Array
|--------------------------------------------------------------------------
*/

return [
	// 'debug' => true,
	'panel.dev' => true, // Enable panel development mode for plugin changes
	'auth' => [
		'methods' => ['password', 'password-reset']
	],
	'panel.install'   => true,
	'date.handler'    => 'strftime',
	'languages'       => true,
	'prefixDefaultLocale' => false,
	'error'           => 'z-error',
	'panel' => [
		'css'     => 'assets/css/baukasten-panel.css',
		'favicon' => 'assets/img/baukasten-favicon.ico',
	],
	'thumbs' => [
		'quality' => 99,
		'format'  => 'webp',
	],
	'routes' => [
		[
			'pattern' => 'sitemap.xml',
			'action' => function () {
				$sitemap = BaukastenMeta\Meta\Sitemap::factory();
				$xml = $sitemap->generate();

				return new Kirby\Cms\Response($xml, 'application/xml');
			}
		]
	],
	'ready' => function () {
		return [
			'johannschopplich.deploy-trigger' => [
				'deployUrl' => env('DEPLOY_URL', 'https://api.netlify.com/build_hooks/65142ee2a2de9b24080dcc95'),
			],
		];
	},
];
