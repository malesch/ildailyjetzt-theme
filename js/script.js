jQuery(document).ready(function(){  
jQuery("img.lazy").show().lazyload({effect : "fadeIn"});
    jQuery("a[class='box']").fancybox(
    {
    'autoSize'    : false,
	'autoHeight'    : true,
    'padding'                : 0,
	'fitToView': false,
    'width'                 : 816,
     
    'afterShow'    :   function() {
    
            jQuery('.fancybox-wrap').wrap('<div class="page" />');
			jQuery('.page').wrap('<div class="top" />');
			jQuery('#container').append(jQuery('.top'));
			
            
        }
    }
    );
	
    
});
