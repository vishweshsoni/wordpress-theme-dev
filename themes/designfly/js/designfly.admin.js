jQuery(document).ready(function($){
    var mediaUploader;  
    
     $('.one').on('click',function(e) {
		e.preventDefault();
		if( mediaUploader ){
			mediaUploader.open();	
			return;
		}
		var button=$(this);
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose a Profile Picture',
			button: {
				text: 'Choose Picture'
			},
			multiple: false
		});
		
		mediaUploader.on('select', function(){
			attachment = mediaUploader.state().get('selection').first().toJSON();	
			$('#profile-picture').val(attachment.url);
			$('.imgpr').val(attachment.url);
		});
		
		mediaUploader.open();
		
	}); 	
   
});