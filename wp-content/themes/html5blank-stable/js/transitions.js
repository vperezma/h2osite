(function ($) {

    'use strict';

    $(function () {
        var $processItems = $('.process-item'),
            $images = $processItems.find('img');

        $images.on('click', function () {
            var $content = $(this).parent().find('.content');
            $content.toggle();
        });
    });

}(jQuery));