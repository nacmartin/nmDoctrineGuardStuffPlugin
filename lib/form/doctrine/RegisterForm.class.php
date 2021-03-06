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
      'email_address'     => new sfWidgetFormInput(),
      'password'  => new sfWidgetFormInputPassword(),
      'password2' => new sfWidgetFormInputPassword(),
    ));

    //labels
    $this->widgetSchema->setLabels(array(
      'username'    => 'Username',
      'password'    => 'Password',
      'password2'   => 'Password again',
      'email_address'       => 'e-mail',
    ));

    // helps
    $this->widgetSchema->setHelps(array(
      'username'  => 'Your username should contain only alphanumeric, dash, dot or underscore characters, and begin with a letter.',
      'password'  => 'Your password must be 6 characters length minimum.',
      'password2' => 'Please confirm your password for avoiding typos.',
      'email_address'     => 'Please enter a valid email address. An activation link will be sent to this adress.'
    ));

    // validators
    $this->setValidators(array(
      'username'  => new sfValidatorAnd(array(
        new sfValidatorString(array('min_length' => 3, 'max_length' => 20), array('min_length' => 'Your username must have at least 3 characters. "%value%" is too short', 'max_length' => 'Your username must have at most 20 characters. "%value%" is too long')),
        new sfValidatorRegex(array('pattern' => '/^[a-zA-Z]([a-zA-Z0-9._-]+)$/'), array('invalid' => 'Name "%value%" contains forbidden characters')),
      )),
      'password'  => new sfValidatorString(array('min_length' => 6, 'max_length' => 128), array('min_length' => 'Your password must have at least 6 characters', 'max_length' => 'Password too long')),
      'password2' => new sfValidatorString(),
      'email_address'     => new sfValidatorAnd(array(
        new sfValidatorString(array('max_length' => 100), array('max_length' => 'Email too long')),
        new sfValidatorEmail(array(), array('invalid' => 'Must be a valid email address')),
      )),
    ));

    // post validator
    $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
      new sfValidatorSchemaCompare('password', '==', 'password2',array(),array('invalid' => 'Must be the same')),
      new sfValidatorDoctrineUnique(array('model'  => 'sfGuardUser', 'column' => 'username'), array('invalid' => 'There is already a user con this name')),
      new sfValidatorDoctrineUnique(array('model'  => 'sfGuardUser', 'column' => 'email_address'), array('invalid' => 'There is already a user con this email')),
    )));

    $this->widgetSchema->setNameFormat('user[%s]');

    $oDecorator = new sfWidgetFormSchemaFormatterDiv($this->getWidgetSchema());
    $this->getWidgetSchema()->addFormFormatter('div', $oDecorator);
    $this->getWidgetSchema()->setFormFormatterName('div'); 

  }

}
