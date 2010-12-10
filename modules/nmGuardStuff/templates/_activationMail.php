Dear <?php echo $username?>, 

To continue the registration, please use the following link:

<?php echo url_for('@nm_guard_stuff_activate?token='.$token, true)?>

Welcome to <?php sfConfig::get('app_setting_webname') ?>!
