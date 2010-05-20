<?php 

class nmGuardStuffRouting
{
  /**
   * Listens to the routing.load_configuration event.
   *
   * @param sfEvent An sfEvent instance
   * @static
   */
  static public function listenToRoutingLoadConfigurationEvent(sfEvent $event)
  {
    $r = $event->getSubject();

    // preprend our routes
    $r->prependRoute('nm_guard_stuff_signin', new sfRoute('/login', array('module' => 'nmGuardStuff', 'action' => 'signin')));
    $r->prependRoute('nm_guard_stuff_password', new sfRoute('/user/request-password', array('module' => 'nmGuardStuff', 'action' => 'password')));
    $r->prependRoute('nm_guard_stuff_changePassword', new sfRoute('/user/change-password', array('module' => 'nmGuardStuff', 'action' => 'changePassword')));
    $r->prependRoute('nm_guard_stuff_activate', new sfRoute('/user/activate/token/:token', array('module' => 'nmGuardStuff', 'action' => 'activate')));
    $r->prependRoute('nm_guard_stuff_register', new sfRoute('/user/register', array('module' => 'nmGuardStuff', 'action' => 'register')));
  }

}
