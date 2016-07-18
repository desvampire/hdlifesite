<?php namespace Karzuan\Ravechart;

use System\Classes\PluginBase;
use Db;

/**
 * ravechart Plugin Information File
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
            'name'        => 'ravechart',
            'description' => 'Plugin gives feature to get your HD-map',
            'author'      => 'karzuan',
            'icon'        => 'icon-leaf'
        ];
    }
///karzuan/ravechart/components/myform


    public function registerComponents()
    {
        return [
            '\karzuan\ravechart\components\Myform' => 'ravechart'
        ];
    }
}
