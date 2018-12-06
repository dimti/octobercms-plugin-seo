<?php namespace Utopigs\Seo;

use System\Classes\PluginBase;
use System\Classes\SettingsManager;
use Backend;

class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ['RainLab.Translate'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
	{
		return [
			'name'		  => 'utopigs.seo::lang.plugin.name',
			'description' => 'utopigs.seo::lang.plugin.description',
			'author'	  => 'Utopig Studio',
			'icon'		  => 'icon-line-chart',
            'homepage'    => 'https://github.com/utopigstudio/octobercms-plugin-seo'
		];
	}

	public function registerComponents()
	{
		return [
			'\Utopigs\Seo\Components\Seo' => 'seo',
			'\Utopigs\Seo\Components\SeoModel' => 'seoModel',
    	];
	}

    public function registerPermissions()
    {
        return [
            'utopigs.seo.manage'  => [
                'tab'   => 'utopigs.seo::lang.plugin.name',
                'label' => 'utopigs.seo::lang.plugin.manage'
            ],
        ];
    }

    public function registerNavigation() {
        $menu =  [
            'seo' => [
                'label'       => 'utopigs.seo::lang.plugin.name',
                'description' => 'utopigs.seo::lang.plugin.description',
                'icon'        => 'icon-line-chart',
                'iconSvg'     => 'plugins/utopigs/seo/assets/images/seo-icon.svg',
                'url'         => Backend::url('utopigs/seo/seo'),
                'permissions' => ['utopigs.seo.manage'],
            ]
        ];
        
        return $menu;
    }

    public function registerFormWidgets()
    {
        return [
            'Utopigs\Seo\FormWidgets\SeoTab' => 'utopigs_seotab',
        ];
    }

}