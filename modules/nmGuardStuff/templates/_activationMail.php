<?php echo __("Dear")?> <?php echo $username?>, 

<?php echo __("To continue the registration, please use the following link:")?>

<?php echo url_for('@nm_guard_stuff_activate?token='.$token, true)?>

<?php echo __("Welcome to")?> <?php echo sfConfig::get('app_setting_webname') ?>!
