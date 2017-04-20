<?php

namespace WPWaniKani\Plugin;

use WPWaniKani\Widget\StatWidget;

/**
 * Class WPWaniKaniPlugin
 *
 * @package WPWaniKani\Plugin
 */
class WPWaniKaniPlugin
{
    /**
     * @var Loader
     */
    protected $loader;

    /**
     * @var StatWidget
     */
    protected $statWidget;


    /**
     * TeamMembersPlugin Constructor
     */
    public function __construct()
    {
        $this->loader     = new Loader();
        $this->statWidget = new StatWidget();
    }

    /**
     * Add actions to the Loader
     */
    public function addActions()
    {
        $this->loader->addAction('widgets_init', $this, 'registerWidgets');
    }

    /**
     * Run the plugin
     */
    public function run()
    {
        $this->loader->run();
    }

    public function registerWidgets()
    {
        register_widget('WPWaniKani\Widget\StatWidget');
    }
}
