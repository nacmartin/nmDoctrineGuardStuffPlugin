<?php

/**
 * PluginsfGuardUserProfileStuff
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class PluginsfGuardUserProfileStuff extends BasesfGuardUserProfileStuff
{
  public function getUser(){
    return Doctrine::getTable('sfGuardUser')->
        findOneById($this->user_id);
  }
}
