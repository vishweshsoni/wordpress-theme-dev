<h1>Designfly options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('designfly-settings-group');?>
    <?php do_settings_sections('designfly_page');?>    
    <?php submit_button();?>
</form>
