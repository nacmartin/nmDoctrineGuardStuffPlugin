<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@nm_guard_stuff_signin') ?>" method="post">
  <table>
    <?php echo $form ?>
  </table>

  <input type="submit" value="<?php echo __('Sign in!') ?>" />
  <a href="<?php echo url_for('@nm_guard_stuff_password') ?>"><?php echo __('Forgot your password?') ?></a>
</form>

