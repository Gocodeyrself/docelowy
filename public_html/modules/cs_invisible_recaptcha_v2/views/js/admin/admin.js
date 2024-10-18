$(document).ready(function() {
    var opt = jQuery("#CSOFT_PRODUCT_LATER_DISPLAY").val();
    if ( opt == "slick" ) {
        $('input[name="CSOFT_ACTIVATE_SLICK"]').parent().parent().parent().show()
    } else {
        $('input[name="CSOFT_ACTIVATE_SLICK"]').parent().parent().parent().hide()
    }
    $("#CSOFT_PRODUCT_LATER_DISPLAY").on('change', function(e) {
        opt = jQuery("#CSOFT_PRODUCT_LATER_DISPLAY").val();
        if ( opt == "slick" ) {
        	$('input[name="CSOFT_ACTIVATE_SLICK"]').parent().parent().parent().show()
        } else {
            $('input[name="CSOFT_ACTIVATE_SLICK"]').parent().parent().parent().hide()
        }
    });
});