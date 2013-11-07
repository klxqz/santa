<?php

class shopSantaPluginSettingsAction extends waViewAction
{
    public function execute()
    {
        $plugin = wa()->getPlugin('santa');
        $settings = $plugin->getSettings();
        $this->view->assign('settings', $settings);
    }
}
