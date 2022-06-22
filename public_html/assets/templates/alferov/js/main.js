$('.js-popup-form').each(function(){
        $(this).validate({
            submitHandler: function(form) {
                var target = $(form).data('target');
                $(form).ajaxSubmit({
                    url:        location.href,
                    type:       'POST',
                    dataType:   'html',
                    success: function(response, statusText, xhr, $form) {
                        var $popup = $(document.createElement('div')).append(response).find(target);
    
                        if($popup.hasClass('js-success')) {
                            $(target).find('.popup-form').html($popup.find('.popup-form').html());
                            setTimeout(function() { $(target).modal('hide') }, 2000);
                        } else {
                            $(target).find('.js-popup-form').html($popup.find('.js-popup-form').html());
                        }
                    }
                });
            }
        });
    });
    $('.js-contacts-form').each(function(){
        $(this).validate({
            submitHandler: function(form) {
                var target = $(form).data('target');
                $(form).ajaxSubmit({
                    url:        location.href,
                    type:       'POST',
                    dataType:   'html',
                    success: function(response, statusText, xhr, $form) {
                        var $target = $(document.createElement('div')).append(response).find(target);
    
                        if($target.hasClass('js-success')) {
                            $(target).html($target.html());
                        } else {
                            $(target).find('.js-contacts-form').html($target.find('.js-contacts-form').html());
                        }
                    }
                });
            }
        });
    });