<?php

/* 
* This code comes from http://symfonians.org/browser/trunk/lib/form/RegisterForm.class.php
*/

class RegisterForm extends BasesfGuardUserForm
{
  /**
   * Form configuration
   */
  public function configure()
  {
    // widgets
    $this->setWidgets(array(
      'username'  => new sfWidgetFormInput(),
      'password'  => new sfWidgetFormInputPassword(),
      'password2' => new sfWidgetFormInputPassword(),
    ));

    //labels
    $this->widgetSchema->setLabels(array(
      'username'    => 'Username',
      'password'    => 'Password',
      'password2'   => 'Password again',
    ));

    // helps
    $this->widgetSchema->setHelps(array(
      'username'  => 'Your username should contains only alphanumeric, dash, dot or underscore characters, and begin with a letter.',
      'password'  => 'Your password must be 6 characters length minimum.',
      'password2' => 'Please confirm your password for avoiding typos.',
    ));

    // validators
    $this->setValidators(array(
      'username'  => new sfValidatorAnd(array(
        new sfValidatorString(array('min_length' => 3, 'max_length' => 20)),
        new sfValidatorRegex(array('pattern' => '/^[a-zA-Z]([a-zA-Z0-9._-]+)$/'), array('invalid' => 'Name "%value%" contains forbidden characters')),
      )),
      'password'  => new sfValidatorString(array('min_length' => 6, 'max_length' => 128)),
      'password2' => new sfValidatorString(array('min_length' => 6, 'max_length' => 128)),
    ));

    // post validator
    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
      new sfValidatorSchemaCompare('password', '==', 'password2'),
      new sfValidatorDoctrineUnique(array('model'  => 'sfGuardUser', 'column' => 'username')),
    )));

    $this->widgetSchema->setNameFormat('user[%s]');

    $oDecorator = new sfWidgetFormSchemaFormatterDiv($this->getWidgetSchema());
    $this->getWidgetSchema()->addFormFormatter('div', $oDecorator);
    $this->getWidgetSchema()->setFormFormatterName('div'); 

    $profile = $this->object->getProfile();
    $profileForm = new sfGuardUserProfileStuffRegisterForm($profile);
    $this->embedForm('profile', $profileForm);
  }

}
