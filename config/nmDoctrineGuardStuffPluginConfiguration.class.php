<?php 

class nmDoctrineGuardStuffPluginConfiguration extends sfPluginConfiguration
{
  /**
   *    @see sfPluginConfiguration
   *      
   */
  public function initialize()
  {
    if (sfConfig::get('app_nm_guard_stuff_plugin_routes_register', true) && in_array('nmGuardStuff', sfConfig::get('sf_enabled_modules', array())))
    {
      $this->dispatcher->connect('routing.load_configuration', array('nmGuardStuffRouting', 'listenToRoutingLoadConfigurationEvent'));
    }

  }
}
