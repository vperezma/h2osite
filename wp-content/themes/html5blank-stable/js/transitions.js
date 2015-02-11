//========== Accordion controls===========//

jQuery(document).ready(function($) {
    var $window = $(window);
    var $data = $('#data');

    function checkWidth() {
        var windowsize = $window.width();
        if (windowsize <= 480) {
            //if the window is less than 480px wide then allow accordion
            $data.find('h3').off('click').click(function () {
                $(this).parent('#data').find('.content').toggleClass('active');
            });

        } else {
            $data.find('h3').off('click');
            $data.find('.content').show();
        }

    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);
});