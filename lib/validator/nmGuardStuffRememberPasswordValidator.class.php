<?php
class nmGuardStuffRememberPasswordValidator extends sfValidatorBase
{
  public function configure($options = array(), $messages = array())
  {
    $this->addOption('email_field', 'email');
    $this->setMessage('invalid', "There is no account registered with this address");
  }
  public function doClean($values)
  {
    $email = $values;

    if ($user = Doctrine::getTable('sfGuardUser')->findOneByEmailAddress($email)){
      return $values;
    }

    throw new sfValidatorErrorSchema($this, array(
      'email' => new sfValidatorError($this, 'invalid'),
    ));

    // assume a required error has already been thrown, skip validation
    return $values;
  }
}
