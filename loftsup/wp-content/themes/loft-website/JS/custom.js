var page = 1;
jQuery(function($) {
    $(window).scroll(function() {
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': blog.security
        };
  
        $.post(blog.ajaxurl, data, function(response) {
           
            if($.trim(response) != '') {
                $('.gallery-grid').append(response);
                page++;
            } else {
                $('.loadmore').hide();
            }
       
        });
        $(window).unbind('scroll');
        
    });

});

