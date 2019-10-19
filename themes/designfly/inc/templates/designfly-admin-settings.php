<h1>Sunset theme Settings</h1>
<?php settings_errors(); ?>
<?php 
// $picture = esc_attr(get_option('profile_picture'));
?>
    <div class="imgpr" id="profile-picture-preview">
    <img src="<?php print $picture;?>" class="pr-view" id="img">
</div>
<form method="post" action="options.php">
    <?php settings_fields('designfly-theme-options');?>
    <?php do_settings_sections('designfly_theme');?>    
    <?php submit_button();?>
</form>
<script>
    // var id=document.getElementById('img');
    // id.style.width='100px';
    // id.style.height='100px';
        
</script>