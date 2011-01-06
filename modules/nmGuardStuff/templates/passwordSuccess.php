<div class="fiftypercent">
  <form action="<?php echo url_for('@nm_guard_stuff_password') ?>" method="post">
    <fieldset>
      <legend><?php echo __('Password forgotten?') ?></legend>
      <?php echo $form->renderGlobalErrors() ?>
      <?php echo $form['email']->renderRow() ?>
    </fieldset>
    <p style="text-align:center">
      <?php echo $form['_csrf_token'] ?>
      <input type="submit" value="<?php echo __('Next') ?>" class="button" />
    </p>
  </form>
</div>
