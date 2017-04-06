<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Inherit from another theme
    |--------------------------------------------------------------------------
    |
    | Set up inherit from another if the file is not exists,
    | this is work with "layouts", "partials", "views" and "widgets"
    |
    | [Notice] assets cannot inherit.
    |
    */

    'inherit' => null, //default

    /*
    |--------------------------------------------------------------------------
    | Listener from events
    |--------------------------------------------------------------------------
    |
    | You can hook a theme when event fired on activities
    | this is cool feature to set up a title, meta, default styles and scripts.
    |
    | [Notice] these event can be override by package config.
    |
    */

    'events' => array(

        // Before event inherit from package config and the theme that call before,
        // you can use this event to set meta, breadcrumb template or anything
        // you want inheriting.
        'before' => function($theme)
        {
            // You can remove this line anytime.
            $theme->setTitle('Philippine Social Media Examiner');

            // Breadcrumb template.
            // $theme->breadcrumb()->setTemplate('
            //     <ul class="breadcrumb">
            //     @foreach ($crumbs as $i => $crumb)
            //         @if ($i != (count($crumbs) - 1))
            //         <li><a href="{{ $crumb["url"] }}">{!! $crumb["label"] !!}</a><span class="divider">/</span></li>
            //         @else
            //         <li class="active">{!! $crumb["label"] !!}</li>
            //         @endif
            //     @endforeach
            //     </ul>
            // ');
        },

        // Listen on event before render a theme,
        // this event should call to assign some assets,
        // breadcrumb template.
        'beforeRenderTheme' => function($theme)
        {

            $theme->asset()->add('css-bootstrap-min', 'css/bootstrap/bootstrap.min.css');
            $theme->asset()->add('css-styles', 'css/styles.css');
            $theme->asset()->add('css-unite-gallery', 'css/unite-gallery.css');
            $theme->asset()->add('css-bootstrap-glyphicons', 'css/bootstrap-glyphicons.css');
            $theme->asset()->add('css-font-awesome', 'css/font-awesome.css');
            $theme->asset()->add('css-responsive', 'css/responsive.css');
            $theme->asset()->add('css-fonts', 'css/fonts.css');
            $theme->asset()->add('css-styles', 'css/styles.css');

            $theme->asset()->add('js-jquery-3.1.1', 'js/jquery-3.1.1.js');
            $theme->asset()->add('js-unitegallery', 'js/unitegallery.js');
            $theme->asset()->add('js-ug-theme-tiles', 'js/ug-theme-tiles.js');
            $theme->asset()->add('js-bootstrap-min', 'js/bootstrap/bootstrap.min.js');
            $theme->asset()->add('js-player', 'js/player.js');
            $theme->asset()->add('js-scripts', 'js/scripts.js');

        },

        // Listen on event before render a layout,
        // this should call to assign style, script for a layout.
        'beforeRenderLayout' => array(

            'default' => function($theme)
            {
                // $theme->asset()->usePath()->add('ipad', 'css/layouts/ipad.css');
            }

        )

    )

);