<?php

namespace Kanboard\Plugin\DashboardMod;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->setTemplateOverride('project/dropdown', 'dashboardmod:project/dropdown');
        $this->template->setTemplateOverride('dashboard/overview', 'dashboardmod:dashboard/overview');
    }

    public function onStartup()
    {
         Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        return 'Dashboard Mod';
    }

    public function getPluginDescription()
    {
        return t('Modify the Dashboard view');
    }

    public function getPluginAuthor()
    {
        return 'John Woltman IV';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/johnwoltman/kanboard-plugin-dashboardmod';
    }
}

