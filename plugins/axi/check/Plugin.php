<?php namespace Axi\Check;

use System\Classes\PluginBase;

/**
 * Check Plugin Information File
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
            'name'        => 'Check',
            'description' => 'Check database for autocomplete options',
            'author'      => 'Axi',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Axi\Check\Components\FormCheck' => 'checker'
        ];
    }

}
