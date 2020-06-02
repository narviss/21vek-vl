$(document).on('ready', function() {
	
	/* Инициализация слайдера */
    $('.box_skitter').skitter({
        theme: 'minimalist'
        ,interval: 5000
        ,label: false
        ,dots: false
        ,preview: false
        ,numbers: false
    });

    /* Инициализация range слайдера */
    $(function() {
    	var slrng = $('#ba-s-slider')
    		max = $('#s-cost-max'),
    		min = $('#s-cost-min');

	    slrng.slider({
	    	range: true
	      	,min: 0
	     	,max: 60000
	     	,values: [0, 60000]
	     	,animate: 'slow'
	     	,slide: function(event, ui) {
	     		min.val(ui.values[0]);
	     		max.val(ui.values[1]);
	     	}
	    });

	    min.val(slrng.slider('values', 0));
	    max.val(slrng.slider('values', 1));

	    min.on('change', function(event) {
	    	var val = $(this).val();

	    	if (val < slrng.slider('option', 'min')) val = slrng.slider('option', 'min');
	    	else if (val > slrng.slider('values', 1)) val = slrng.slider('values', 1);

	    	$(this).val(val);
	    	slrng.slider('values', 0, val);
	    });
	    max.on('change', function(event) {
	    	var val = $(this).val();

	    	if (val > slrng.slider('option', 'max')) val = slrng.slider('option', 'max');
	    	else if (val < slrng.slider('values', 0)) val = slrng.slider('values', 0);

	    	$(this).val(val);
	    	slrng.slider('values', 1, val);
	    });
	});
	        
    $(function() {	            
	    $('.ba-want').bind('click.act', function(e) {
	        if ($(this).attr('data-active') == 'false') {
	            $('.ba-want').each(function() { 
	                $(this).removeClass('active'); 
	                $(this).attr('data-active', 'false');
	            });
	                    
	            $(this).addClass('active');
	            $(this).attr('data-active', 'true');
	        }
	        else if ($(this).attr('data-active') == 'true') {
	            $(this).removeClass('active');
	            $(this).attr('data-active', 'false');
	        } 
	    });
	});
});