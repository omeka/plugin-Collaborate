<?php

class CollaboratePlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array(
        'install',
        'uninstall',
        'config_form',
        'config',
        'admin_items_panel_buttons',
        'admin_head'
    );

    public function hookInstall()
    {

    }

    public function hookUninstall()
    {

    }

    public function hookConfigForm()
    {

    }

    public function hookConfig()
    {

    }
    public function hookAdminHead($request)
    {
         queue_js_url("//togetherjs.com/togetherjs-min.js");
    }
    public function hookAdminItemsPanelButtons()
    {
        echo '<button onclick="TogetherJS(this); return false;">Start TogetherJS</button>';

    }
}
