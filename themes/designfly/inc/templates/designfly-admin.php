<h1>Designfly options</h1>
<?php settings_errors(); ?>
<?php $picture = esc_attr(get_option('profile_picture'));?>
<div class="imgpr">
    <img src="<?php print $picture;?>" class="pr-view" id="img">
</div>
<form method="post" action="options.php">
    <?php settings_fields('designfly-settings-group');?>
    <?php do_settings_sections('designfly_page');?>    
    <?php submit_button();?>
</form>
<script>
    var id=document.getElementById('img');
    id.style.width='100px';
    id.style.height='100px';
        
</script>