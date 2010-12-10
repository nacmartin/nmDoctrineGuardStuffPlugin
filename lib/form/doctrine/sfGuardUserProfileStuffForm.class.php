<?php

class sfGuardUserProfileStuffRegisterForm extends PluginsfGuardUserProfileStuffForm
{
  public function configure(){

    $this->useFields(array('email'));
    $this->setWidget('email', new sfWidgetFormInput());
    $this->widgetSchema->setHelps(array(
      'email'     => 'Please enter a valid email address. An activation link will be sent to this adress.'
    ));
    $this->setValidators(array(
      'email'     => new sfValidatorAnd(array(
        new sfValidatorString(array('max_length' => 100)),
        new sfValidatorEmail(),
      ))
    ));
    $this->validatorSchema->setPostValidator(new sfValidatorDoctrineUnique(array('model'  => 'sfGuardUser', 'column' => 'email_address')));

    $oDecorator = new sfWidgetFormSchemaFormatterDiv($this->getWidgetSchema());
    $this->getWidgetSchema()->addFormFormatter('div', $oDecorator);
    $this->getWidgetSchema()->setFormFormatterName('div'); 
  }
}
