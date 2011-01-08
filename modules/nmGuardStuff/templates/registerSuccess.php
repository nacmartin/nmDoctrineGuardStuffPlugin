<div class="fiftypercent">
  <form action="<?php echo url_for('@nm_guard_stuff_register') ?>" method="post">
    <fieldset>
      <legend><?php echo __('Register') ?></legend>
      <?php echo $form->renderGlobalErrors() ?>
      <?php echo $form['username']->renderRow() ?>
      <?php echo $form['email_address']->renderRow() ?>
      <?php echo $form['password']->renderRow() ?>
      <?php echo $form['password2']->renderRow() ?>
    </fieldset>
    <p style="text-align:center">
      <?php echo $form['_csrf_token'] ?>
      <input type="submit" value="<?php echo __('Click here to register your account') ?>" class="button"/>
    </p>
  </form>
</div>
<div class="fiftypercent">
  <h2><?php echo __("Privacy")?></h2>   
  <p><?php echo __("We won't share your email with strangers.")?></p>
  <h2><?php echo __("Already registered")?></h2>   
  <p><?php echo __("Do you have an account?")?></p>
  <?php echo button_to(__('Sign in!'), '@sf_guard_signin', array('class' => 'button')) ?>
</div>
