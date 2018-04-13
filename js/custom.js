jQuery(document).ready(function($) {
 
    jQuery("#primaryPostForm").validate();

    /* Load More Post AJAX */

    $('.load').on("click", function() {
    	var that = $(this);
    	var page = $(this).data('page');
    	var newPage = page + 1;
    	var ajaxUrl = $(this).data('url');

    	$.ajax({
    		url : ajaxUrl,
    		type: 'post',
    		data: {
    			page: page,
    			action: 'load_more'
    		},
    		error: function(err) {
    			console.log(err);
    		},
    		success: function(response) {
    			that.data('page', newPage);
    			$('.site-main').append(response);

    		}
    	});

    }); 
});

