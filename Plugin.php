<?php
namespace Kanboard\Plugin\DarkLight;
use Kanboard\Core\Plugin\Base;
class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/DarkLight/style.css"));
    }
    public function getPluginName()
    {
        return 'DarkLight';
    }
    public function getPluginDescription()
    {
        return t('This plugin overrides part of the default style in order to give a compact and clean theme.');
    }
    public function getPluginAuthor()
    {
        return 'Jake G';
    }
    public function getPluginVersion()
    {
        return '0.0.1';
    }
    public function getPluginHomepage()
    {
        return 'https://github.com/jieiku/DarkLight';
    }
}
