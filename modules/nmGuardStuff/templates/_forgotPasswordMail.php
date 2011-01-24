<?php echo __("Dear")?> <?php echo $username?>, 

<?php echo __("Somebody (probably you) has requested a new password for his account in").' '.sfConfig::get('app_webname') ?>.

<?php echo __("Your new password is").': '.$password ?>".

<?php echo __("Now you should be able to sign in and change your password.")?>

<?php echo __("If you did not request a new password, just ignore this email and continue using your regular password.")?>
