<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Flexilatina',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Flexilatina </b>LTDA',

    'logo_mini' => '<b>FL</b>C',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'RESÚMEN GENERAL',
        [
            'text' => 'Resumen',
            'url'  => 'admin/resumen',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Alertas',
            'url'         => 'admin/alertas',
            'icon'        => 'bell-o',
            'label'       => 4,
            'label_color' => 'success',
        ],
        [
            'text'        => 'Graficos',
            'url'         => 'admin/graficos',
            'icon'        => 'bar-chart',
            'label_color' => 'success',
        ],
        [
            'text'        => 'Reportes',
            'icon'        => 'file',
            'label_color' => 'success',
            'submenu' => [
                [
                    'text'        => 'Actualizar',
                    'url'         => 'admin/actualizar',
                    'icon'        => 'repeat',
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Diario',
                    'url'         => 'admin/semanal',
                    'icon'        => 'file-text',
                    'label'       => 4,
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Semanal',
                    'url'         => 'admin/semanal',
                    'icon'        => 'file-text',
                    'label'       => 4,
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Mensual',
                    'url'         => 'admin/mensual',
                    'icon'        => 'file-text',
                    'label'       => 4,
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Anual',
                    'url'         => 'admin/anual',
                    'icon'        => 'file-text',
                    'label'       => 4,
                    'label_color' => 'success',
                ],
            ],
        ],
        [
            'text'        => 'Datos',
            'icon'        => 'file',
            'label_color' => 'success',
            'submenu' => [
                [
                    'text'        => 'Ordenes de trabajo',
                    'url'         => 'admin/OT',
                    'icon'        => 'file-text',
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Requisiciones',
                    'url'         => 'admin/RQ',
                    'icon'        => 'file-text',
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Ordenes de Compra',
                    'url'         => 'admin/OC',
                    'icon'        => 'file-text',
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Ordenes de Servicio',
                    'url'         => 'admin/OS',
                    'icon'        => 'file-text',
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Entradas',
                    'url'         => 'admin/RE',
                    'icon'        => 'file-text',
                    'label_color' => 'success',
                ],
                [
                    'text'        => 'Remisiones',
                    'url'         => 'admin/RV',
                    'icon'        => 'file-text',
                    'label_color' => 'success',
                ],
            ],
        ],

        'ESTADÍSTICAS',
        [
            'text' => 'Estadisticas',
            'url'  => 'admin/estadisticas',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Estadisticas Generales',
            'url'         => 'admin/generales',
            'icon'        => 'pie-chart',
            'label_color' => 'success',
        ],
        'PERFÍL',
        [
            'text' => 'Perfíl',
            'url'  => 'admin/estadisticas',
            'can'  => 'manage-blog',
        ],
        [
            'text' => 'Editar Perfíl',
            'url'  => 'admin/perfil/editar',
            'icon' => 'cog',
        ],
        'SUPER USUARIO',
        [
            'text' => 'Ver Registros',
            'url'  => 'admin/ver',
            'icon' => 'list',
        ],
        [
            'text' => 'supersu',
            'url'  => 'admin/supersu',
            'can'  => 'manage-blog',
        ],
        [
            'text'       => 'Entrar',
            'url'  => 'admin/supersu',
            'icon_color' => 'red',
            'icon' => 'slack',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
