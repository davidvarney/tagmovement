jQuery(function(){
    // Instantiates any and all tooltips on a page
    jQuery('[data-toggle="tooltip"]').tooltip();
    // Handles all data-confirm related JS functionality
    jQuery("[data-confirm]").click(function (event) {
        var msg = jQuery(this).data("confirm");
        if (!confirm(msg)) {
            event.preventDefault();
        }
    });
});
