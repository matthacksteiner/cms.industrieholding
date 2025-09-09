<?php

use Kirby\Cms\App;

@include_once __DIR__ . '/vendor/autoload.php';

App::plugin('fabianmichael/meta', [
    'options' => [
        'cache' => true,

        'sitemap' => true,
        'sitemap.detailSettings' => false,
        'sitemap.pages.exclude' => [],
        'sitemap.pages.includeUnlisted' => [],
        'sitemap.templates.exclude' => [],
        'sitemap.templates.includeUnlisted' => [],

        'schema' => true,
        'social' => true,
        'twitter' => false,

        'robots' => true,
        'robots.canonical' => true,
        'robots.index' => true,
        'robots.follow' => true,
        'robots.archive' => true,
        'robots.imageindex' => true,
        'robots.snippet' => true,
        'robots.translate' => true,

        'title.separators' => ['~' , '-' , '–' , '—' , ':' , '/' , '⋆' , '·' , '•' , '~' , '×' , '*' , '‣', '→', '←', '<' , '>' , '«' , '»' , '‹' , '›', '♠︎', '♣︎', '♥︎', '♦︎', '☙', '❦', '❧', '☭'],
        'theme.color' => null,

        'panel.view.filter' => null,
    ],

    // API and areas removed for headless usage

    'blueprints' => [
        'fields/meta/general-group'             => require __DIR__ . '/blueprints/fields/meta/general-group.php',
        'fields/meta/global-general-group'      => require __DIR__ . '/blueprints/fields/meta/global-general-group.php',
        'fields/meta/global-opengraph-group'    => __DIR__ . '/blueprints/fields/meta/global-opengraph-group.yml',
        'fields/meta/global-robots-group'       => require __DIR__ . '/blueprints/fields/meta/global-robots-group.php',
        'fields/meta/global-schema-group'       => __DIR__ . '/blueprints/fields/meta/global-schema-group.yml',
        'fields/meta/global-sitemap-changefreq' => require __DIR__ . '/blueprints/fields/meta/global-sitemap-changefreq.php',
        'fields/meta/global-twitter-group'      => __DIR__ . '/blueprints/fields/meta/global-twitter-group.yml', // deprecated
        'fields/meta/og-image'                  => __DIR__ . '/blueprints/fields/meta/og-image.yml',
        'fields/meta/opengraph-group'           => __DIR__ . '/blueprints/fields/meta/opengraph-group.yml',
        'fields/meta/robots-group'              => require __DIR__ . '/blueprints/fields/meta/robots-group.php',
        'fields/meta/sitemap-changefreq'        => require __DIR__ . '/blueprints/fields/meta/sitemap-changefreq.php',
        'fields/meta/sitemap-priority'          => __DIR__ . '/blueprints/fields/meta/sitemap-priority.yml',
        'fields/meta/twitter-group'             => __DIR__ . '/blueprints/fields/meta/twitter-group.yml', // deprecated
        'files/meta-logo'                       => __DIR__ . '/blueprints/files/meta-logo.yml',
        'files/meta-og-image'                   => __DIR__ . '/blueprints/files/meta-og-image.yml',
        'sections/meta/files'                   => __DIR__ . '/blueprints/sections/files.yml',
        // Panel preview sections removed for headless usage
        'tabs/meta/page'                        => require __DIR__ . '/blueprints/tabs/page.php',
        'tabs/meta/site'                        => require __DIR__ . '/blueprints/tabs/site.php',
    ],
    'fields' => require __DIR__ . '/config/fields.php',
    'filesMethods' => require __DIR__ . '/config/files-methods.php',
    // Routes, pageModels, sections, snippets, and templates removed for headless usage
    'pageMethods' => require __DIR__ . '/config/page-methods.php',
    'siteMethods' => require __DIR__ . '/config/site-methods.php',
    'translations' => [
        'da' => require __DIR__ . '/translations/da.php',
        'de' => require __DIR__ . '/translations/de.php',
        'en' => require __DIR__ . '/translations/en.php',
        'fr' => require __DIR__ . '/translations/fr.php',
        'sv_SE' => require __DIR__ . '/translations/sv_SE.php',
    ],
]);
