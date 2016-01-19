/**
 * Created by LeFranj on 29.12.2015.
 */
$(document).ready(function() {
    $('a[href="' + this.location.pathname + '"]').parent().addClass('active');
});