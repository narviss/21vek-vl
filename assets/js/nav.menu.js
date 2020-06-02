$(document).on('ready', function() {	        
    $(function() {
        var menu = $('.navigation');
	            
        menu.find('.n-menu-parent > a').bind('click.nav', function(e) {
            var drop = $(this).parent().find('.n-dropmenu-item');
	                
            if (drop.css('display') == 'none') { 
                $('.n-dropmenu-item').each(function() { $(this).removeClass('active'); });
                drop.addClass('active');
            }
            else if (drop.css('display') == 'block') drop.removeClass('active');
	                
	        e.preventDefault();
	    });
	});
	
	$(function() {
	    $('.h-request').bind('click.hid', function(e) {
	        var modal = $('#modal-wind');
	        
	        modal
	            .height($('#wrapper').height() + $('.footer').height())
	            .fadeIn('slow')
	        
	        e.preventDefault();
	    });
	    
	    $('#mw-close').bind('click.hid', function(e) {
	        $('#modal-wind').fadeOut('slow');     
	        
	        e.preventDefault();
	    });
	});
});