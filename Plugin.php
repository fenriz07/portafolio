<?php namespace Cmantikweb\Portafolio;

use Backend;
use System\Classes\PluginBase;

/**
 * portafolio Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'portafolio',
            'description' => 'No description provided yet...',
            'author'      => 'cmantikweb',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Cmantikweb\Portafolio\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'cmantikweb.portafolio.general' => [
                'tab' => 'portafolio',
                'label' => 'general'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'portafolio' => [
                'label'       => 'portafolio',
                'url'         => Backend::url('cmantikweb/portafolio/portafolio'),
                'icon'        => 'icon-leaf',
                'permissions' => ['cmantikweb.portafolio.general'],
                'order'       => 500,
            ],
        ];
    }
}
