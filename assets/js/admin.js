

(function ($) {
    'use strict';

    jQuery(document).on('widget-updated', function (e, widget) {
        if (jQuery(widget).find('.carbon-container').length) {
            alert(insut_obj.widget_update);
            location.reload(true);
        }
    });

})(jQuery);